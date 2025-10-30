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


//siswa


//pembayaran


Auth::routes();

// Route::group(['middleware' => ['auth','ceklevel:petugas']], function(){

// Route::group(['middleware' => ['auth','ceklevel:admin,petugas']], function(){

// });




Route::middleware(['auth'])->group(function () {
    Route::resource('pembayaran','PembayaranController');
    Route::get('/pembayaran/edit/{id_pembayaran}','PembayaranController@edit');
    Route::post('/pembayaran/update/{id_pembayaran}','pembayaranController@update');
    Route::get('/pembayaran/destroy/{id_pembayaran}','PembayaranController@destroy');
    route::get('/cari/pembayaran','PembayaranController@cari')->name('cari');
    Route::resource('history', "HistoryController");

    Route::get('/home','HomeController@index')->name('home');
    route::resource('laporan','LaporanController');
    Route::get('/pdf','LaporanController@pdf')->name('print');

    Route::get('/home', 'HomeController@index')->name('home');

    Route::middleware(['ceksiswa'])->group(function () {
        Route::resource('history', "HistoryController");
    });

    Route::middleware(['ceklevel'])->group(function () {
        route::resource('siswa','SiswaController');
        route::get('/siswa/edit/{nisn}','SiswaController@edit');
        route::post('/siswa/update/{nisn}','SiswaController@update');
        route::get('/siswa/destroy/{nisn}','SiswaController@destroy');

        Route::resource('history', "HistoryController");

        //kelas
        route::resource('kelas','KelasController');
        route::get('/kelas/edit/{id_kelas}','KelasController@edit');
        route::post('/kelas/update/{id_kelas}','KelasController@update');
        route::get('/kelas/destroy/{id_kelas}','KelasController@destroy');

        //petugas
        route::resource('petugas','PetugasController');
        route::get('/petugas/edit/{id_petugas}','PetugasController@edit');
        route::post('/petugas/update/{id_petugas}','PetugasController@update');
        route::get('/petugas/destroy/{id_petugas}','PetugasController@destroy');

        //spp
        route::resource('spp','SppController');
        route::get('/spp/edit/{id_spp}','SppController@edit');
        route::post('/spp/update/{id_spp}','SppController@update');
        route::get('/spp/destroy/{id_spp}','SppController@destroy');

        Route::resource('user','UserController');
        Route::get('/user/destroy/{id}','UserController@destroy');
    });
});


