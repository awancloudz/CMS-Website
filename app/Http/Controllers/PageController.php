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
use App\Portofolio;
use App\Contact;
use Session;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($link){
        $websettings = Settings::where('id',1)->get();
        $pages = Pages::where('link',$link)->get();
        $webmenu = NavMenu::where('active','Y')->get();
        $webhome = Pages::where('active','Y')->where('link','/')->get();
        $themelist = Theme::where('active','Y')->get();
        $categorylist = Portofolio::where('active','=','Y')->groupBy('tags')->orderBy('id', 'asc')->get();
        $portofoliolist = Portofolio::where('active','=','Y')->orderBy('id', 'asc')->get();
        $postlist = Post::where('active','=','Y')->orderBy('id', 'asc')->get();
        foreach($themelist as $theme){
            $index = "themes." . $theme->folder . ".page";
            $themes = "themes." . $theme->folder . ".index";
            $folder = "themes." . $theme->folder . "." . $link;
            $footer = "themes." . $theme->folder . ".footer";
        }
        if($link != 'login'){
            return view($index,compact('folder','themes','pages','websettings','webmenu','webhome','footer','categorylist','portofoliolist','postlist'));
        }
        else{
            return view('auth.login',compact('folder','themes','pages','websettings','webmenu','webhome','footer','categorylist','portofoliolist','postlist'));
        }
    }

    public function category($link){
        $selectcat = Category::where('link',$link)->get();
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

    public function blogpost($link){
        $websettings = Settings::where('id',1)->get();
        $blogpost = Post::where('link',$link)->get();
        $webmenu = NavMenu::where('active','Y')->get();
        $themelist = Theme::where('active','Y')->get();
        foreach($themelist as $theme){
            $index = "themes." . $theme->folder . ".blogpost";
            $themes = "themes." . $theme->folder . ".index";
            $footer = "themes." . $theme->folder . ".footer";
        }
        return view($index,compact('themes','blogpost','websettings','webmenu','footer'));
    }

    public function portofolio($link){
        $websettings = Settings::where('id',1)->get();
        $blogpost = Post::where('link',$link)->get();
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
        $input = $request->all();
        //Simpan Data kategoriproduk
        $contact = Contact::create($input);
        Session::flash('flash_message', 'Terima kasih telah menghubungi kami, pesan anda akan kami respon segera.');
        return redirect('contact');
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
