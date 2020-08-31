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


Auth::routes(['register' => false]);
Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('products/{id}/gallery', 'ProductController@gallery')->name('products.gallery');


Route::resource('products','ProductController');
Route::resource('product-galleries', 'ProductGalleryController');
Route::resource('transaction', 'TransactionController');
Route::get('transaction/{id}/set-status', 'TransactionController@setStatus')->name('transactions.status');
Route::get('/logout', 'Auth\LoginController@logout');
