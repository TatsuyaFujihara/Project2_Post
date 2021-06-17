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



// Route::get('/test', 'TestController@index')->name('test');
// Post機能
Route::resource('post', 'PostController', ['only' => ['index', 'create', 'store', 'edit', 'update', 'destroy',]]);

// Like機能
Route::get('post/like/{id}', 'LikeController@like')->name('like');
// unLike機能
Route::get('post/unlike/{id}', 'LikeController@unlike')->name('unlike');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
