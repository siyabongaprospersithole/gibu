<?php
Route::get('/', function () {
    return view('common/home');
});

// Route::get('/home', function () {
//     return view('common/home');
// });


Auth::routes();

// JOINED GIBS

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/giber/gibs', 'HomeController@index')->name('home');

// // POSTED GIBS
// Route::get('/driver/gibs', 'HomeController@index')->name('home');
// Route::get('/driver/gibs/active', 'HomeController@index')->name('home');

// AUTH USER
Route::get('user', function () {
    if(\Auth::check())
        return Auth::user();

    return 'auth error';
});

Route::get('admin', function () {

});
