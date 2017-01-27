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

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/login', ['as' => 'home.login', 'uses' => 'HomeController@login']);
Route::get('/register', ['as' => 'home.register', 'uses' => 'HomeController@register']);
Route::get('controlpanel/all_users', ['as' => 'user.profiles', 'uses' => 'UserController@showAll']);
Route::get('controlpanel/all_users/{username}', ['as' => 'user.profile', 'uses' => 'UserController@getProfile']);
Route::get('user/debug', ['as' => 'user.tests', 'uses' => 'UserController@debug']);