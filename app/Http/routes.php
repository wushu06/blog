<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\User;
use Illuminate\Support\Facades\Auth;

Route::get('/index', function () {
    return view('welcome');
});
/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/test', function () {
    return view('test');
});



Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/', 'FrontEnd@index');
Route::get('/posts/{id}', 'FrontEnd@show');
Route::post('/test/', function () {

  //  User::where('name', 'LIKE', '%'.$search.'%')->get();

    return view('test', ['name' => 'James']);
});



//Route::resource('/admin/users', 'AdminUsersController');


Route::group(['middleware'=>'admin'], function(){
    Route::get('/admin/', function(){
        $user = Auth::user()->id;

        return view('admin.index', ['user'=>$user]);

    });



    Route::resource('/admin/users', 'AdminUsersController');
    Route::resource('/admin/posts', 'AdminPostsController');
    Route::resource('/admin/category', 'AdminCategoryController');
    Route::resource('/admin/comment', 'AdminCommentsController');
    Route::resource('/admin/reply', 'CommentReplyController');


});

