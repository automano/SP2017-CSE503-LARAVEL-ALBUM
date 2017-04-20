<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    // fillable part
    protected $fillable = ['user_id','name', 'intro', 'cover'];

    // one to many: one album has many photos
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
}
