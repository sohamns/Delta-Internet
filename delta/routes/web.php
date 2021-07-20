<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@home')->name('home');
Route::get('/services', 'PageController@services')->name('services');
Route::get('/plans', 'PageController@plans')->name('plans');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/contact', 'PageController@contact_post')->name('contact.post');
Route::get('/iptv', 'PageController@iptv')->name('iptv');
Route::get('/privacy_policy', function () {
    return view('pages.privacy_policy');   
})->name('privacy_policy');
Route::get('/terms_of_service', function () {
    return view('pages.terms_of_service');   
})->name('terms_of_service');


Auth::routes();
Route::post('user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::get('/dashboard', 'UserController@index')->name('dashboard');
Route::post('/order', 'PaymentController@order')->name('order');
Route::get('/checkout', 'PaymentController@checkout')->name('checkout');
Route::post('/verify', 'PaymentController@verify')->name('verify');
Route::get('/success', 'PaymentController@success')->name('success');
Route::get('/error', 'PaymentController@error')->name('error');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.post');

    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    Route::get('/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.post');
});
