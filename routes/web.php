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

Route::get('/staff/login', 'WaiterController@login');

Route::post('/staff/login', 'WaiterController@check');
Route::get('/staff/home', 'WaiterController@home');
Route::get('/staff/cart/{id}', 'WaiterController@cart');
Route::get('/staff/removeI/{id}', 'WaiterController@remove');
Route::get('/staff/logout', 'WaiterController@logout');
Route::get('/staff/cart', 'WaiterController@cartview');
Route::get('/staff/order', 'WaiterController@order');
Route::post('/staff/checkout', 'WaiterController@checkout');
Route::get('/staff/done', 'WaiterController@done');

Auth::routes();

Route::resource('menus','MenuController')->middleware('auth');
Route::resource('staffs','StaffController')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/category', 'CategoryController@index')->name('index');
//Route::get('/category/create', 'CategoryController@create')->name('create');
//Route::post('/category/store', 'CategoryController@store')->name('store');
//Route::get('/category/edit', 'CategoryController@edit')->name('edit');
//Route::post('/category/update', 'CategoryController@update')->name('update');
//Route::post('/category/destroy', 'CategoryController@destroy')->name('destroy');
Route::resource('category','CategoryController')->middleware('auth');
