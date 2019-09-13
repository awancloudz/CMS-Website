<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table = 'portofolio';

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
}
