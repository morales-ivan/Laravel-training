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

Route::get('/', 'ControladorPaginas@home');

Auth::routes();
Route::get('/auth/facebook', 'SocialAuthController@facebook');
Route::get('/auth/facebook/callback', 'SocialAuthController@callback');
Route::post('/auth/facebook/register', 'SocialAuthController@register');

Route::get('/photos/{photo}', 'ControladorFotos@show');
Route::post('/photos/create', 'ControladorFotos@create')->middleware('auth');

Route::get('/profile/{username}', 'ControladorUsuarios@show');
Route::post('/profile/{username}/follow', 'ControladorUsuarios@follow');
Route::post('/profile/{username}/unfollow', 'ControladorUsuarios@unfollow');
Route::get('/profile/{username}/following', 'ControladorUsuarios@following');
Route::get('/profile/{username}/followers', 'ControladorUsuarios@followers');

Route::get('/about', 'ControladorPaginas@about');

Route::get('/prueba', 'ControladorPaginas@prueba');

Route::get('/home', 'HomeController@index')->name('home');
