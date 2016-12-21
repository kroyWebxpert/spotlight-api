<?php

namespace App\Http\Controllers;
use App\User as User;
use Illuminate\Http\Request;
use App\Http\Requests;

class CampaignController extends Controller
{
	public function __construct()
    {
       header('Access-Control-Allow-Origin: *');
	   header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
       header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
       header('Access-Control-Allow-Credentials: true');
    }
 
    public function index(){

        return view('api.auth');
    }


    public function CreateCampaign(Request $request){
	     $Campaignname = $_GET['campaign'];
		 $CampaignAdminname = $_GET['campaignAdmin'];
		 return response()->json($name,200);
    
    }



}
