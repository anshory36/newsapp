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

use App\Category;
use App\Comment;
use App\Http\Resources\CategoriesResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostsResource;
use App\Image;
use App\Post;
use App\User;
use App\Video;




Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    Route::get('categories', 'CategoryController@index')->name('categories');
    Route::post('categories', 'CategoryController@store')->name('save-category');
    Route::get('categories/{id}', 'CategoryController@show');

    Route::get('tags', 'TagController@index')->name('tags');
    Route::post('tags', 'TagController@store')->name('save-tag');
    Route::get('tags/{id}', 'TagController@show');

    Route::get('comments', 'CommentController@index')->name('comments');
    Route::get('comments/{id}', 'CommentController@show');

    Route::get('users', 'UserController@index')->name('users');

    Route::get('posts', 'PostController@index')->name('posts');
    Route::get('posts/{id}', 'PostController@show')->name('show-post');
    Route::get('new-post', 'PostController@newPost')->name('add-post');
    Route::post('new-post', 'PostController@store')->name('save-post');
});


Auth::routes(['verify' => true]);
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
