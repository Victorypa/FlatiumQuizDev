<?php

Route::get('/', 'Form\FormController@index');

Route::group(['prefix' => 'cards', 'namespace' => 'Card'], function () {
    Route::get('/A', 'ACardController@index');
});
