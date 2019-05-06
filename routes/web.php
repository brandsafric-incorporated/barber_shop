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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/services', 'ServicesController@index')->name('services');
Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/gallery', 'GalleryController@index')->name('gallery');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/booking', 'BookingController@index')->name('booking');
Route::post('/add_booking', 'BookingController@add_booking')->name('add_booking');
Route::get('/offers', 'OffersController@index')->name('offers');
Route::get('/barbers', 'BarbersController@index')->name('barbers');




//-------------------------------------------------------------------------
//  ADMIN ROUTES HERE
//-------------------------------------------------------------------------
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/users', 'AdminController@users')->name('users');
Route::get('/bks', 'AdminController@bookings')->name('bks');
Route::post('/bookings_by_date', 'AdminController@bookings_by_date')->name('bookings_by_date');
