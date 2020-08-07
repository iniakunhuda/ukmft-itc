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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    // Karya
    Route::resource('karya', 'KaryaController');
    Route::get('karya/{karya}/photo/index', 'KaryaController@photo_index')->name('karya.photo.index');
    Route::post('karya/{karya}/photo/create', 'KaryaController@photo_create')->name('karya.photo.create');
    Route::delete('karya/{photo}/photo/delete', 'KaryaController@photo_delete')->name('karya.photo.destroy');
    // Kategori Karya
    Route::resource('kategori_karya', 'KaryaKategoriController');
    // Halaman/Pages
    Route::resource('pages', 'PageController');
    // Prestasi
    Route::resource('prestasi', 'PrestasiController');
    // Change Password
    Route::get('setting/change_password', 'ChangePassword@index')->name('admin.change');
    Route::put('setting/{user}/change_password', 'ChangePassword@store')->name('admin.update');

});
