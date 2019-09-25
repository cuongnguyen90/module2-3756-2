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




Route::group(['prefix' => '/', 'namespace' => 'Test'], function () {
    Route::get('trans', 'TransController@getContent');


    Route::post('trans', 'TransController@postContent')->name('post.content');


    Route::get('/', function () {
        echo "<h2>This is Home page</h2>";
    });

    Route::get('about', function () {
        echo "<h2>This is About page</h2>";
    });

    Route::get('contact', function () {
        echo "<h2>This is Contact page</h2>";
    });

    Route::get('user/{name}', function ($name) {
        echo "<h2>User name is $name</h2>";
    });
});




