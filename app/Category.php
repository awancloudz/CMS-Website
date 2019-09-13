<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    //Hanya jika semua data disimpan tanpa seleksi
    protected $fillable = [
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

    public function post(){
        return $this->hasMany('App\Post', 'id_category');
    }
}
