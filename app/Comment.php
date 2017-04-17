<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'author',
        'body',
        'email',


    ];
    public function commentReply(){
        return $this->hasMany('App\CommentReply');
    }
    public function post(){
        return $this->belongsTo('App\Post');
    }
}
