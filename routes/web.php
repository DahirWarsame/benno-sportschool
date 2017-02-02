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

////User
Route::get('/user', ['as' => 'user.home', 'uses' => 'UserController@userHome']);
Route::get('/user/all', ['as' => 'user.allusers', 'uses' => 'UserController@showAll']);
Route::get('/user/all/{username}', ['as' => 'user.userprofile', 'uses' => 'UserController@getProfile']);
Route::get('/user/controlpanel', ['as' => 'user.controlpanel', 'uses' => 'UserController@cpHome']);

Auth::routes();

Route::get('/home', 'HomeController@home');
