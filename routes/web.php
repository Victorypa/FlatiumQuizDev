<?php

Route::get('/', function () {
    return redirect('/cards');
});

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'cards'], function () {
    Route::get('/', 'Card\CardController@index')->name('cards.index');

    Route::get('/rooms', 'Room\RoomController@index');
    Route::post('/rooms/store', 'Room\RoomController@store');

    Route::get('/form', 'Form\FormController@index');
    Route::post('/form/store', 'Form\FormController@store');

    Route::get('/result', 'Result\ResultController@index');

    Route::get('/{card}', 'Card\CardController@show');
});

Route::group(['prefix' => 'clicks', 'namespace' => 'Card\Click'], function () {
    Route::post('/store', 'ClickController@store');
});

Route::group(['middleware' => 'auth', 'prefix' => 'panel', 'namespace' => 'Panel'], function () {
    Route::get('/', 'PanelController@index')->name('panel.index');
});



// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/test/amo', 'AmoController@index');
