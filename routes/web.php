<?php

Route::get('/', 'Form\FormController@index');

Route::group(['prefix' => 'cards'], function () {
    Route::get('/', 'Card\CardController@index');

    Route::get('/{card}/rooms', 'Room\RoomController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
