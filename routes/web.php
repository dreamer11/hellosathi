<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'PageController@index');
Route::get('filter', 'ImageIntervention@index');
Route::get('thumb/{image}', 'ImageIntervention@generateThumb')->name('user.thumb');
Route::get('images/{image}/{width?}/{height?}', 'ImageIntervention@generateImages')->name('post.images');

Route::group(['middleware'=>'guest'], function (){
    Route::get('register', 'PageController@registerForm');
    Route::post('register', 'FormController@registerUser');
    Route::get('login', 'PageController@loginForm');
    Route::post('login', 'FormController@loginUser');

});


Route::group(['middleware'=>'auth'], function () {

    Route::get('post', 'PostController@showPost');
    Route::post('addpost', 'PostController@addPost');
    Route::post('logout', 'FormController@logoutHere');
    Route::get('logout', 'FormController@logoutHere');
    Route::get('/', 'PostController@showPost');
});


Route::group(['prefix'=>'api', 'middleware'=>'auth'],function (){
    Route::get('posts','ApiController@posts');
});

