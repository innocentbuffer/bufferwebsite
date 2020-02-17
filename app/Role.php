<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = [
        'slug','name','permission'
    ];
    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}

