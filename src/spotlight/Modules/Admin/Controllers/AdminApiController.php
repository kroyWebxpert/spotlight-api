<?php

namespace Spotlight\Admin\Controllers;

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
use DB;
//use Doctrine\ORM\EntityManagerInterface;
//use Spotlight\Entities\Campaign; 
use Spotlight\Models\Campaign; 
use Illuminate\Database\Seeder;
use Eloquent;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Spotlight\Models\MatchCriteria;
use Spotlight\Models\SetCampaignMatchCriteria; 
use laravelDoctrine\Orm\Types\Json;



class AdminApiController extends Controller
{
	
   /** 
    * Method : __construct
	* Author : kundan Roy
    */
    public function __construct(Request $request) {

        if ($request->header('Content-Type') != "application/json")  {
           $request->headers->set('Content-Type', 'application/json');
        } 
    } 
   /**
    * @method : getCampaignList
    * @method Type : GET
    * Request : null
    * Response Tye: json
    * Route : get-campaign-list
    * Desc : List of all created campaign
    */  
    public function getCampaignList(Request $request)
    {
        $compaing_data =  Campaign::all(); 
        return response()->json(
                            [ 
                                "status"=>1,
                                "code" => 200,
                                "message"=>"User validated successfully.",
                                'data'=>$compaing_data
                            ]
                        ); 
 
    }
   /**
    * @method : getMatchCriteria
    * @method Type : GET
    * Request : null
    * Response Type: json
    * Route : get-campaign-criteria
    * Desc : List of all default match criteria field
    */ 
    public function getMatchCriteria()
    {
        $criteria = MatchCriteria::all();
        if($criteria->count())
        {
           $message     = "List of match criteria";
           $data        =  $criteria->toArray(); 
        }else{
            $message    = "List of match criteria";
            $data       =  [];
        }

        return response()->json(
                            [ 
                                "status"=>1,
                                "code" => 200,
                                "message"=>$message,
                                'data'=>$data
                            ]
                        );  

    }

    public function setFieldLabel(Request $request)
    {
        $label_id   = $request->get('label_id');
        $label      = MatchCriteria::find($label_id);
        $field_label = $request->get('field_label'); 


        if($label!=null)
        {
            $label->field_label =$field_label;
            $message = "Label updated successfully.";
            $status =1;             
        }else{
            $message = "Label id does not exist!";
            $status = 0;
        }

        return response()->json(
                            [ 
                                "status"=>$status,
                                "code" => 200,
                                "message"=>$message,
                                'data'=>$request->all()
                            ]
                        ); 

    }

    public function deleteCampaignMatchCriteria(Request $request)
    {
        $campaign_id    = trim($request->get('campaign_id'));
        $field_id       = trim($request->get('field_id'));

        $set_match_criteria  = SetCampaignMatchCriteria::where('campaign_id',$campaign_id)
                                                                ->where('field_id',$field_id)
                                                                ->delete();
        $message = "Match field criteria deleted successfully";

                return Response::json(array(
                    'status' => 1,
                    "code" => 200,
                    'message' => $message,
                    'data'  =>  $request->all()
                    )
                );

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
        $campaign_id    = trim($request->input('campaign_id'));
        $field_order    = trim($request->input('field_order'));
        $field_id       = trim($request->input('field_id'));
        $is_required    = trim($request->input('is_required'));
        $field_label    = trim($request->input('field_label')); 

        $match_criteria = $request->all();
        
        $all_match_criteria = isset($match_criteria[0])?1:0;
       
       if($all_match_criteria==1)
       {
            foreach ($match_criteria as $key => $result) {

                    $campaign_id    = $result['campaign_id'];
                    $field_order    = $result['field_order'];
                    $field_id       = $result['field_id'];
                    $is_required    = $result['is_required']; 
                    $field_label    = $result['field_label'];

                    $set_match_criteria  = SetCampaignMatchCriteria::where('campaign_id',$campaign_id)
                                                                        ->where('field_id',$field_id)
                                                                     ->first();
                    
                    if($set_match_criteria==null)
                    {
                        $set_match_criteria                 = new SetCampaignMatchCriteria; 
                        $set_match_criteria->campaign_id    =   $campaign_id;
                        $set_match_criteria->field_order    =   $field_order;
                        $set_match_criteria->field_id       =   $field_id;
                        $set_match_criteria->is_required    =   $is_required; 
                        $set_match_criteria->field_label    =   $field_label;
                        $set_match_criteria->save();  
                    }else{

                        $set_match_criteria                 =  SetCampaignMatchCriteria::find($set_match_criteria->id); 
                        
                        $set_match_criteria->campaign_id    =   $campaign_id;
                        $set_match_criteria->field_order    =   $field_order;
                        $set_match_criteria->field_id       =   $field_id;
                        $set_match_criteria->is_required    =   $is_required;
                        $set_match_criteria->field_label    =   $field_label; 
                        $set_match_criteria->save(); 
                    } 
            }
            return response()->json(
                                    [ 
                                        "status"=>1,
                                        "code" => 200,
                                        "message"=>"Match field criteria successfully updated.",
                                        'data'=> $request->all()
                                    ]
                                ); 

       } 

        $validator = Validator::make($request->all(), [
            'campaign_id' => 'required' 
        ]);  

        if($validator->fails())
        {   
            if(!is_numeric($campaign_id))
            {  
                $message = "Campaign id is required" ;

                return Response::json(array(
                    'status' => 0,
                    "code" => 200,
                    'message' => $message,
                    'data'  =>  ""
                    )
                );
            } 
        }  
        if(is_numeric($campaign_id))
        {
             
             $set_match_criteria  = SetCampaignMatchCriteria::where('campaign_id',$campaign_id)
                                                                ->where('field_id',$field_id)
                                                                ->first();
            if($set_match_criteria==null)
            {
                $set_match_criteria                 = new SetCampaignMatchCriteria; 
                $set_match_criteria->campaign_id    =   $campaign_id;
                $set_match_criteria->field_order    =   $field_order;
                $set_match_criteria->field_id       =   $field_id;
                $set_match_criteria->is_required    =   $is_required; 
                $set_match_criteria->field_label    =   $field_label;
                $set_match_criteria->save();  
            }else{
                $set_match_criteria                 =  SetCampaignMatchCriteria::find($set_match_criteria->id); 
                $set_match_criteria->campaign_id    =   $campaign_id;
                $set_match_criteria->field_order    =   $field_order;
                $set_match_criteria->field_id       =   $field_id;
                $set_match_criteria->is_required    =   $is_required;
                $set_match_criteria->field_label    =   $field_label; 
                $set_match_criteria->save(); 
            }
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
   /**
    * @method : getCampaignById
    * Request Type: json
    * Response Type: json
    * Route : get-campaign/{id}
    * @param : id (type=int)
    */
    public function getCampaignById(Request $request,$id)
    {
        $compaing_data =  Campaign::find($id);
        return response()->json(
                            [ 
                                "status"=>1,
                                "code" => 200,
                                "message"=>"User validated successfully.",
                                'data'=>$compaing_data
                            ]
                        ); 
    }
   /**
    * @method Name : createCampaign
    * @mthod Type : post
    * Request Type: json
    * Response Tye: json
    * Route : create-campaign (create campaign)
    * Route : create-campaign/validate-title
    * Function : validate-title,Check unique title, check empty field
    * Action : Create,edit and update campaign
    * Variable ($campaign_id = campaign_id used for update compaign data, $title =  return 0 or 1 to check title is unique or not)
    */
    public function createCampaign(Request $request,$validation=null)
    {  
         
        $campaign_id    =  $request->input('id');
        $campaing_title =  $request->input('public_campaign_name');
        $helper         = new Helper; 
        
        $validator = Validator::make($request->all(), [
            'public_campaign_name' => 'required|max:200' 
        ]);  

        if($validator->fails())
        {   
            if(!is_numeric($campaign_id))
            {  
                $message = "Campaign title field is required" ;

                return Response::json(array(
                    'status' => 1,
                    "code" => 204,
                    'message' => $message,
                    'data'  =>  ""
                    )
                );
            } 
        } 

        $title          = $helper->isCompaignTitleExist($request); 
        if($validation==="validate-title")
        {
            $data = $request->all();
        
            if ($title==0)
            {
                $message = "Campaign title is available." ;
                $is_valid  = 1; 
                
            }else{
                $message    = "Campaign title already taken!";
                $is_valid   = 0; 
            }
            return Response::json(array(
                    'status' => 1,
                    "code" => 200,
                    "is_valid" => $is_valid,
                    'message' => $message,
                    'data'  =>  $data
                    )
                );     
        }
        
        if ($title!=0 || !empty($campaign_id)) {
  
            $campaign = Campaign::where('id',$campaign_id)->where('public_campaign_name',$campaing_title)->count();
           
            $is_valid = 1; 
            if($campaign==1)
            {      
                $message = "Campaign updated successfully." ;
                $campaing_data =  Campaign::find($campaign_id); 
                foreach ($request->all() as  $key => $value) {
                    $campaing_data->$key  =$value;
                }
                $campaing_data->slug = str_slug($campaing_title, '-');
                $campaing_data->save();  
                
            }elseif ($title==0 && !empty($campaign_id)) 
            {
                $message = "Campaign updated successfully." ;
                $campaing_data =  Campaign::find($campaign_id); 
                if($campaing_data==null)
                {   
                    $message = "Campaign id does not exist." ;
                    $campaing_data = $request->all();
                    $is_valid = 0;
                }else{
                    foreach ($request->all() as  $key => $value) {
                        $campaing_data->$key  =$value;
                    }
                        $campaing_data->slug = str_slug($campaing_title, '-');
                        $campaing_data->save(); 
                } 
                
            }else{  
                $message = "Campaign title already exist." ;
                $campaing_data = $request->all();
                $is_valid = 0;
            }
             
            return Response::json(array(
                'status' => 1,
                "code" => 200,
                'is_valid'   => $is_valid,
                'message' => $message,
                'data'  => $campaing_data
                )
            );
        }else
        {   
            $campaing_data = []; 
            foreach ($request->all() as  $key => $value) {
                $campaing_data[$key]  =$value;
            }
            $campaing_data['slug'] = str_slug($campaing_title, '-');
            $id = Campaign::create($campaing_data)->id;
            $campaing_result = Campaign::find($id);

            return response()->json(
                            [ 
                                "status"=>1,
                                "code" => 200,
                                "message"=>"Compaign created successfully.",
                                'data'=>$campaing_result
                            ]
                        ); 
        } 
    }
    
} 