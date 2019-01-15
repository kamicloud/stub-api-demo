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

 Route::get('/', function () { return view('app'); });

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::group([
    'prefix' => '',
    'middleware' => [
//        'request-mothods',
    ],
    'namespace' => 'Client',
], function () {
    // Authentication Routes...
    Route::group([
        'prefix' => 'trucks',
    ], function () {
        Route::resource('', 'TruckRecordController');
        Route::resource('records', 'TruckRecordController');
        Route::resource('{truckId}/records', 'TruckRecordController');
    });
    Route::get('index', 'AuthController@index');
    Route::get('login', 'AuthController@login');
});

Route::group([
    'prefix' => 'admin',
    'middleware' => [
//        'auth',
        'request-methods',
//        'rbac',
    ],
    'namespace' => 'Admin',
], function () {
    Route::get('', 'UserController@index');

    Route::resource('articles', 'ArticleController');
    Route::resource('notes', 'NoteController');
    Route::resource('reversions', 'ReversionController');
    Route::resource('roles', 'RoleController');
    Route::resource('sidebars', 'SidebarController');
    Route::resource('users', 'UserController');
});
Route::post('login', 'Auth\LoginController@login');
