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
use App\Theme;
use App\Settings;
use App\NavMenu;
use App\Pages;

Route::get('/', function () {
    $websettings = Settings::where('id',1)->get();
    $webmenu = NavMenu::where('active','Y')->get();
    $webhome = Pages::where('active','Y')->where('link','/')->get();
    $themelist = Theme::where('active','Y')->get();
    foreach($themelist as $theme){
        $index = "themes." . $theme->folder . ".home";
        $themes = "themes." . $theme->folder . ".index";
        $footer = "themes." . $theme->folder . ".footer";
    }
    return view($index,compact('themes','websettings','webmenu','webhome','footer'));
});
Route::get('/{page}', 'PageController@index');
Route::get('/blog/{post}', 'PageController@blogpost');
Route::get('/category/{cat}', 'PageController@category');

// HALAMAN ADMIN
Route::group(['middleware' => ['web']], function(){
    Route::auth();
    Route::get('user/admin', 'HomeController@index');
});
