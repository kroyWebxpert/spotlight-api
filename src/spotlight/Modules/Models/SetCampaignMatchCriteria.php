<?php

namespace Spotlight\Models;

use Illuminate\Database\Eloquent\Model;

class SetCampaignMatchCriteria extends BaseModel {

    /**
     * The compaigns table.
     * 
     * @var string
     */
    protected $table = 'campaign_matchfields';
    /**
	 * The database name used by the model.
	 *
	 * @var string
	 */
   //protected $connection = 'mysql_2';
    
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $guarded = ['created_at' , 'updated_at' , 'id' ];

}


