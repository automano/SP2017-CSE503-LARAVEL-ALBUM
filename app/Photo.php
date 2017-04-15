<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    // fillable part
    protected $fillable = ['user_id','album_id', 'name', 'intro','src'];
}
