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
    return view('welcm');
});

Auth::routes();


Route::get('/home', 'DashboardController@index')->name('index');
Route::get('/user/all', 'UserController@all')->name('all users');
Route::get('/user/add', 'UserController@add')->name('add user');
Route::get('/user/view', 'UserController@view_u')->name('view user');

Route::get('/customer/all', 'CustomerController@all')->name('all customer');
Route::get('/customer/add', 'CustomerController@add')->name('add customer');
Route::get('/customer/edit', 'CustomerController@edit')->name('edit customer');
Route::post('/customer/insert', 'CustomerController@insert')->name('insert customer');
Route::post('/customer/update', 'CustomerController@update')->name('update customer');
Route::get('/customer/view/{id}', 'CustomerController@view')->name('view customer');

Route::get('/customer/trash', 'CustomerController@trash')->name('trash customer');
Route::get('/customer/all-trash', 'CustomerController@all_trash')->name('all trash');
Route::get('/customer/restore', 'CustomerController@restore')->name('restore');
Route::get('/customer/delete', 'CustomerController@delete')->name('delete');
