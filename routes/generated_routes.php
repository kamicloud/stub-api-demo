<?php
Route::post('/V1/AdminUser/GetUsers', 'V1\AdminUserController@GetUsers');
Route::post('/V1/User/CreateUser', 'V1\UserController@CreateUser');
Route::post('/V1/User/GetUsers', 'V1\UserController@GetUsers');
Route::post('/V1/Teacher/UpdateUserName', 'V1\TeacherController@UpdateUserName');
Route::post('/V1/Teacher/List', 'V1\TeacherController@List');
