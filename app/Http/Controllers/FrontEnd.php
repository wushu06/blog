<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\CommentReply;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class FrontEnd extends Controller
{
    //
    public function index(){
        $posts = Post::all();
        $categories = Category::all();


        return view('/index', compact('posts', 'categories'));
    }
    public function posts(){

        $posts = Post::all();
        $categories = Category::all();
        $comments = Comment::all();
        $replies = CommentReply::all();


        return view('/posts', compact('posts', 'categories', 'comments', 'replies'));
    }
    //
    public function show($id){
        $posts = Post::find($id);
        $categories = Category::all();
        $comments= $posts->comment;
        $replies = CommentReply::all();


        return view('/posts', compact('posts', 'categories', 'comments', 'replies'));
    }
}
