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



Route::group(['middleware' => 'auth'], function (){


    Route::get('/' , 'WelcomeController@index');

    Route::get('/account' , 'Account\\AccountController@index');

    Route::get('/qrcode/generate' , 'Wechat\\QrcodeController@generate');
    Route::get('/audit_log' , 'AuditLog\\AuditLogController@index');
    Route::get('/api_code' , 'Api\\ApiCodeController@index');


});
//Route::get('/', function () {
//    return view('welcome');
//});
