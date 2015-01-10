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

Route::model('page', 'Page');

Route::get('/',         function () { return View::make('main'); });
Route::get('/services', function () { return View::make('services'); });
Route::get('/reviews',  function () { return View::make('reviews'); });
Route::get('/contact',  function () { return View::make('contact'); });

Route::any('/login',  ['as' => 'login', 'uses' => 'AuthController@login']);


Route::group(array('prefix' => 'admin', 'before' => 'auth'), function() {

    Route::get('/', 'AdminController@index');

    Route::group(array('prefix' => 'pages'), function() {
        Route::get('/', ['as' => 'admin.pages', 'uses' => 'PagesController@index']);
        Route::get('/create', ['as' => 'admin.pages.create', 'uses' => 'PagesController@create']);
        Route::post('/create', ['as' => 'admin.pages.create', 'uses' => 'PagesController@create', 'before' => 'csrf']);
        Route::get('/edit/{page}', ['as' => 'admin.pages.edit', 'uses' => 'PagesController@edit']);
        Route::post('/edit/{page}', ['as' => 'admin.pages.edit', 'uses' => 'PagesController@edit', 'before' => 'csrf']);
    });

});
