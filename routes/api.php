<?php
Route::group(['middleware' => 'auth:api'], function () {

    // GET ACTIVE GIBER || DRIVER
    Route::get('/user', function (Request $request) {
        return \Auth::guard('api')->user();
    });

    // FEED
    Route::get('/feed', 'api\feed@index');

    // //DRIVER
    // Route::get('driver/gibs', 'api\driver@gibs');
    // Route::post('driver/gibs', 'api\driver@store');

    // //GIBER
    // Route::get('giber/gibtrips', 'api\giber@gibs');
    // Route::post('giber/gibtrips', 'api\giber@store');

    // //ADMIN
    // Route::get('gibs', 'api\gibs@index');
    // Route::get('gibs/create', 'api\gibs@index');

    // GET SINGLE GIB
    // Route::get('gibs/{gib}', 'api\gibs@show');
    // Route::get('gibtrips/{gibtrip}', 'api\gibtrips@show');


    // DELETE GIB
    // Route::delete('gibs/{gib}', 'api\gibs@destroy');


    // ROUTES
    Route::get('routes', 'api\gibroutes@index');    //WORKING
    Route::post('routes', 'api\gibroutes@store');   //WORKING
    Route::get('routes/{route}', 'api\gibroutes@show');
    Route::put('routes/{route}', 'api\gibroutes@update');
    Route::delete('routes/{route}', 'api\gibroutes@destroy');



    // GIBS
    Route::get('gibs', 'api\gibs@index');   //WORKING
    Route::post('gibs', 'api\gibs@store');  //WORKING
    Route::get('gibs/{gib}', 'api\gibs@show');  //WORKING
    Route::put('gibs/{gib}', 'api\gibs@update');
    Route::delete('gibs/{gib}', 'api\gibs@destroy');
    Route::get('gibs/active', 'api\gibs@active');
    Route::get('gibs/history', 'api\gibs@history');
    Route::get('gibs/draft', 'api\gibs@draft');

    // GIBTRIPS
    Route::get('gibtrips', 'api\gibtrips@index');   //WORKING
    Route::post('gibtrips', 'api\gibtrips@store');  //WORKING
    Route::get('gibtrips/{gibtrip}', 'api\gibtrips@show');  //WORKING
    Route::put('gibtrips/{gibtrip}', 'api\gibtrips@update');
    Route::delete('gibtrips/{gibtrip}', 'api\gibtrips@destroy');
    Route::get('gibtrips/active', 'api\gibtrips@active');
    Route::get('gibtrips/history', 'api\gibtrips@history');
    Route::get('gibtrips/draft', 'api\gibtrips@draft');

    //  AUTH
    Route::post('logout', 'api\auth\LoginController@logout');   //working
});

//  AUTH
Route::post('register', 'api\auth\RegisterController@register');    //working
Route::post('login', 'api\auth\LoginController@login');    //working
