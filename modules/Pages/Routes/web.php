<?php

use Illuminate\Support\Facades\Route;

Route::get('/pages', 'PagesController@index');
Route::get('/view', 'PagesController@view');