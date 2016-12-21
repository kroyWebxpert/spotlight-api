<?php

use Illuminate\Http\Request;


Route::get('/admin', "Admin\Controllers\AdminController@index");
