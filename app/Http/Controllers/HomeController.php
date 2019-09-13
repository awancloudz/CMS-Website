<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Slider;
use App\Portofolio;
use App\NavMenu;
use App\Category;
use App\Post;
use App\Pages;
use App\Contact;
use App\Comments;
use App\Theme;
use App\User;
use App\Settings;
use Session;
use Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('layouts.home.index');
    }
    public function page($link){
        if($link == 'slider'){
            $data = Slider::all();
        }
        else if($link == 'portofolio'){
            $data = Portofolio::all();
        }
        else if($link == 'menu'){
            $data = NavMenu::all();
        }
        else if($link == 'category'){
            $data = Category::all();
        }
        else if($link == 'blog'){
            $data = Post::all();
        }
        else if($link == 'pages'){
            $data = Pages::all();
        }
        else if($link == 'contact'){
            $data = Contact::all();
        }
        else if($link == 'comments'){
            $data = Comments::all();
        }
        else if($link == 'themes'){
            $data = Theme::all();
        }
        else if($link == 'users'){
            $data = User::all();
        }
        else if($link == 'settings'){
            $data = Settings::all();
        }
        $halaman = "layouts." . $link . ".index";
        return view($halaman,compact('data'));
    }
    public function create($link){
        $halaman = "layouts." . $link . ".create";
        return view($halaman);
    }
    public function edit($link,$id){
        settype($id, "integer");
        $halaman = "layouts." . $link . ".edit";
        if($link == 'slider'){
            $dataedit = Slider::findOrFail($id);
        }
        return view($halaman,compact('dataedit'));
    }
    public function store($link, Request $request){
        $input = $request->all();
        $redirect = "user/admin/" . $link;
        if($request->hasFile('picture')){
            $input['picture'] = $this->uploadFoto($request);
        }
        else{
            $input['picture'] = "noimage.png";
        }
        
        //Simpan Data 
        if($link == 'slider'){
            $datasimpan = Slider::create($input);
        }
        Session::flash('flash_message', 'Data sukses disimpan.');
        return redirect($redirect);
    }
    public function update($link, Request $request){
        $input = $request->all();
        $id = $request->input('id');
        settype($id, "integer");
        if($link == 'slider'){
            $data = Slider::findOrFail($id);
        }
        $redirect = "user/admin/" . $link;
        if($request->hasFile('picture')){
            //Hapus foto lama
            $this->hapusFoto($data);
            //Upload foto baru
            $input['picture'] = $this->uploadFoto($request);
        }
        
        //Update Data 
        $data->update($input);
        Session::flash('flash_message', 'Data sukses di update.');
        return redirect($redirect);
    }
    public function destroy($link,$id){
        $redirect = "user/admin/" . $link;
        settype($id, "integer");
        if($link == 'slider'){
            $data = Slider::findOrFail($id);
        }

        $this->hapusFoto($data);
        $data->delete();
        Session::flash('flash_message', 'Data berhasil dihapus');
        Session::flash('Penting', true);
        return redirect($redirect);
    }
    public function uploadFoto(Request $request){
        $foto = $request->file('picture');
        $ext = $foto->getClientOriginalExtension();

        if($request->file('picture')->isValid()){
            $foto_name = "slider_" . date('YmdHis'). ".$ext";
            $upload_path = 'slider';
            $request->file('picture')->move($upload_path, $foto_name);
            return $foto_name;
        }
        return false;
    }
    public function hapusFoto($data){
        $exist = Storage::disk('picture')->exists($data->picture);
        if(isset($data->picture) && $exist){
           $delete = Storage::disk('picture')->delete($data->picture);
           if($delete){
            return true;
           }
           return false;
        }
    }
}
