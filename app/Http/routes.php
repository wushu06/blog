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
Route::get('/posts', 'FrontEnd@posts');



//Route::resource('/admin/users', 'AdminUsersController');


Route::group(['middleware'=>'admin'], function(){
    Route::get('/admin/', function(){

        return view('admin.index');

    });
    Route::resource('/admin/users', 'AdminUsersController');
    Route::resource('/admin/posts', 'AdminPostsController');
    Route::resource('/admin/category', 'AdminCategoryController');

});

