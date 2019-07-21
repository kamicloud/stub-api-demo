<?php

Route::match(['POST'], '/v1/money_game/get_questions', 'V1\MoneyGameController@GetQuestions');
Route::match(['POST'], '/v1/money_game/add_question', 'V1\MoneyGameController@AddQuestion');
Route::match(['POST', 'POST'], '/v1/user/create_user', 'V1\UserController@CreateUser');
Route::match(['POST', 'DELETE', 'POST'], '/v1/user/get_users', 'V1\UserController@GetUsers');
Route::match(['POST', 'POST'], '/v1/admin_user/get_users', 'V1\AdminUserController@GetUsers');
Route::match(['POST'], '/v1/article/get_article_comments', 'V1\ArticleController@GetArticleComments');
Route::match(['POST'], '/v1/article/create_article', 'V1\ArticleController@CreateArticle');
Route::match(['POST'], '/v1/article/get_article', 'V1\ArticleController@GetArticle');
Route::match(['POST'], '/v1/article/get_articles', 'V1\ArticleController@GetArticles');
