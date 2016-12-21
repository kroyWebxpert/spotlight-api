<?php
namespace  Spotlight\Admin\Http\Route;

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
    const GET_WEB_STEP = 'getWebStep';



   /*
   |--------------------------------------------------------------------------
   | Api Routes
   |--------------------------------------------------------------------------
   |
   | These are routes which are requested by clients that are consuming the API.
   |
   */
    const GET_API_INDEX = 'getApiIndex';

    const GET_API_STEP = 'getApiStep';

    const PUT_API_STEP = 'putApiStep';

    const GET_API_LAYOUT = 'getApiLayout';

    const GET_API_JOURNEY = 'getApiJourney';

    const GET_API_ELEMENT_DEFINITIONS = 'getApiElementDefinitions';
}