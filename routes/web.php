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
    return view('home');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category', 'CategoryController@index');
Route::get('/category/tambah', 'CategoryController@tambah');
Route::post('/category/store', 'CategoryController@store');
Route::get('/category/edit/{id_category}', 'CategoryController@edit');
Route::post('/category/update/{id_category}', 'CategoryController@update');
Route::get('/category/delete/{id_category}', 'CategoryController@delete');

Route::get('/products', 'ProductsController@index');
Route::get('/products/tambah', 'ProductsController@tambah');
Route::post('/products/store', 'ProductsController@store');
Route::get('/products/edit/{id_products}', 'ProductsController@edit');
Route::post('/products/update/{id_products}', 'ProductsController@update');
Route::get('/products/delete/{id_products}', 'ProductsController@delete');

