<?php
//用户模块
Route::get('/register','\App\Http\Controllers\RegisterController@index');
//注册行为
Route::post('/register','\App\Http\Controllers\RegisterController@register');
//登陆页面
Route::get('/login','\App\Http\Controllers\LoginController@index');
//登陆行为
Route::post('/login','\App\Http\Controllers\LoginController@login');
Route::get('/logout','\App\Http\Controllers\LoginController@logout');
Route::get('/user/me/setting','\App\Http\Controllers\UserController@setting');
Route::post('/user/me/setting','\App\Http\Controllers\UserController@settingStore');

//文章列表页
Route::get('/posts','\App\Http\Controllers\PostController@index');
//文章详情页
//创建文章
Route::get('/posts/create','\App\Http\Controllers\PostController@create');
Route::get('/posts/{post}','\App\Http\Controllers\PostController@show');
//创建文章提交
Route::post('/posts','\App\Http\Controllers\PostController@store');
//编辑文章
Route::get('/posts/{post}/edit','\App\Http\Controllers\PostController@edit');
Route::put('/posts/{post}','\App\Http\Controllers\PostController@update');
//删除文章
Route::get('/posts/{post}/delete/','\App\Http\Controllers\PostController@delete');
//图片上传
Route::post('/posts/image/upload','\App\Http\Controllers\PostController@imageUpload');

