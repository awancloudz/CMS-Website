<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $table = 'theme';

    //Hanya jika semua data disimpan tanpa seleksi
    protected $fillable = [
        'title',
        'author',
        'folder',
        'active',
        'created_at',
        'updated_at'
    ];
}
