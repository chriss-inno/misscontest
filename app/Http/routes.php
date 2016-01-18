<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','HomeController@index');
Route::get('login','UserController@login');
Route::post('login','UserController@postLogin');
Route::post('forgotPassword','UserController@forgotPassword');

//User modules
Route::get('register','UserController@registration');
Route::post('register','UserController@postRegister');
Route::get('logout',['middleware' => 'auth', 'uses' =>'UserController@logout']);
Route::get('home',['middleware' => 'auth', 'uses' =>'HomeController@index']);


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
