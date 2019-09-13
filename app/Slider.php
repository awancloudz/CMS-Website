<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'slider';

    //Hanya jika semua data disimpan tanpa seleksi
    protected $fillable = [
        'title',
        'link',
        'description',
        'picture',
        'buttontext',
        'active',
        'created_at',
        'updated_at'
    ];
}
