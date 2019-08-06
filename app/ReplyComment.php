<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReplyComment extends Model
{
    protected $table = 'replycomment';

    //Hanya jika semua data disimpan tanpa seleksi
    protected $fillable = [
        'id_comments',
        'name',
        'email',
        'reply',
        'created_at',
        'updated_at'
    ];

    //DARI
    public function comments(){
        return $this->belongsTo('App\Comments', 'id_comments');
    }
}
