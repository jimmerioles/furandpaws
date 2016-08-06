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

    //Guest Views
    Route::get('/', 'SiteController@home');

    Route::get('/pet-store', 'SiteController@petStore');

    Route::get('/post-sale', 'SiteController@postSale');

    Route::get('/adopt', 'SiteController@adopt');

    Route::get('/breed', 'SiteController@breed');

    Route::get('/item', 'SiteController@item');

    Route::get('/profile', 'SiteController@profile');

    Route::get('/pet-clinics', 'SiteController@petClinics');

    Route::get('/clinics-profile','SiteController@clinicsProfile');

    Route::get('/members-profile', 'SiteController@membersProfile');

    //Pet Enthusiast Profile Views
    Route::get('/profile/','SiteController@profileIndex');

    Route::get('/profile/profile-settings','SiteController@profileSettings');

    Route::get('/profile/profile-edit', 'SiteController@profileEdit');

    Route::get('/profile/profile-delete', 'SiteController@profileDelete');

    Route::get('/profile/profile-viewpets', 'SiteController@profileViewpets');

    Route::get('/profile/profile-changephoto', 'SiteController@profileChangephoto');

    Route::get('/profile/profile-changecover', 'SiteController@profileChangecover');
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
