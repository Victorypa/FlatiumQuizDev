<?php

use Illuminate\Http\Request;


Route::group(['namespace' => 'Person', 'prefix' => 'person'], function () {
    Route::post('/store', 'PersonController@store');
});

Route::group(['namespace' => 'Card', 'prefix' => 'card'], function () {
    Route::post('/store', 'CardController@store');
});


Route::group(['namespace' => 'Calculator', 'prefix' => 'calculator'], function () {
    Route::post('/', 'CalculatorController@store');
});
