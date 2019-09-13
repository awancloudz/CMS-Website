<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NavMenu extends Model
{
    protected $table = 'navmenu';

    //Hanya jika semua data disimpan tanpa seleksi
    protected $fillable = [
        'id_groupmenu',
        'title',
        'link',
        'active',
        'ordernumber',
        'parent',
        'created_at',
        'updated_at'
    ];

    public function groupmenu(){
        return $this->belongsTo('App\GroupMenu', 'id_groupmenu');
    }
}
