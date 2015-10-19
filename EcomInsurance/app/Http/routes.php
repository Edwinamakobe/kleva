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

Route::get('index', function () {
    return view('index');
});

Route::get('home', function () {
    return view('home');
});


Route::get('quotes', function () {
    return view('quotes');
});

Route::get('claims', function () {
    return view('claims');
});

Route::get('about-us', function () {
    return view('about');
});

Route::get('contact-us', function(){

    return View::make('contact');
});
