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

Route::get('/', ['as' => 'main', 'uses' => function () { return Redirect::route('page', ['path' => 'main']); }]);

Route::get('/login',  function () { return View::make('auth.login'); });
Route::post('/login',  ['as' => 'login', 'uses' => 'AuthController@login', 'before' => 'csrf']);
Route::get('/logout',  ['as' => 'logout', 'uses' => 'AuthController@logout']);

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function() {

    Route::get('/', ['as' => 'admin', 'uses' => function () { return View::make('admin.index'); }]);

    Route::group(array('prefix' => 'pages'), function() {
        Route::get('/', ['as' => 'admin.pages', 'uses' => 'AdminPagesController@index']);
        Route::get('/create', ['as' => 'admin.pages.create', 'uses' => 'AdminPagesController@create']);
        Route::post('/create', ['as' => 'admin.pages.create', 'uses' => 'AdminPagesController@create', 'before' => 'csrf']);
        Route::get('/edit/{page}', ['as' => 'admin.pages.edit', 'uses' => 'AdminPagesController@edit']);
        Route::post('/edit/{page}', ['as' => 'admin.pages.edit', 'uses' => 'AdminPagesController@edit', 'before' => 'csrf']);
    });

});

Route::get('/{path}', ['as' => 'page', 'uses' => 'PagesController@page']);

App::missing(function($exception) {
    return Response::view('errors.missing', array(), 404);
});
