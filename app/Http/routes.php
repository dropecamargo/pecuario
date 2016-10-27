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
Route::get('login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
Route::post('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@postLogin']);

/*
|--------------------------------------------------------------------------
| Secure Routes Application
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth'], function()
{
	Route::get('/', ['as' => 'dashboard', 'uses' => 'HomeController@index']);
	Route::resource('especies', 'EspeciesController', ['except' => ['destroy']]);
	Route::resource('razas', 'RazasController', ['except' => ['destroy']]);
	Route::resource('hato','HatoController',['except'=>['destroy']]);
	Route::resource('lote','LoteController',['except'=>['destroy']]);
	Route::resource('animal','AnimalController',['except' => ['destroy']]);
});




