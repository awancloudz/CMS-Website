<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Theme;
use App\Pages;
use App\Post;
use App\Settings;
use App\NavMenu;
use App\Category;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page)
    {
        $websettings = Settings::where('id',1)->get();
        $pages = Pages::where('link',$page)->get();
        $webmenu = NavMenu::where('active','Y')->get();
        $webhome = Pages::where('active','Y')->where('link','/')->get();
        $themelist = Theme::where('active','Y')->get();
        foreach($themelist as $theme){
            $index = "themes." . $theme->folder . ".page";
            $themes = "themes." . $theme->folder . ".index";
            $folder = "themes." . $theme->folder . "." . $page;
            $footer = "themes." . $theme->folder . ".footer";
        }
        return view($index,compact('folder','themes','pages','websettings','webmenu','webhome','footer'));
    }

    public function category($cat)
    {
        $selectcat = Category::where('link',$cat)->get();
        foreach($selectcat as $select){
            $idcat = $select->id;
        }
        $websettings = Settings::where('id',1)->get();
        $blogpost = Post::where('id_category',$idcat)->get();
        $webmenu = NavMenu::where('active','Y')->get();
        $webhome = Pages::where('active','Y')->where('link','/')->get();
        $themelist = Theme::where('active','Y')->get();
        foreach($themelist as $theme){
            $index = "themes." . $theme->folder . ".category";
            $themes = "themes." . $theme->folder . ".index";
        }
        return view($index,compact('themes','blogpost','websettings','webmenu','webhome'));
    }

    public function blogpost($post)
    {
        $websettings = Settings::where('id',1)->get();
        $blogpost = Post::where('link',$post)->get();
        $webmenu = NavMenu::where('active','Y')->get();
        $webhome = Pages::where('active','Y')->where('link','/')->get();
        $themelist = Theme::where('active','Y')->get();
        foreach($themelist as $theme){
            $index = "themes." . $theme->folder . ".blogpost";
            $themes = "themes." . $theme->folder . ".index";
        }
        return view($index,compact('themes','blogpost','websettings','webmenu','webhome'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
