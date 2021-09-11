<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'AuthController@index');

Route::post('/auth-login', 'AuthController@auth_login')->name('auth-login');

Route::get('/dashboard', 'AdminController@index')->name('dashboard');

Route::get('/penduduk', 'PendudukController@index')->name('penduduk');
Route::get('/penduduk/store-data', 'PendudukController@datatable')->name('penduduk.store-data');
Route::get('/penduduk/tambah-data', 'PendudukController@tambah_data')->name('penduduk.tambah');
Route::get('/penduduk/ubah-data/{id}', 'PendudukController@edit_data')->name('penduduk.ubah');
Route::get('/penduduk/delete', 'PendudukController@delete')->name('penduduk.delete');
Route::post('/penduduk/create', 'PendudukController@create')->name('penduduk.create');
Route::post('/penduduk/update', 'PendudukController@update')->name('penduduk.update');

Route::get('/logout', 'AuthController@logout')->name('logout');
