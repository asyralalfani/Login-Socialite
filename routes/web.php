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
//SocialAuthController
Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/callback/{provider}', 'SocialAuthController@callback');
Route::get('auth/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('auth/logout', 'SocialAuthController@logout')->name('logout');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

//BlogController
Route::get('/index', 'BlogController@index')->name('index');
Route::get('/better', 'BlogController@dna')->name('dna');
Route::get('/investor', 'BlogController@investor')->name('investor');

//EmailVerification
Route::get('user/activation/{token}', 'Auth\RegisterController@activateUser')->name('user.activate');