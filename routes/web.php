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

    // Route::get('/form', 'Form\FormController@index');
    // Route::post('/form/store', 'Form\FormController@store');

    Route::get('/result', 'Result\ResultController@index');

    Route::get('/square', 'Square\SquareCountController@index');
    Route::post('/square/store', 'Square\SquareCountController@store');

    Route::get('/decoration', 'Decoration\DecorationController@index');
    Route::post('/decoration/store', 'Decoration\DecorationController@store');

    Route::get('/material-category', 'Material\MaterialCategoryController@index');
    Route::post('/material-category/store', 'Material\MaterialCategoryController@store');

    Route::get('/start-date', 'Date\StartDateController@index');
    Route::post('/start-date/store', 'Date\StartDateController@store');

    Route::get('/design-skills', 'Design\DesignSkillsController@index');
    Route::post('/design-skills/store', 'Design\DesignSkillsController@store');

    Route::get('/calculate-result', 'CalculateResult\CalculateResultController@index');


    Route::get('/clicks', 'Card\Click\ClickController@index');
    Route::post('/clicks/store', 'Card\Click\ClickController@store');

    Route::get('/{card}', 'Card\CardController@show');
});

Route::group(['prefix' => 'clicks', 'namespace' => 'Card\Click'], function () {
    Route::post('/store', 'ClickController@store');
});

Route::group(['middleware' => 'auth', 'prefix' => 'panel'], function () {
    Route::get('/', 'Panel\PanelController@index')->name('panel.index');
    Route::get('/cards/clicks', 'Card\Click\ClickController@index')->name('clicks.index');
    Route::get('/calculators', 'Calculator\CalculatorController@index')->name('calculators.index');

    Route::get('/prices', 'Price\PriceController@index')->name('prices.index');
    Route::patch('/prices/{price}', 'Price\PriceController@update');

    Route::get('/decorations/clicks', 'Card\Click\DecorationController@index')->name('decoration.clicks');
    Route::get('/material-category/clicks', 'Card\Click\MaterialCategoryController@index')->name('material_category.clicks');
    Route::get('/start-date/clicks', 'Card\Click\StartDateController@index')->name('start_date.clicks');
    Route::get('/design-skills/clicks', 'Card\Click\DesignSkillController@index')->name('design_skill.clicks');
});



// Auth::routes();


Route::get('/test/amo', 'AmoController@index');
