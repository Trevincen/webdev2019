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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/product', function () {
//     return view('product');
// });
Route::get('/contact', function () {
    return view('contact');
});

<<<<<<< HEAD

=======
Route::get('/contact', function () {
    return view('contact');
});
>>>>>>> 9fb1f2ee4c607c957eec6cf5960a52153aea0f11
Route::resource('/post','PostController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/product', 'PostController@show')->name('posts');


