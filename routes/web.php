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

Route::get('halo', function () {
    return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('dosen', 'DosenController@index');

// Route::get('/pegawai/{nama}', 'PegawaiController@index');

Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');

// route blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

//route CRUD
Route::get('/karyawan','KaryawanController@index');
Route::get('/karyawan/tambah','KaryawanController@tambah');
Route::post('/karyawan/store','KaryawanController@store');
Route::get('/karyawan/edit/{id}','KaryawanController@edit');
Route::post('/karyawan/update','KaryawanController@update');
Route::get('/karyawan/hapus/{id}','KaryawanController@hapus');
Route::get('/karyawan/cari','KaryawanController@cari');

Route::get('/input', 'ValidasiController@input');
Route::post('/proses', 'ValidasiController@proses');

Route::get('/pegawai', 'PegawaiController@list');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::put('/pegawai/update/{id}', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@delete');

Route::get('/guru','GuruController@index');
Route::get('/guru/hapus/{id}','GuruController@hapus');
Route::get('/guru/trash','GuruController@trash');
Route::get('/guru/restore/{id}','GuruController@restore');
Route::get('/guru/restore_all','GuruController@restore_all');
Route::get('/guru/delete/{id}','GuruController@delete');
Route::get('/guru/delete_all','GuruController@delete_all');

Route::get('/pengguna','PenggunaController@index');
