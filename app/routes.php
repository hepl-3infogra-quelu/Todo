<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get ( '/', [
    'as'   => 'home',
    'uses' => 'PagesController@home'
] );

Route::get ( '/about', [
    'as'   => 'about',
    'uses' => 'PagesController@about'
] );

Route::get ( '/login', [
    'as'   => 'login',
    'uses' => 'AuthController@login'
] );

Route::get ( '/logout', [
    'as'   => 'logout',
    'uses' => 'AuthController@logout'
] );

Route::get ( '/register', [
    'as'   => 'register',
    'uses' => 'UsersController@register'
] );

Route::post ( '/store', [
    'as'   => 'store',
    'uses' => 'UsersController@store'
] );

Route::post ( '/doLogin', [
    'as'   => 'doLogin',
    'uses' => 'AuthController@doLogin'
] );

Route::get ( '/tasks', [
    'before' => 'auth',
    'as'     => 'tasks',
    'uses'   => 'TasksController@index'
] );

Route::post ( 'tasks/store', [
    'before' => 'auth',
    'as'     => 'storeTask',
    'uses'   => 'TasksController@store'
] );

Route::get ( 'tasks/done/{id}', [
    'before' => 'auth',
    'as'     => 'doneTask',
    'uses'   => 'TasksController@setDone'
] )->where ( 'id', '[0-9]+' );
