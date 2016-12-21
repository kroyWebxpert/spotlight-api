<?php

namespace Spotlight\Api\Controllers;

use Illuminate\Http\Request;
use Illuminate\Log\Writer;
use Monolog\Logger as Monolog;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Encryption\DecryptException;
use Spotlight\Helpers\Helper as Helper;
use Config;
use View;
use Redirect; 
use Validator;
use Response;
use Auth;
use Crypt;
use Cookie;
use Hash;
use Lang;
use Input;
use Closure;
use URL; 
use Doctrine\ORM\EntityManager;
use Spotlight\Entities\Clients\Campaigns;
use Spotlight\Validation\CampaignValidation;
use Spotlight\Repository\Clients\CampaignRepository as campaignRepo;

class AdminAPIController extends Controller
{
	 
    /**
     * @var campaignRepo
     */
    private $campaignRepo;
 
    public function __construct(campaignRepo $campaignRepo, Request $request)
    {
        $this->campaignRepo = $campaignRepo;

        if ($request->method()!="GET" &&  $request->header('Content-Type') != "application/json")  {
            //$request->headers->set('Content-Type', 'application/json');
            $message = "Invalid content type. Content-Type should be application/json";
            echo  json_encode([
                'status' => 0,
                'code' => 500,
                'message' => $message,
                'data'  =>  []
                ]
            );
            exit();
        } 


    } 
   /** @method : index 
    * Response : json 
    */
    public function index(Campaigns $campaign , Request $request)
    {
        
        $campaign_result  = $this->campaignRepo->getAllCampaign();
        if(count($campaign_result)>0)
        {
            foreach ($campaign_result as $key => $result) {

                $data['id']                     = $result->getId();
                $data['user_id']                = $result->getuserId();
                $data['client_id']              = $result->getclientId();
                $data['issue_id']               = $result->getissueId();
                $data['public_campaign_name']   = $result->getpublicCampaignName();
                $data['slug']                   = $result->getslug();
                $data['headline']               = $result->getheadline();
                $data['description']            = $result->getdescription();
                $data['cta_text']               = $result->getctaText();
                $data['cta_head_line']          = $result->getctaHeadline();
                $result_set[] = $data;   

            }
            $status     =   1;
            $message    =   "All Campaign" ;     
        }else{
            $status     =   0;
            $message    =   "No Campaign available!" ; 
            $result_set =   [];
        } 
        return Response::json(array(
                'status' => $status,
                'code' => 200,
                'message' => $message,
                'data'  =>  $result_set
                )
            );
    }

    public function getMatchFieldCriteria()
    {    
        $match_criteri_result  = $this->campaignRepo->getMatchFields();
         
        $data_result = [];
        if(count($match_criteri_result)>=1)
        {
            $msg = "List of campaign match criteria.";
            $status =   1;

            foreach ($match_criteri_result as $key => $value) {
                 
                 $data['id']            = $value->getId();
                 $data['field_key']     = $value->getfieldKey();
                 $data['type']          = $value->getType();
                 $data['fieldLabel']    = $value->getfieldLabel();
                 $data['is_geo_field']  = $value->getisGeoField();

                 if($value->getisGeoField()==1)
                 {
                    $data['is_selected'] = 1;
                 }else{
                    continue;
                    $data['is_selected'] = 0;
                 }

                 $data['edited_label']  = $value->getfieldLabel();
                 $data['editing']       =   0;
                 $data['group']         = $value->getFieldGroup();
                 $data['is_required']   = $value->getIsRequired();
                 $data['field_order']   = $value->getfieldOrder();
                 $data_result[] = $data; 
            }
 
        }else{
            $msg    = "Default Campaign match criteria not available.";
            $status =   0;
        }
        return Response::json(array(
                'status'  => $status,
                'code'    => 200,
                'message' => $msg,
                'data'    =>  $data_result
                )
            ); 
    }

    public function getCampaignDetailsById(Request $request, $id)
    {   
        
        $campaign_id = $request->input('campaign_id');
        $campaign_id = isset($campaign_id)?$campaign_id:$id;
        $filter_by = ['id'=> $campaign_id];
        $campaign_result  = $this->campaignRepo->filterCampaignByFieldName($filter_by,1);
        $data = [];
        if(count($campaign_result)==0)
        {
            $data   =   $request->all();
            $status = 0;
            $message = "Campaign details not available for requested Id.";
        }else{
            $data['id'] = $campaign_result->getId();
            $data['user_id'] = $campaign_result->getuserId();
            $data[snake_case('clientId')] = $campaign_result->getclientId();
            $data[snake_case('issueId')] = $campaign_result->getissueId();
            $data[snake_case('publicCampaignName')] = $campaign_result->getpublicCampaignName();
            $data[snake_case('slug')] = $campaign_result->getslug();
            $data[snake_case('headline')] = $campaign_result->getheadline();
            $data[snake_case('description')] = $campaign_result->getdescription();

            $data[snake_case('ctaText')] = $campaign_result->getctaText();
            $data[snake_case('ctaHeadline')] = $campaign_result->getctaHeadline();
            $data[snake_case('description')] = $campaign_result->getdescription();
            
            $status     =   1;
            $message    =   "Campaign details." ;     
        } 
        return Response::json(array(
                'status' => $status,
                'code' => 200,
                'message' => $message,
                'data'  =>  $data
                )
            );

    }

    public function validateCampaignTitle( Request $request)
    {   
         
        $title = $request->input('public_campaign_name');  
        
        $validator  = CampaignValidation::validate($request);
        
        if ($validator->fails()) {
            $error_msg  =   [];
            foreach ( $validator->messages()->all() as $key => $value) {
                        array_push($error_msg, $value);     
                    }
            return Response::json(array(
                'status' => 0,
                'code' => 200,
                'message' => $error_msg[0],
                'data'  =>  $request->all()
                )
            );
        }else{
            if(is_null($title))
            {
                return Response::json(array(
                'status' => 0,
                'code' => 200,
                'message' => "The public campaign name field is required.",
                'data'  =>  []
                )
            ); 
            }

        } 


        $title_result = $this->campaignRepo->validateCampaignTitle($title);
        if(count($title_result)>=1)
        {   
            $status = 0; // 0 => title taken
            $msg    = "Campaign title already taken!";
           
        }else{
            $status = 1; // 1 => tile available    
            $msg    = "Campaign title is available!";
        }
         return Response::json(array(
                'status'  => $status,
                'code'    => 200,
                'message' => $msg,
                'data'    =>  $request->all()
                )
            );   
         
    }

    public function createCampaign(Request $request, Campaigns $campaign )
    {   
        $campaign_id        =   $request->get('id')?$request->get('id'):$request->get('campaign_id');;
        $title              =   $request->get('public_campaign_name');
        $validator          =   CampaignValidation::validate($request);
        $error_msg          =   [];
        // Checkiing validation
        if ($validator->fails()) {
            foreach ($validator->messages()->messages() as $key => $value) {
                $error_msg[$key] = implode(",", $value);;
            }
            return Response::json(array(
                'status'    => 0,
                'code'      => 200,
                'message'   => $error_msg,
                'data'      =>  $request->all()
                )
            );
        } 
        // set default Title
        
        if(isset($title) && empty($title)){
            $default_title = $this->campaignRepo->setDefaultTitle($campaign);
        } 
        $title_result = $this->campaignRepo->validateCampaignTitle($title);
        $id = $this->campaignRepo->getCampaignById($campaign_id);
        
        if (!is_null($id)) { 
            
            if(count($title_result)>=1 )
            {
                if($campaign_id==$title_result->getId())
                {    
                    $msg = "Campaign details updated.";
                    $status =1; 
                    $this->campaignRepo->updateCampaign($id, $request); 
                    
                }else{
                    $status =0;
                   $msg = "Campaign title already taken!"; 
                } 
            }else{
                
                $msg = "Campaign  details updated.";
                $status =1; 
                $this->campaignRepo->updateCampaign($id, $request);
            }
                     
            return Response::json(array(
                'status' => $status,
                'code' => 200,
                'message' => $msg,
                'data'  =>  []
                )
            ); 
            
        } else {
              
            if(count($title_result)>=1 && !empty($title) )
            {
                $msg = "Campaign title already taken!";
                return Response::json(array(
                    'status'  => 0,
                    'code'    => 200,
                    'message' => $msg,
                    'data'    =>  $request->all()
                    )
                );
            }else{
                 $campaign->setPublicCampaignName($request->get('public_campaign_name')); 
                if(empty($title)){
                    $default_title = $this->campaignRepo->setDefaultTitle($campaign); 
                    $campaign->setPublicCampaignName($default_title);   
                }

                $campaign->setHeadline($request->get('headline')); 
                $campaign->setDescription($request->get('description')); 
                $campaign->setCtatext($request->get('cta_text')); 
                $campaign->setCtaHeadline($request->get('cta_headline'));
                //$campaign->setSlug(str_slug($request->get('public_campaign_name'),'-'));
                $this->campaignRepo->createCampaign($campaign);
                $msg = "Campaign title created sucessfully";
                 return Response::json(array(
                    'status'  => 1,
                    'code'    => 200,
                    'message' => $msg,
                    'data'    =>  ['campaign_id'=>$campaign->getId(),'public_campaign_name'=>isset($default_title)?$default_title:$request->get('public_campaign_name')]
                    )
                );  
            }
                 
        } 
 
    }

      /**
    * @method : getCampaignMatchCriteria
    * @method Type : Post
    * Request Type: json
    * Response Tye: json
    * Route : set-campaign-match-criteria
    */
  public function setCampaignMatchCriteria(Request $request)
    { 
        $campaign_id    = $request->input('campaign_id');
        $field_order    = $request->input('field_order');
        $field_id       = $request->input('field_id');
        $is_required    = $request->input('is_required');
        $field_label    = $request->input('field_label'); 

        $match_criteria     = $request->all();
        $error_msg          =   CampaignValidation::validateMatchField($request);
        if(count($error_msg)) {
            return Response::json(array(
                'status'    => 0,
                'code'      => 200,
                'message'   => $error_msg,
                'data'      =>  $request->all()
                )
            );
        }  

        if(is_numeric($campaign_id))
        {
             
            $this->campaignRepo->updateCampaignMatchfields($campaign_id,$request); 

            return response()->json(
                            [ 
                                "status"=>1,
                                "code" => 200,
                                "message"=>"Match field criteria successfully updated.",
                                'data'=> $request->all()
                            ]
                        ); 

        }else{

            $message = "Somthing went wrong" ;

                return Response::json(array(
                    'status' => 0,
                    "code" => 200,
                    'message' => $message,
                    'data'  =>  ""
                    )
                );
        } 
           
    }
    public function getCampaignMatchCriteriaById(Request $request, $id)
    {   
        $campaign_id = $request->input('campaign_id');
        $campaign_id = isset($campaign_id)?$campaign_id:$id;

        $campaign_match_field  = $this->campaignRepo->getCampaignMatchfieldById($campaign_id);
       
        $data = [];
        if(count($campaign_match_field)==0)
        {
            $data   =   $request->all();
            $status = 0;
            $message = "Campaign match criteria details not available for requested Id.";
        }else{
            
            foreach ($campaign_match_field as $key => $campaign_result) {
                 
                $data['id']                      = $campaign_result->getId();
                $data['user_id']                 = $campaign_result->getuserId();
                $data[snake_case('clientId')]    = $campaign_result->getclientId();
                $data[snake_case('campaign_id')] = $campaign_result->getCampaignId();
                $data[snake_case('field_order')] = $campaign_result->getFieldOrder();
                $data[snake_case('field_id')]    = $campaign_result->getFieldId();
                $data[snake_case('field_label')] = $campaign_result->getFieldLabel();
                $data[snake_case('is_required')] = $campaign_result->getIsRequired();
                $data_result[] = $data;
            }
            $status     =   1;
            $message    =   "Campaign details." ;     
        } 

        return Response::json(array(
                'status' => $status,
                'code' => 200,
                'message' => $message,
                'data'  =>  $data_result
                )
            );

    }
    
} 