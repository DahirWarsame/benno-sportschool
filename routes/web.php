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
Route::get('/user/logout', ['as' => 'user.logout', 'uses' => 'UserController@logout']);
Route::get('/user/show/{username}', ['as' => 'user.userprofile', 'uses' => 'UserController@getProfile']);

Route::get('/user/delete/{username}', ['as' => 'user.delete', 'uses' => 'UserController@delete']);
Route::get('/user/edit/{username}', ['as' => 'user.edit', 'uses' => 'UserController@edit']);
Route::post('/user/update', ['as' => 'user.update', 'uses' => 'UserController@update']);
Route::get('/user/controlpanel', ['as' => 'user.controlpanel', 'uses' => 'UserController@cpHome']);

Auth::routes();

Route::get('/home', 'HomeController@home');