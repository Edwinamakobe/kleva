<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'IndexController@index');
Route::get('login', 'IndexController@login');
Route::get('signup', 'IndexController@signup');
Route::get('claims', 'IndexController@claims');
Route::get('policies', 'IndexController@policies');
Route::get('premiums', 'IndexController@premiums');
