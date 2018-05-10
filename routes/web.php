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

Route::get('/', 'PagesController@index')->name('welcome');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/academics', 'PagesController@academics')->name('academics');
Route::get('/admission', 'PagesController@admission')->name('admission');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/director', 'PagesController@director')->name('director');
Route::get('/extra', 'PagesController@extra')->name('extra');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/portal', 'PagesController@index')->name('portal');
