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

Route::get('/', 'PagesController@index');


Auth::routes(['register' => true]);


Route::group(['middleware' => ['auth']], function () {
    
    Route::get('admin/home', 'HomeController@index')->name('home');

    Route::resource('admin/users', 'UsersController')->middleware('admin');

    Route::resource('admin/posts', 'PostsController');

	Route::resource('admin/categories', 'CategoriesController');

	Route::resource('admin/tags', 'TagsController');

	Route::resource('admin/brands', 'BrandsController');

	Route::resource('admin/products', 'ProductsController');


});

Route::get('{slug1}', 'PagesController@category');
    
Route::get('{slug1}/{slug2}', 'PagesController@parentCategory');



