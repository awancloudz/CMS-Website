<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupMenu extends Model
{
    protected $table = 'groupmenu';

    //Hanya jika semua data disimpan tanpa seleksi
    protected $fillable = [
    	'title',
        'active',
        'created_at',
        'updated_at'
    ];

    public function navmenu(){
        return $this->hasMany('App\NavMenu', 'id_groupmenu');
    }
}
