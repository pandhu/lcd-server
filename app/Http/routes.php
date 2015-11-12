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

Route::get('/','LoginController@showLogin');

//route to show login form
Route::get('login', array('uses' => 'LoginController@showLogin'));

//route to process the login
Route::post('login', array('uses' => 'LoginController@doLogin'));

Route::get('/test', function() {
	return view('test');
});