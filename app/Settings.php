<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = 'settings';

    //Hanya jika semua data disimpan tanpa seleksi
    protected $fillable = [
        'webname',
        'weburl',
        'metadescription',
        'keyword',
        'owner',
        'email',
        'phone',
        'fax',
        'address',
        'geocode',
        'favicon',
        'logo',
        'country',
        'region',
        'timezone',
        'maintenance',
        'registration',
        'comment',
        'itemperpage',
        'googleanalytics',
        'recaptchasitekey',
        'recaptchasecretkey',
        'mailprotocol',
        'mailhostname',
        'mailusername',
        'mailpassword',
        'mailport',
        'created_at',
        'updated_at'
    ];
}
