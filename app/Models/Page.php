<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    protected $table = 'pages';
    protected $primaryKey = 'userid';

    protected $fillable = [
        'pagetype',
        'pageslug',
        'pagetitle_az',
        'pagetitle_ru',
        'shorttext_az',
        'shorttext_ru',
        'text_az',
        'text_ru',
        'pageimage',
        'pagestatus',
    ];

}
