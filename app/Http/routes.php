<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Index page
Route::get('', ['as' => 'index', function() {
	return response()->view('index');
}]);

Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'ItemController@index']);

Route::get('/mybids', ['as' => 'mybids', 'uses' => 'BidController@index']);

Route::get('/myitems', ['as' => 'myitems', 'uses' => 'ItemController@user_items']);

Route::get('/search', 'ItemController@search');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Item resource controller
Route::resource('item', 'ItemController');

// Bid controller
Route::resource('bid', 'BidController');
