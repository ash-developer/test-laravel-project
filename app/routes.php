<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',         function () { return View::make('main'); });
Route::get('/services', function () { return View::make('services'); });
Route::get('/reviews',  function () { return View::make('reviews'); });
Route::get('/contact',  function () { return View::make('contact'); });

Route::group(array('prefix' => 'admin'), function() {

    Route::get('/', 'AdminController@index');

    Route::group(array('prefix' => 'pages'), function() {
        Route::get('/', 'PagesController@index');
        Route::get('/create', ['as' => 'admin.pages.create', 'uses' => 'PagesController@create']);
        Route::post('/create', ['as' => 'admin.pages.create', 'uses' => 'PagesController@create', 'before' => 'csrf']);
    });

});
