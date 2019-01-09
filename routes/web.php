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

//Post Routes Here

Route::get('posts/post', 'PostsController@new_post')->name('posts.post');
Route::post('posts/new','PostsController@add')->name('post.add');
Route::post('posts/{id}/delete', 'PostsController@delete');
Route::post('posts/{id}/edit','PostsController@edit');
