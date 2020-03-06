<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{

    protected $table = 'feedback';
    protected $primaryKey = 'feedbackid';
    public $timestamps = false;

    protected $fillable = [
        'feedbackid',
        'feedbacktext',
        'feedbackauthor',
        'authortitle',
    ];

}
