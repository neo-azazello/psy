<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $table = 'images';
    protected $primaryKey = 'imageid';
    public $timestamps = false;

    protected $fillable = [
        'imageid',
        'imagename',
        'imagedesc',
        'pagetype',
        'imageorder',
    ];

}
