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
Route::get('/page/tentang', 'IndexController@tentangKami')->name('index.page.tentang');
Route::get('/karya', 'IndexController@listKarya')->name('index.karya');
Route::get('/karya/detail', 'IndexController@detailKarya')->name('index.karya.detail');
Route::get('/pengurus', 'IndexController@listPengurus')->name('index.pengurus');

Auth::routes();

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('karya', 'KaryaController');
    Route::get('karya/{karya}/photo/index', 'KaryaController@photo_index')->name('karya.photo.index');
    Route::post('karya/{karya}/photo/create', 'KaryaController@photo_create')->name('karya.photo.create');
    Route::delete('karya/{photo}/photo/delete', 'KaryaController@photo_delete')->name('karya.photo.destroy');

    Route::resource('kategori_karya', 'KaryaKategoriController');
});
