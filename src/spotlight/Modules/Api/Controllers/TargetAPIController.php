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
use Spotlight\Entities\Masters\Targets;
use Spotlight\Validation\CampaignValidation;
use Spotlight\Repository\Clients\CampaignRepository as campaignRepo;
use Spotlight\Repository\Masters\TargetsRepository;
use Doctrine\DBAL\Types\DateTimeType;

class TargetAPIController extends Controller
{
	 
    /**
     * @var campaignRepo
     */
    private $campaignRepo;
 
    public function __construct(TargetsRepository $targetRepo, Request $request)
    {   
        $this->date = new \DateTime();    
        $this->targetRepo = $targetRepo;
        if ($request->header('Content-Type') != "application/json")  {
           $request->headers->set('Content-Type', 'application/json');
        } 

    } 
   /** @method : index 
    * Response : json 
    */
    public function index(Targets $targets , Request $request)
    { 
         
        $username = 'tech-data@bluestatedigital.com';
        $password = '1blu2tech3data';
        
        /* loop to get all targets information for below countries with alphabet order */
        $country = array('US','CA','GB');
        
        $letters =array();
        for ($i = 65; $i < 91; $i++) { 
           $letters[($i - 65)] = chr($i); 
        }

        // Obtain a token:
        $response = $this->targetRepo->getResponse('http://cicero.azavea.com/v3.1/token/new.json', "username=$username&password=$password");

        // Check to see if the token was obtained okay:
        if($response->success != True):
            exit('Could not obtain token.');
        endif; 
        // The token and user obtained are used for other API calls:
        $token  = $response->token;
        $user   = $response->user;

        $auth_string = "token=$token&user=$user&format=json";

        if(isset($country) && !empty($country) && isset($letters) && !empty($letters)){
            foreach($country as $c_code){
              foreach($letters as $letter){
                 $query_string  = "last_name=$letter*&country=$c_code&".$auth_string;
                 $response      = $this->targetRepo->getTargetResponse($query_string);
                 if(!empty($response)){
                     $response  = json_decode(json_encode($response), true);
                     $results   = $response['response']['results']['officials']; 
                     $this->saveTargetData($results,$targets);
                 }
              } 
            }
        }
    }


    public function saveTargetData($results,$targets){ 
      
        foreach($results as $key => $value){
            
            $target_uid = $value['id'];
            
            $valid_from = \Carbon\Carbon::parse($value['valid_from'])->year;
            $valid_to   = \Carbon\Carbon::parse($value['valid_to'])->year;
            
            if($valid_from<2000) 
            {
                continue; 
            }

            $targets = new Targets; // Add target to DB
            $status = $this->targetRepo->updateTarget($target_uid); 
            if(count($status)>=1)
            {   // update target to DB if exist
                $targets = $this->targetRepo->updateTarget($target_uid);
            }

            $phone_1    = isset($value['addresses']['0']['phone_1'])?$value['addresses']['0']['phone_1']:"";
            $city       = isset($value['addresses']['0']['city'])?$value['addresses']['0']['city']:"";
            $addresses1 = isset($value['addresses']['0']['address_1'])?$value['addresses']['0']['address_1']:"";
            $addresses2 = isset($value['addresses']['0']['address_2'])?$value['addresses']['0']['address_2']:"";
            $targets->setTargetUid($value['id']);
            $targets->setNameSuffix($value['name_suffix']);
            $targets->setFirstName($value['first_name']);
            $targets->setMiddleInitial($value['middle_initial']);
            $targets->setLastName($value['last_name']);
            $targets->setNickName($value['nickname']);
            $targets->setSalutation($value['salutation']);
            $targets->setTitle($value['office']['title']); 
            $targets->setPhone1($phone_1);
            $targets->setTargetCity($city);
            $targets->setTargetAddress1($addresses1);
            $targets->setTargetAddress2($addresses2);
            $targets->setOfcCountry($value['office']['district']['country']);
            $targets->setRepresentingState($value['office']['representing_state']);
            $targets->setPhotoOriginUrl($value['photo_origin_url']);
            $targets->setParty($value['party']);
            $targets->setNameFormal($value['office']['chamber']['name_formal']);
            //$targets->setCommittees($value['committees']);
            $targets->setWebFormUrl($value['web_form_url']);
            $targets->setLastUpdateDate(new \DateTime($value['office']['district']['last_update_date']));
            $targets->setChamberNameFormal($value['office']['chamber']['name_formal']);
            $targets->setValidFrom(new \DateTime($value['valid_from']));
            $targets->setValidTo(new \DateTime($value['valid_to']));
            $targets->setTermEndDate(new \DateTime($value['term_end_date']));
            $targets->setSk($value['sk']);
            $email_id =  isset($value['email_addresses'][0])?$value['email_addresses'][0]:'';
            $targets->setContactEmail($email_id);
            $identifier_twiter = (isset($value['identifiers'][0]['identifier_type']) && $value['identifiers'][0]['identifier_type']=="TWITTER")?"TWITTER":"";
            $targets->setTwitterIdentifier($identifier_twiter);
            //$indentifier_value = isset($value['identifiers'][0]['identifier_value'])?$value['identifiers'][0]['identifier_value']:"";
            $identifier_fb  = (isset($value['identifiers'][0]['identifier_type']) && $value['identifiers'][0]['identifier_type']=="FACEBOOK")?"FACEBOOK":"";
            $targets->setFacebookIdentifier($identifier_fb);
            $targets->setStatus($value['office']['representing_country']['status']);
            
            $rs  = $this->targetRepo->saveTarget($targets); 
        }
        $message = "Target data successfully imported.";

                return Response::json(array(
                    'status' => 1,
                    "code" => 200,
                    'message' => $message,
                    'data'  =>  []
                    )
                ); 
    }

    public function targetCity()
    {
        $data     = $this->targetRepo->getTargetCity();
        $message  = "Target city list." ;
        return Response::json(array(
                    'status' => 1,
                    "code" => 200,
                    'message' => $message,
                    'data'  =>  $data
                    )
                );  
    }
    public function targetState()
    {
        $data     = $this->targetRepo->getTargetState();
        $message  = "Target state list." ;
        return Response::json(array(
                    'status' => 1,
                    "code" => 200,
                    'message' => $message,
                    'data'  =>  $data
                    )
                );     
    }
    public function targetParty()
    {
       $data     = $this->targetRepo->getTargetParty();
        $message  = "Target party list." ;
        return Response::json(array(
                    'status' => 1,
                    "code" => 200,
                    'message' => $message,
                    'data'  =>  $data
                    )
                );   
    }

    public function targetChannel()
    {
       $data        = $this->targetRepo->getTargetChannel();
        $message    = "Target  channel list." ;
        return Response::json(array(
                    'status' => 1,
                    "code" => 200,
                    'message' => $message,
                    'data'  =>  $data
                    )
                );   
    }
  
}  