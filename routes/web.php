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
Route::resource('inventariss','InventarisController');
Route::resource('ruangs','RuangController');
Route::resource('jeniss','JenisController');
Route::resource('pegawais','PegawaiController');
Route::resource('peminjamans','PinjamanController');
Route::resource('detailpinjams','DetailPinjamController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
