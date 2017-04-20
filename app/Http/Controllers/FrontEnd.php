<?php

namespace App\Http\Controllers;

use App\Category;
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


        return view('/posts', compact('posts', 'categories'));
    }
}
