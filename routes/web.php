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
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/product', function () {
//     return view('product');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });


Route::resource('/post','PostController');


Auth::routes(['verify' => true]);

Route::get('/post', 'PostController@index')->name('home')->middleware('verified');

Route::get('/product', 'viewcontroller@index')->name('posts');

Route::get('/contact','ContactController@create');

Route::post('/contact','ContactController@store')->name('contact.store');

Route::get('/contact','ContactController@create');

Route::get('captcha-form', 'CaptchaController@index');

Route::post('store-captcha-form', 'LoginController@validateLogin');

Route::get('/sendemail','MailController@index');