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

// HALAMAN FRONTEND
Route::get('/', function () {
    return view('welcome');
});

// HALAMAN ADMIN
Route::group(['middleware' => ['web']], function(){
    Route::auth();
    Route::get('user/admin', 'HomeController@index');
});
