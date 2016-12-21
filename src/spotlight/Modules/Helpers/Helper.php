<?php

namespace Spotlight\Helpers;

use Illuminate\Http\Request;
use Mail,Auth,Config,View,Input,session,Crypt,Hash,Html,Redirect;
use Illuminate\Support\Str;
use Phoenix\EloquentMeta\MetaTrait; 
use Illuminate\Support\Facades\Lang;
use Validator; use Illuminate\Database\Eloquent\SoftDeletes;
use Response;  
use Spotlight\Models\Campaign;

class Helper {

    /**
     * function used to check stock in kit
     *
     * @param = null
     */
    
    public function generateRandomString($length) {
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));

        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }

         return $key;
    }
/* @method : isCompaignTitleExist
    * @param : compaign_title
    * Response :  json
    * Return : campaign details
    */
    public function isCompaignTitleExist($request)
    {
        return  Campaign::where('public_campaign_name',$request->get('public_campaign_name'))->count();
    }  
     
}
