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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/newsdetails/{id}', 'NewsController@viewNewsDetails');
Route::get('/addnews', 'NewsController@addNewsView')->middleware('auth');
Route::post('/addnews', 'NewsController@addNews')->middleware('auth');
Route::get('/updatenews/{news}', 'NewsController@updateNewsView')->middleware('auth');
Route::post('/updatenews/{news}', 'NewsController@updateNews')->middleware('auth');
Route::get('/news', 'NewsController@tableNews')->middleware('auth');
Route::post('/deletenews', 'NewsController@deleteNews')->middleware('auth');
Route::get('getImages', 'NewsController@archive')->middleware('auth');
Route::post('/delImagesNews', 'NewsController@deleteImage')->middleware('auth');
Route::post('/delVidoesNews', 'NewsController@deleteVideo')->middleware('auth');


