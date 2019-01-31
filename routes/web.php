<?php

Route::get('/', function () {
    return redirect('/cards');
});

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'cards'], function () {
    Route::get('/', 'Card\CardController@index');
    Route::get('/{card}', 'Card\CardController@show');

    Route::get('/{card}/rooms', 'Room\RoomController@index');
    Route::post('/{card}/rooms/store', 'Room\RoomController@store');

    Route::get('/{card}/form', 'Form\FormController@index');
    Route::post('/{card}/form/store', 'Form\FormController@store');

    Route::get('/{card}/result', 'Result\ResultController@index');
});

Route::get('/redirect', 'RedirectController@redirect');

Route::group(['middleware' => 'auth', 'prefix' => 'panel', 'namespace' => 'panel'], function () {
    Route::get('/', 'PanelController@index');
});



// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
