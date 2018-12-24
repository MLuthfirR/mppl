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
Route::post('/logout', 'Auth/login@logout');

Auth::routes();

#Route for landing page
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/landing', function () { return view('landing'); } );
Route::get('/career', function () { return view('career'); } );
Route::get('/news', function () { return view('news'); } );
Route::get('/about', function () { return view('about'); } );
Route::get('/contact', function () { return view('contact'); } );
Route::get('/news_detail', function () { return view('news_detail'); } );
Route::get('/thinner', function () { return view('thinner'); } );
Route::get('/cat', function () { return view('cat'); } );

#Route for admin page
Route::get('/admin-home', 'AdminController@index')->name('admin-home');
Route::get('/admin-product', 'AdminController@product')->name('admin-product');
Route::get('/admin-career', 'AdminController@career')->name('admin-career');
Route::get('/admin-news', 'AdminController@news')->name('admin-news');
Route::get('admin-feed', 'FeedbackController@index')->name('admin-feed');
Route::get('admin-add-product', function () { return view('admin.admin-add-product'); } );
Route::get('admin-add-career', function () { return view('admin.admin-add-career'); } );
Route::get('admin-add-news', function () { return view('admin.admin-add-news'); } );

#Post/news
Route::get('/post','PostController@index')->name('post.index');
Route::get('/post/create','PostController@create')->name('post.create');
Route::post('/post/create','PostController@store')->name('post.store');
Route::get('/post/{id}/edit', 'PostController@edit')->name('post.edit');
Route::patch('/post/{id}/edit', 'PostController@update')->name('post.update');
Route::delete('/post/{id}/delete', 'PostController@destroy')->name('post.destroy');


#Product
Route::get('/product', 'ProductController@index')->name('product.index');
Route::get('/product/create','ProductController@create')->name('product.create');
Route::post('/product/create','ProductController@store')->name('product.store');
Route::get('/product/{id}/edit', 'ProductController@edit')->name('product.edit');
Route::patch('/product/{id}/edit', 'ProductController@update')->name('product.update');
Route::delete('/product/{id}/delete', 'ProductController@destroy')->name('product.destroy');

#News
Route::get('/news', 'NewsController@index')->name('news.index');
Route::get('/news/create','NewsController@create')->name('news.create');
Route::post('/news/create','NewsController@store')->name('news.store');
Route::get('/news/{id}/edit', 'NewsController@edit')->name('news.edit');
Route::patch('/news/{id}/edit', 'NewsController@update')->name('news.update');
Route::delete('/news/{id}/delete', 'NewsController@destroy')->name('news.destroy');

#Career
Route::get('/career', 'CareerController@index')->name('career.index');
Route::get('/career/create','CareerController@create')->name('career.create');
Route::post('/career/create','CareerController@store')->name('career.store');
Route::get('/career/{id}/edit', 'CareerController@edit')->name('career.edit');
Route::patch('/career/{id}/edit', 'CareerController@update')->name('career.update');
Route::delete('/career/{id}/delete', 'CareerController@destroy')->name('career.destroy');

#Feedback
Route::get('/feedback/create','FeedbackController@create')->name('feedback.create');
Route::post('contact','FeedbackController@store')->name('feedback.store');

