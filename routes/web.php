<?php
Route::get('/', function () {
    if (\Auth::check()) {
        return redirect('/home');
    }
    return view('common/home');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home/load_more', 'HomeController@loadMore')->name('home-load_more');

// AUTH USER
Route::get('user', function () {
    if (\Auth::check())
        return Auth::user();

    return 'auth error';
});

Route::get('admin', function () { });


// settings group
Route::group(['prefix' => 'settings'], function () {
    Route::get('profile', 'settings@index')->name('settings');
    Route::get('account', 'settings@account')->name('account');
    Route::get('security', 'settings@security')->name('security');
    Route::post('security', 'settings@changePassword')->name('security.changePassword');
    Route::get('emails', 'settings@emails')->name('emails');
    Route::get('notifications', 'settings@notifications')->name('notifications');
    Route::get('cards', 'settings@cards')->name('cards');
    Route::post('profile', 'settings@uploadAvatar')->name('upload.avatar');
});

// notifications
Route::group(['prefix' => 'notifications'], function () {
    Route::get('/', 'notifications@index')->name('notifications-unread');
    Route::get('read', 'notifications@read')->name('notifications-read');
    Route::get('all', 'notifications@all')->name('notifications-all');
});


// profile

Route::group(['prefix' => 'profile'], function () {
    Route::get('{id}', 'profileController@index')->name('view-profile');
    Route::get('{id}/gibs', 'profileController@gibs')->name('view-gibs');
    Route::get('{id}/trips', 'profileController@trips')->name('view-trips');
    Route::get('{id}/cars', 'profileController@cars')->name('view-cars');
    Route::get('{id}/followers', 'profileController@followers')->name('view-followers');
    Route::get('{id}/following', 'profileController@following')->name('view-following');
});

Route::group(['prefix' => 'trip'], function () {
    Route::get('new', 'gibs@create')->name('new-trip');
    Route::post('store', 'gibs@store')->name('post.new.trip');
});


Route::group(['prefix' => 'car'], function () {
    Route::get('new', 'cars@create')->name('new-car');
});
