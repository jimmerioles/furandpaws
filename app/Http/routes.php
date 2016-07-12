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

Route::get('/', function () {
    return view('index');
});

Route::get('/pet-store', function () {
    return view('petstore');
});

Route::get('/post-sale', function () {
    return view('post-sale');
});

Route::get('/adopt', function () {
    return view('adopt');
});

Route::get('/breed', function () {
    return view('breed');
});
