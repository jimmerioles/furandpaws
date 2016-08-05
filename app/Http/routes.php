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

Route::group(['middleware' => ['web']], function () {

    Route::auth();

    Route::get('/', 'SiteController@home');

    Route::get('/pet-store', 'SiteController@petStore');

    Route::get('/post-sale', 'SiteController@postSale');

    Route::get('/adopt', 'SiteController@adopt');

    Route::get('/breed', 'SiteController@breed');

    Route::get('/item', 'SiteController@item');

    Route::get('/profile', 'SiteController@profile');
});

Route::group(['prefix' => 'api/v1', 'middleware' => ['api', 'auth:api']], function () {
    Route::post('login', 'AuthController@apiLogin');

//    Route::get('users', function () {
//
//        $u = auth()->guard('api')->user();
//
//        return response()
//            ->json(array_merge($u->toArray(), ['api_token' => $u->api_token]));
//    });
});