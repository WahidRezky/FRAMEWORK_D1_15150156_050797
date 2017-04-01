<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('Pengguna','PenggunaController@awal');
Route::get('Pengguna/tambah','PenggunaController@tambah');
Route::get('Pengguna/{Pengguna}','PenggunaController@lihat');
Route::post('Pengguna/simpan','PenggunaController@simpan');
Route::get('Pengguna/edit/{Pengguna}','PenggunaController@edit');
Route::post('Pengguna/edit/{Pengguna}','PenggunaController@update');
Route::get('Pengguna/hapus/{Pengguna}','PenggunaController@hapus');

Route::get('dosen/awal','DosenController@awal');
Route::get('dosen/tambah', 'DosenController@tambah');

Route::get('mahasiswa/awal','MahasiswaController@awal');
Route::get('mahasiswa/tambah', 'MahasiswaController@tambah');

Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah', 'MatakuliahController@tambah');
Route::get('matakuliah/{matakuliah}', 'MatakuliahController@lihat');
Route::post('matakuliah/simpan', 'MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}', 'MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}', 'MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}', 'MatakuliahController@hapus');

Route::get('dosen_matakuliah/awal','Dosen_matakuliahController@awal');
Route::get('dosen_matakuliah/tambah', 'Dosen_matakuliahController@tambah');


Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah', 'RuanganController@tambah');
Route::post('ruangan/simpan', 'RuanganController@simpan');
Route::get('ruangan/{ruangan}','RuanganController@lihat');
Route::get('ruangan/edit/{ruangan}', 'RuanganController@edit');
Route::post('ruangan/edit/{ruangan}', 'RuanganController@update');
Route::get('ruangan/hapus/{ruangan}', 'RuanganController@hapus');

Route::get('jadwal_matakuliah/awal','Jadwal_matakuliahController@awal');
Route::get('jadwal_matakuliah/tambah', 'Jadwal_matakuliahController@tambah');




