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
use App\Slider;
use App\Portofolio;
use App\Post;

Route::get('/', function () {
    $websettings = Settings::where('id',1)->get();
    $webmenu = NavMenu::where('active','Y')->get();
    $webhome = Pages::where('active','Y')->where('link','/')->get();
    $themelist = Theme::where('active','Y')->get();
    $sliderlist = Slider::where('active','Y')->get();
    $portofoliolist = Portofolio::where('active','=','Y')->limit(6)->orderBy('id', 'asc')->get();
    $postlist = Post::where('active','=','Y')->limit(2)->orderBy('id', 'asc')->get();
    foreach($themelist as $theme){
        $index = "themes." . $theme->folder . ".home";
        $themes = "themes." . $theme->folder . ".index";
        $footer = "themes." . $theme->folder . ".footer";
    }
    return view($index,compact('themes','sliderlist','websettings','webmenu','webhome','footer','portofoliolist','postlist'));
});
Route::get('/{link}', 'PageController@index');
Route::get('/post/{link}', 'PageController@blogpost');
Route::get('/category/{link}', 'PageController@category');
Route::get('/portofolio/{link}', 'PageController@porfolio');
Route::post('contact', 'PageController@store');

// HALAMAN ADMIN
Route::group(['middleware' => ['web']], function(){
    Route::auth();
    Route::get('user/admin', 'HomeController@index');
    Route::get('user/admin/{link}', 'HomeController@page');
    Route::get('user/admin/{link}/create', 'HomeController@create');
    Route::get('user/admin/{link}/edit/{id}', 'HomeController@edit');
    Route::post('user/admin/{link}', 'HomeController@store');
    Route::post('user/admin/update/{link}', 'HomeController@update');
    Route::get('user/admin/{link}/id/{id}', 'HomeController@destroy');
});
