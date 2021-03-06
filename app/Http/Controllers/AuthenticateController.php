<?php

namespace App\Http\Controllers;

use App\User as User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mockery\CountValidator\Exception;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
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


    public function register(Request $request){
    	$credentials = $request->only('campaign', 'campaignAdmin');		
        $credentials['email']='sadmbsb@assa.com';
		$credentials['password']='abc';
       	$validator = \Validator::make($credentials, [
            'email' => 'required|email|unique:users',
            'password' => 'required']);


	        if ($validator->fails()) {
	           return response()->json(['error' => 'This user such a already exist'], 422);
	        }
       		$user = User::create($credentials);
 		    $token = JWTAuth::fromUser($user);
	        return response()->json(compact('token'));



    }

    public function authenticate(Request $request)
    {   
	   $user = $_GET['user'];
	   if($user!='admin@123'){
	   return response()->json(0,200);
	   }else{
	   return response()->json(1,200);
	   }
       
        // grab credentials from the request
        $credentials = $request->only('email', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        return response()->json(compact('token'));
    }


    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

}
