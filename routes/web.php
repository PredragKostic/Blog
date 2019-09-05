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

Route::get('admin/home', 'HomeController@index')->name('home');

Route::resource('admin/users', 'UsersController');

Route::resource('admin/posts', 'PostsController');

Route::resource('admin/categories', 'CategoriesController');

