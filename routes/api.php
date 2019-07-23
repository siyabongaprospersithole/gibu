<?php
use Gibu\api\gibs;

Route::group(['middleware' => 'auth:api'], function () {

    // GET ACTIVE GIBER || DRIVER
    Route::get('/user', function (Request $request) {
        return \Auth::guard('api')->user();
    });

    // GET FEED
    Route::get('/feed', 'api\feed@index');

    //DRIVER
    Route::get('driver/gibs', 'api\driver@gibs');
    Route::post('driver/gibs', 'api\driver@store');

    //GIBER
    Route::get('giber/gibtrip', 'api\giber@gibs');
    Route::post('giber/gibtrip', 'api\giber@store');

    //ADMIN
    Route::get('gibs', 'api\gibs@index');
    Route::get('gibs/create', 'api\gibs@index');

    // GET SINGLE GIB
    Route::get('gibs/{gib}', 'api\gibs@show');
    Route::get('gibtrip/{gibtrip}', 'api\gibtrips@show');

    //CREATE GIB
    Route::post('gibs', 'api\gibs@store');
    Route::post('gibtrips', 'api\gibs@store');

    // UPDATE  GIB
    Route::put('gibs/{gib}', 'api\gibs@update');

    // DELETE GIB
    Route::delete('gibs/{gib}', 'api\gibs@destroy');

    //  AUTH
    Route::post('logout', 'api\auth\LoginController@logout');
});

//  AUTH
Route::post('register', 'api\auth\RegisterController@register');
Route::post('login', 'api\auth\LoginController@login');
