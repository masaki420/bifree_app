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

Route::get('signup','Auth\RegisterController@showRegistrationForm')->name('signup');

Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login')->name('login.post');
Route::post('logout','Auth\LoginController@logout')->name('logout');

Route::get('index','Auth\PostsController@index')->name('posts.index');
Route::get('create','Auth\PostsController@create')->name('posts.create');