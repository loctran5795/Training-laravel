<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/demo', 'DemoController@index')->name('demo.index');

Route::post('/sent', 'UserController@sentMail')->name('user.sent');

// Route::post('/contact', 'ContactController@contactMail')->name('contact');
Route::post('/contact', 'ContactController@contact')->name('contact');

// Route::get('/post', 'PostsController@post')->name('post.index');
// Route::get('/post/{post}', 'PostsController@show')->name('post.show');
// Route::post('/create-post', 'PostsController@createPost')->name('user.createPost');
Route::resource('/post', 'PostController');

// Route::get('/posts/index', 'PostsController@index')->name('posts.index');
// Route::post('/posts/store', 'PostsController@store');
// Route::get('/posts/{post}/show', 'PostsController@show')->name('posts.show');



Route::post('/create-test', 'TestsController@test')->name('user.test');

Route::get('/{post}/create-comment', 'CommentsController@comments')->name('user.comment');

Route::get('/{post}/change-like', 'LikesController@changeLike')->name('post.changeLike');

Route::get('/update', 'UserController@update')->name('update.index');
Route::post('/update', 'UserController@updateFile')->name('user.update');

Route::get('/change', 'UserController@change')->name('change.index');
Route::post('/change', 'UserController@changePassword')->name('user.change');

Route::get('/{post}/delete', 'DeleteController@destroy')->name('post.destroy');


