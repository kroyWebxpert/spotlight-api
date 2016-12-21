<?php

namespace Spotlight\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Campaign extends BaseModel {

    /**
     * The compaigns table.
     * 
     * @var string
     */
    protected $table = 'campaigns';
    protected $guarded = ['created_at' , 'updated_at' , 'id' ];

}


