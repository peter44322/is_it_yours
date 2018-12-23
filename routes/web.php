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
Route::get('/add_post', 'PostController@create');
Route::get('/search', 'PostController@Search');
Route::post('/store_post', 'PostController@store');
Route::post('/submit_search', 'PostController@searchPosts');
Route::get('/posts', 'PostController@index');

