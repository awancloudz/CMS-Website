<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';

    //Hanya jika semua data disimpan tanpa seleksi
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'read',
        'created_at',
        'updated_at'
    ];
}
