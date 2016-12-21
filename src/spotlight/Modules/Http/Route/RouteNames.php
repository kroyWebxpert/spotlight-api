<?php
namespace  Spotlight\Http\Route;

class RouteNames
{
   
   /*
   |--------------------------------------------------------------------------
   | Web Routes
   |--------------------------------------------------------------------------
   |
   | These are routes which are requested for Person side rendering of pages.
   |
   */
    const GET_CAMPAIGN_STEP = 'getCampaignStep';



   /*
   |--------------------------------------------------------------------------
   | Api Routes
   |--------------------------------------------------------------------------
   |
   | These are routes which are requested by clients that are consuming the API.
   |
   */
    const GET_API_INDEX       = 'getApiIndex'; 
    const CREATE_CAMPAIGN     = 'createCampaign';
    const EDIT_CAMPAIGN       = 'editCampaign'; 
    const GET_CAMPAIGN        = 'getCampaign';
    const DELETE_CAMPAIGN     = 'deleteCampaign';
    const GET_CAMPAIGN_INDEX  = 'getCampaignIndex'; 

}