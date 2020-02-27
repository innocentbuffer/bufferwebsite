<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qoute extends Model
{
    //

    protected $fillable = [
        'firstname', 'lastname', 'company', 'position', 'email', 'qoutetype', 'message'
    ];
}
