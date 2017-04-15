<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    // fillable part
    protected $fillable = ['user_id','name', 'intro', 'cover'];
}
