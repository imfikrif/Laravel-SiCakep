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

Route::get('/keluarga', 'KeluargaController@index')->name('keluarga');
Route::get('/keluarga/store-data', 'KeluargaController@datatable')->name('keluarga.store-data');
Route::get('/keluarga/tambah-data', 'KeluargaController@tambah_data')->name('keluarga.tambah');
Route::get('/keluarga/ubah-data/{id}', 'KeluargaController@edit_data')->name('keluarga.ubah');
Route::get('/keluarga/delete', 'KeluargaController@delete')->name('keluarga.delete');
Route::post('/keluarga/create', 'KeluargaController@create')->name('keluarga.create');
Route::post('/keluarga/update', 'KeluargaController@update')->name('keluarga.update');

//Mutasi Penduduk lahir
Route::get('/penduduk-lahir', 'PendudukLahirController@index')->name('penduduk-lahir');
Route::get('/penduduk-lahir/store-data', 'PendudukLahirController@datatable')->name('penduduk-lahir.store-data');
Route::get('/penduduk-lahir/tambah-data', 'PendudukLahirController@tambah_data')->name('penduduk-lahir.tambah');
Route::get('/penduduk-lahir/ubah-data/{id}', 'PendudukLahirController@edit_data')->name('penduduk-lahir.ubah');
Route::get('/penduduk-lahir/delete', 'PendudukLahirController@delete')->name('penduduk-lahir.delete');
Route::post('/penduduk-lahir/create', 'PendudukLahirController@create')->name('penduduk-lahir.create');
Route::post('/penduduk-lahir/update', 'PendudukLahirController@update')->name('penduduk-lahir.update');

Route::get('/logout', 'AuthController@logout')->name('logout');
