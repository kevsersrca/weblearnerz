<?php

Route::group(['middleware' => 'web'], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/','HomeController@index');
    Route::auth();
    Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');
    Route::get('/search','SearchController@getSearch');
    Route::post('/search','SearchController@search');
    Route::resource('post','PostController');
    Route::resource('posts', 'PostsController', ['only' => ['show','index']]);
    Route::resource('comment','CommentController', ['only' => ['store','show']]);
    Route::resource('language','LanguageController',['only' => ['index','store','show']]);
    Route::resource('tag','TagController',['only' => ['index','store','show']]);
});


