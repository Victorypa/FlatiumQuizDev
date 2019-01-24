<?php

use Illuminate\Http\Request;


Route::group(['namespace' => 'Person', 'prefix' => 'person'], function () {
    Route::post('/store', 'PersonController@store');
});
