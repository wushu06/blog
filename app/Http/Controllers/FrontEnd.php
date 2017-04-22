<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\CommentReply;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

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
    public function mail(Request $request){
      $title = $request->title;
        $body = $request->body;
      $data = [
            'title' =>$title,
            'content'=> $body

        ];


         Mail::send('/', $data, function($message){
            $message->to('nourwushu@gmail.com', 'nour')->subject('Message From Laravel');
        });
       /*  return redirect()->back();

*/

    }
}
