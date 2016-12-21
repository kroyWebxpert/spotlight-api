<?php

use Illuminate\Http\Request;
use Spotlight\Admin\Http\Route;


Route::get('/admin', "Spotlight\Admin\Controllers\AdminController@index");
