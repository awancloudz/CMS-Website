<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    //Hanya jika semua data disimpan tanpa seleksi
    protected $fillable = [
        'id_category',
        'title',
        'link',
        'description',
        'picture',
        'active',
        'tags',
        'hits',
        'created_at',
        'updated_at'
    ];

    //KE
    public function comments(){
        return $this->hasMany('App\Comments', 'id_post');
    }

    //DARI
    public function category(){
        return $this->belongsTo('App\Category', 'id_category');
    }
}
