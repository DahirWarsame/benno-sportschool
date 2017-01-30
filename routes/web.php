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

//Main
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/login', ['as' => 'home.login', 'uses' => 'HomeController@login']);
Route::get('/register', ['as' => 'home.register', 'uses' => 'HomeController@register']);


//User
Route::get('/user', ['as' => 'user', 'uses' => 'UserController@userHome']);
Route::get('/user/{username}', ['as' => 'user.userprofile', 'uses' => 'UserController@getProfile']);


//Controlpanel
Route::get('/controlpanel', ['as' => 'controlpanel', 'uses' => 'UserController@cpHome']);
Route::get('/controlpanel/all_users', ['as' => 'controlpanel.allusers', 'uses' => 'UserController@showAll']);
Route::get('/controlpanel/all_users/{username}', ['as' => 'controlpanel.userprofile', 'uses' => 'UserController@getProfile']);

//Route::get('user/debug', ['as' => 'user.tests', 'uses' => 'UserController@debug']);