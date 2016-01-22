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

Route::group(array('middleware' => 'web'), function()
{
    //put admin routes here
    Route::get('/',['middleware' => 'auth', 'uses' =>'HomeController@index']);
    Route::get('logout','UserController@logout');
    Route::get('login','UserController@login');
    Route::post('login','UserController@postLogin');
    Route::post('forgotPassword','UserController@forgotPassword');
    Route::get('forgotPassword','UserController@home');
    Route::get('home',['middleware' => 'auth', 'uses' =>'HomeController@index']);

    //Contestants
    Route::get('contestant/create',['middleware' => 'auth', 'uses' =>'ContestantController@create']);
    Route::post('contestant/create',['middleware' => 'auth', 'uses' =>'ContestantController@store']);
    Route::get('contestant/manage',['middleware' => 'auth', 'uses' =>'ContestantController@index']);
    Route::get('contestant/reviews',['middleware' => 'auth', 'uses' =>'ContestantController@getReviews']);
    Route::get('contestant/blog',['middleware' => 'auth', 'uses' =>'ContestantController@getBlog']);
    Route::get('contestant/edit/{id}',['middleware' => 'auth', 'uses' =>'ContestantController@edit']);
    Route::post('contestant/edit',['middleware' => 'auth', 'uses' =>'ContestantController@update']);
    Route::get('contestant/remove/{id}',['middleware' => 'auth', 'uses' =>'ContestantController@destroy']);
    Route::get('contestant/show/{id}',['middleware' => 'auth', 'uses' =>'ContestantController@show']);


    //User modules
    Route::get('regions/districts/{id}','RegionController@getDistricts');
    Route::post('register','UserController@postRegister');
});

