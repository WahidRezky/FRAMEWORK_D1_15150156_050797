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
Route::get('/', function () {
    return view('welcome');
});

Route::get('hello-world', function () {
    return "Hello-world";
});

Route::get('mahasiswa_pengguna','MahasiswaController@mahasiswa');


// Route::get('pengguna/{pengguna}', function ($pengguna) {
   // return "Hello-world dari pengguna $pengguna";
// });

// Route::get('kelas_b/framework/{mhs?}', function ($mhs="Anonim") {
    // return "Selamat datang $mhs";
//});
Route::get('Pengguna','PenggunaController@awal');
Route::get('Pengguna/tambah','PenggunaController@tambah');

Route::get('Pengguna/{Pengguna}','PenggunaController@lihat');
Route::post('Pengguna/simpan','PenggunaController@simpan');
Route::get('Pengguna/edit/{Pengguna}','PenggunaController@edit');
Route::post('Pengguna/edit/{Pengguna}','PenggunaController@update');
Route::get('Pengguna/hapus/{Pengguna}','PenggunaController@hapus');

Route::get('ruangan','ruangancontroller@awal');
Route::get('ruangan/tambah','ruangancontroller@tambah');

Route::get('ruangan/{ruangan}','ruangancontroller@lihat');
Route::post('ruangan/simpan','ruangancontroller@simpan');
Route::get('ruangan/edit/{ruangan}','ruangancontroller@edit');
Route::post('ruangan/edit/{ruangan}','ruangancontroller@update');
Route::get('ruangan/hapus/{ruangan}','ruangancontroller@hapus');

Route::get('matakuliah','matakuliahcontroller@awal');
Route::get('matakuliah/tambah','matakuliahcontroller@tambah');

Route::get('matakuliah/{matakuliah}','matakuliahcontroller@lihat');
Route::post('matakuliah/simpan','matakuliahcontroller@simpan');
Route::get('matakuliah/edit/{matakuliah}','matakuliahcontroller@edit');
Route::post('matakuliah/edit/{matakuliah}','matakuliahcontroller@update');
Route::get('matakuliah/hapus/{matakuliah}','matakuliahcontroller@hapus');

Route::get('mahasiswa','mahasiswacontroller@awal');
Route::get('mahasiswa/tambah','mahasiswacontroller@tambah');

Route::get('mahasiswa/{mahasiswa}','mahasiswacontroller@lihat');
Route::post('mahasiswa/simpan','mahasiswacontroller@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','mahasiswacontroller@edit');
Route::post('mahasiswa/edit/{mahasiswa}','mahasiswacontroller@update');
Route::get('mahasiswa/hapus/{mahasiswa}','mahasiswacontroller@hapus');

Route::get('dosen','dosenController@awal');
Route::get('dosen/tambah','dosenController@tambah');

Route::get('dosen/{dosen}','dosenController@lihat');
Route::post('dosen/simpan','dosenController@simpan');
Route::get('dosen/edit/{dosen}','dosenController@edit');
Route::post('dosen/edit/{dosen}','dosenController@update');
Route::get('dosen/hapus/{dosen}','dosenController@hapus');

Route::get('Dosen_matakuliah','Dosen_matakuliahController@awal');
Route::get('Dosen_matakuliah/tambah','Dosen_matakuliahController@tambah');

Route::get('Dosen_matakuliah/{Dosen_matakuliah}','Dosen_matakuliahController@lihat');
Route::post('Dosen_matakuliah/simpan','Dosen_matakuliahController@simpan');
Route::get('Dosen_matakuliah/edit/{Dosen_matakuliah}','Dosen_matakuliahController@edit');
Route::post('Dosen_matakuliah/edit/{Dosen_matakuliah}','Dosen_matakuliahController@update');
Route::get('Dosen_matakuliah/hapus/{Dosen_matakuliah}','Dosen_matakuliahController@hapus');

Route::get('jadwal_matakuliah','Jadwal_matakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','Jadwal_matakuliahController@tambah');

Route::get('jadwal_matakuliah/{jadwal_matakuliah}','Jadwal_matakuliahController@lihat');
Route::post('jadwal_matakuliah/simpan','Jadwal_matakuliahController@simpan');
Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}','Jadwal_matakuliahController@edit');
Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}','Jadwal_matakuliahController@update');
Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}','Jadwal_matakuliahController@hapus');

Route::get('ujiHas','RelationshipRebornController@ujiHas');
Route::get('ujiDoesntHave','RelationshipRebornController@ujiDoesntHave');

Route::get('/',function()
{
	return \App\DosenMatakuliah::whereHas('dosen',function($query)
	{
		$query->where('nama','like','%5%');
	})->with('dosen')->groupBy('dosen_id')->get();
});

/* Route::get('/',function()
{
	return \App\DosenMatakuliah::whereHas('dosen',function($query)
	{
		$query->where('nama','like','%5%');
		})
	->orWhereHas('matakuliah',function($kueri))
})
->with('dosen','matakuliah')
->groupBy('dosen_id')
->get();
});*/

Route::get('/', function(Illuminate\Http\Request $request)
{
	echo "ini adalha request dari method get".$request->nama;
	});

use Illuminate\Http\Request;
Route::get('/', function()
{
	echo Form::open(['url'=>'/']).
		 Form::label('nama').
		 Form::text('nama',null).
		 Form::submit('kirim').
		 Form::close();
});
Route::post('/',function(Request $request)
{
	echo "Hasil dari form  input tadi nama : ".$request->nama;
});