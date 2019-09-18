<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Controller@index');

Route::group(['prefix' => 'backend'], function () {
    Voyager::routes();
});

Route::get('/test', 'Controller@test');

Route::get('/add-subscriber', function () {
    return view('add-subscriber');
});

Route::post('/add-subscriber', 'SubscriberController@create')->name('new_subscriber');
Route::get('/verify-email-address', 'SubscriberController@verify');

Route::get('/contact-us', function () {
    return view('contact');
});
Route::get('/about-us', function () {
    return view('about');
});

Route::get('/privacy-policy', function () {
    return view('privacy_policy');
});

Route::get('/advertise', function () {
    return view('advertise');
});

Route::get('/search', 'Controller@search')->name('search_posts');

Route::get('/category/{category_slug}', 'Controller@indexCategory');

Route::get('/{slug}', 'Controller@show');




