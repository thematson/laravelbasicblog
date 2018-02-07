<?php

Route::get('/', 'PostsController@index');
//need these:
//controller => PostsController
//Eloquent model => Post
//migration => create_posts_table
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('posts/{post}/comments', 'CommentsController@store');
