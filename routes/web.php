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


Route::group(['prefix' => '/', 'namespace' => 'Test'], function () {
    Route::get('trans', 'TransController@getContent');


    Route::post('trans', 'TransController@postContent')->name('post.content');
});




