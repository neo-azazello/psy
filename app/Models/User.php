<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = 'users';
    protected $primaryKey = 'userid';

    protected $fillable = [
        'userid',
        'username',
        'useremail',
        'userfullname',
        'userpassword',
    ];

}
