<?php

use Illuminate\Http\Request;
use Spotlight\Http\Route\RouteNames;
 

Route::group(['prefix' => 'admin/api/v1'], function()
{
	
	header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
    header('Access-Control-Allow-Credentials: true');

	Route::match(['post','get'],'create-field-label','Admin\Controllers\AdminApiController@setFieldLabel');	
	//Route::match(['post','get'],'set-campaign-match-criteria','Admin\Controllers\AdminApiController@setCampaignMatchCriteria');	
	Route::match(['post','get'],'delete-campaign-match-criteria','Admin\Controllers\AdminApiController@deleteCampaignMatchCriteria');	
   /**
	* Show all Campaign
	*/ 
	Route::get('campaign','Api\Controllers\AdminAPIController@index');	
   /**
	* Show Campaign by ID
    */ 
	Route::get('campaign/{id}','Api\Controllers\AdminAPIController@getCampaignDetailsById');	
   /**
	*Create Campaign / Update Campaign
	*/ 
	Route::post('campaign','Api\Controllers\AdminAPIController@createCampaign');	
   /**
	* Show  default match criteria for campaign
	*/
	Route::get('match-criteria','Api\Controllers\AdminAPIController@getMatchFieldCriteria');	
   /**
	* Add/update match criteria to campaign   
	*/
	Route::post('campaign-match-criteria','Api\Controllers\AdminAPIController@setCampaignMatchCriteria');	
	
	/**
	* Add/update match criteria to campaign   
	*/
	Route::get('match-criteria/{id}','Api\Controllers\AdminAPIController@getCampaignMatchCriteriaById');	
	

   /**
	* Save target from ciscero API   
	*/
	Route::post('target','Api\Controllers\TargetAPIController@index'); 	 
	
   /**
	* get target from ciscero API   
	*/
	Route::get('target/city','Api\Controllers\TargetAPIController@targetCity'); 	 
	/**
	* get target state    
	*/
	Route::get('target/state','Api\Controllers\TargetAPIController@targetState'); 	 
	/**
	* get target party  
	*/
	Route::get('target/party','Api\Controllers\TargetAPIController@targetParty'); 	 
	/**
	* get target channel  
	*/
	Route::get('target/channel','Api\Controllers\TargetAPIController@targetChannel'); 	 
	

});



