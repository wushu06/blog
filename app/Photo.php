<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $upload ='/images/';
    protected $fillable =['name'];
    public function post(){
        return $this->hasMany('App\Post');
    }
    public function getFileAttribute($photo){

        return $this->upload.$photo;

    }

}
