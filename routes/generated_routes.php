<?php
Route::post('/V1/User/CreateUser', 'V1\UserController@CreateUser');
Route::post('/V1/User/GetUsers', 'V1\UserController@GetUsers');
Route::post('/V1/AdminUser/GetUsers', 'V1\AdminUserController@GetUsers');
Route::post('/V1/Article/CreateArticle', 'V1\ArticleController@CreateArticle');
Route::post('/V1/Article/GetArticle', 'V1\ArticleController@GetArticle');
Route::post('/V1/Article/GetArticles', 'V1\ArticleController@GetArticles');
