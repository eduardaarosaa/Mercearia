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

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
{
Route::get('/products', 'ProductController@index')->name('products');
Route::get('/suppliers', 'SupplierController@index')->name('suppliers');

Route::post('/updateSupplier/{id}', 'SupplierController@update')->name('updateSupplier');
Route::post('/updateProduct/{id}', 'ProductController@update')->name('updateProduct');
Route::delete('/delete/{id}', 'SupplierController@destroy')->name('deleteProduct');

Route::get('/monitoring', 'ProductController@StockMonitoring')->name('StockMonitoring');

Route::resource('products', 'ProductController');
Route::resource('suppliers','SupplierController');



});

Route::get('products/export/', 'ProductController@export')->name('exportProducts');
