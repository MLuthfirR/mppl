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

#Post/news
Route::get('/post','PostController@index')->name('post.index');
Route::get('/post/create','PostController@create')->name('post.create');
Route::post('/post/create','PostController@store')->name('post.store');
Route::get('/post/{id}/edit', 'PostController@edit')->name('post.edit');
Route::patch('/post/{id}/edit', 'PostController@update')->name('post.update');
Route::delete('/post/{id}/delete', 'PostController@destroy')->name('post.destroy');


#Product
Route::get('/product/create','ProductController@create')->name('product.create');
Route::post('/product/create','ProductController@store')->name('product.store');
Route::get('/product/{id}/edit', 'ProductController@edit')->name('product.edit');
Route::patch('/product/{id}/edit', 'ProductController@update')->name('product.update');
Route::delete('/product/{id}/delete', 'ProductController@destroy')->name('product.destroy');

#News
Route::get('/news/create','NewsController@create')->name('news.create');
Route::post('/news/create','NewsController@store')->name('news.store');
Route::get('/news/{id}/edit', 'NewsController@edit')->name('news.edit');
Route::patch('/news/{id}/edit', 'NewsController@update')->name('news.update');
Route::delete('/news/{id}/delete', 'NewsController@destroy')->name('news.destroy');

#Feedback
Route::get('/feedback/create','FeedbackController@create')->name('feedback.create');
Route::post('/feedback/create','FeedbackController@store')->name('feedback.store');

