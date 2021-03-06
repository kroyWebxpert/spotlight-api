<?php

namespace Api\Controllers;

use Illuminate\Http\Request;
use Illuminate\Log\Writer;
use Monolog\Logger as Monolog;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Helpers\Helper as Helper;
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

class APIController extends Controller
{
	
   /* @method : validateUser
	* @param : email,password,firstName,lastName
	* Response : json
	* Return : token and user details
	* Author : kundan Roy
	* Calling Method : get	
    */

    public function __construct(Request $request) {

        if ($request->header('Content-Type') != "application/json")  {
            $request->headers->set('Content-Type', 'application/json');
        } 
    } 
    
    public function index()
    {
       die('You have called API Controller');
    }
    
} 