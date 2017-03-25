<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function awal(){
    	return "Hello dari MahasiswaController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = "Muhammad Wahid Rezky";
    	$mahasiswa->nim = "1515015156";
    	$mahasiswa->alamat = "Kost Putra Firdaus";
    	$mahasiswa->pengguna_id = 3;
    	$mahasiswa->save();
    	return "Data Mahasiswa dengan Nama {$mahasiswa->nama} telah disimpan";
}
}
