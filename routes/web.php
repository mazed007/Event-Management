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

Route::get('/','baseController@welcome')->name('welcome');
Route::get('contact','baseController@contact')->name('contact');
Route::get('WeddingPic','baseController@WeddingPic')->name('WeddingPic');
Route::get('birthdayPic','baseController@birthdayPic')->name('birthdayPic');
Route::get('business','baseController@business')->name('business');
Route::get('search','baseController@search')->name('search');

 Route::get('/deleteReq/{id}','baseController@deleteReq');
 Route::get('/deleteAssign/{id}','baseController@deleteAssign');



Route::group(['prefix' => 'customer'], function () {
  Route::get('/login', 'CustomerAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'CustomerAuth\LoginController@login');
  Route::post('/logout', 'CustomerAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'CustomerAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'CustomerAuth\RegisterController@register');

  Route::post('/password/email', 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'CustomerAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'CustomerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'CustomerAuth\ResetPasswordController@showResetForm');
  Route::post('/requestBooking','Controller@requestBooking');
  Route::post('/comment','Controller@comment');
});

Route::group(['prefix' => 'eventmanager'], function () {
  Route::get('/login', 'EventmanagerAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'EventmanagerAuth\LoginController@login');
  Route::post('/logout', 'EventmanagerAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'EventmanagerAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'EventmanagerAuth\RegisterController@register');

  Route::post('/password/email', 'EventmanagerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'EventmanagerAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'EventmanagerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'EventmanagerAuth\ResetPasswordController@showResetForm');
  Route::post('/home','Controller@assignbook');
});

Route::group(['prefix' => 'centerowner'], function () {
  Route::get('/login', 'CenterownerAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'CenterownerAuth\LoginController@login');
  Route::post('/logout', 'CenterownerAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'CenterownerAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'CenterownerAuth\RegisterController@register');

  Route::post('/password/email', 'CenterownerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'CenterownerAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'CenterownerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'CenterownerAuth\ResetPasswordController@showResetForm');
  Route::post('send','baseController@send');
  Route::post('/home','Controller@confirmbook');
});
