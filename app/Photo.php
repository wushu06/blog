<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable =['name'];
    public function post(){
        return $this->hasMany('App\Post');
    }
}
