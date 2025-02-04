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
Route::get('/', 'WelcomeController@wel');
Route::get('/topics.index', 'TopicController@index')->name('topics.index');

Route::get('/topics/index', 'TopicController@index')->name('topics.index');
Route::resource('topics', 'TopicController')->except(['index']);
Route::post('/comments/{topic}', 'CommentController@store')->name('comments.store');
Route::post('/commentReply/{comment}', 'CommentController@storeCommentReply')->name('comments.storeReply');
/*
Adminstration
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
