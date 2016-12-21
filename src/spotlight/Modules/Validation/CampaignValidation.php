<?php
namespace Spotlight\Validation;
 
use Input; 
use Validator;
use Request;

class CampaignValidation 
{ 
    /**
     * The campaign validation rules.
     *
     * @return array
     */

    public static function validate($request)
    {
        $campaing_title =   $request->get('public_campaign_name');
        $cta_text       =   $request->get('cta_text');
        $cta_headline   =   $request->get('cta_headline');
        $headline       =   $request->get('headline');
        $description    =   $request->get('description');
        $rules          =   [];
         
        if($cta_text!=null || isset($cta_text))
        {
              $rules =  [
                         'cta_text'   => 'Max:500',
                         'campaign_id' => 'Required'
                      ];
          }elseif ($cta_headline!=null || isset($cta_headline)) 
          {
              $rules =  [
                         'cta_headline'   => 'Max:200',
                         'campaign_id' => 'Required'
                      ];
          } 
          elseif ($campaing_title!=null  || isset($campaing_title)) { 
                $rules =   [
                          'public_campaign_name' => 'Max:200' 
                      ];
          }elseif ($headline!=null || isset($headline)) {

                $rules =   [
                           'headline' => 'Max:200',
                           'campaign_id' => 'Required'                                   ];
          }
       
         
        return Validator::make($request->all(), $rules);
    }

    public static function validateMatchField($request)
    {
        $campaign_id    = $request->input('campaign_id');
        $field_order    = $request->input('field_order');
        $field_id       = $request->input('field_id');
        $field_label    = $request->input('field_label'); 

        $rules          =   [];
        $error_msg      =   [];
        switch ( Request::method() ) {
            case 'POST': { 
            $rules =  [
                      
                      'field_id'    => 'Required',
                      'field_label' => 'Required', 
                    ]; 
                } 
            $data  = $request->all(); 
            foreach ($data['match_field'] as $key => $value) {
              $validator   =   Validator::make($value, $rules);
               if($validator->fails()) {
                 
                foreach ($validator->messages()->messages() as $key2 => $value) {
                    $error_msg[$key][$key2] = implode(",", $value);;
                    } 
                } 
            }

            $rule   =   [ 
                            'campaign_id' => 'Required' 
                          ]; 
            $validator   =   Validator::make($request->all(), $rule);    
            if($validator->fails()) {
                
                foreach ($validator->messages()->messages() as $key2 => $value) {
                    $error_msg[$key][$key2] = implode(",", $value);
                    } 
                } 
            default:break;
        }  
        return $error_msg;
    }
 
}
