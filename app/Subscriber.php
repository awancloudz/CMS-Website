<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $table = 'subscriber';

    //Hanya jika semua data disimpan tanpa seleksi
    protected $fillable = [
        'name',
        'email',
        'created_at',
        'updated_at'
    ];
}
