<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';

    //Hanya jika semua data disimpan tanpa seleksi
    protected $fillable = [
        'id_post',
        'name',
        'email',
        'comment',
        'created_at',
        'updated_at'
    ];

    //KE
    public function replycomment(){
        return $this->hasMany('App\ReplyComment', 'id_comments');
    }

    //DARI
    public function post(){
        return $this->belongsTo('App\Post', 'id_post');
    }
}
