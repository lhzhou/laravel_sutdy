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



Route::get('/login' , 'WelcomeController@login');

Route::post('/login' , 'WelcomeController@loginValidate');

Route::get('/out' , 'WelcomeController@out');
//
//Route::get('/loginSuccess' , 'WelcomeController@success');


Route::group(['middleware' => 'auth'], function (){


    Route::get('/' , 'WelcomeController@index');

    Route::get('/account' , 'Account\\AccountController@index');


});
//Route::get('/', function () {
//    return view('welcome');
//});
