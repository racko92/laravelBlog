<?php

Route::get('/', 'PostsController@index');
Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{id}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');

Route::post('/posts/{id}/comment', 'CommentsController@store');

Route::get('/register', 'RegisterController@create')->middleware('guest');
Route::post('/register', 'RegisterController@store')->middleware('guest');

Route::get('/logout', 'LoginController@destroy');

Route::get('/login', 'LoginController@create');
Route::post('/login', 'LoginController@store');