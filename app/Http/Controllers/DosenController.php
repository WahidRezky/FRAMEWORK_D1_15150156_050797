<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;
use App\Pengguna;

class dosenController extends Controller
{
 
 public function dosen()
    {
    	$dosen = dosen::all();

    	foreach ($dosen as $dsn) {
    		echo "Nama : ".$dsn->nama;
    		echo "<br>";
    		echo "Username : ".$dsn->pengguna->Username;
    		echo "<br>";
    	}
    }

/* public function awal()
    {
    	return "-- SELAMAT DATANG DI dosen CONTROLLER --";
    }
public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$dosen = new dosen();
	$dosen->nama = 'Edy Budiman';
	$dosen->nip = '12345';
	$dosen->alamat = 'jl. gelatik';
	$dosen->pengguna_id = '1';
	$dosen->save();
	return " ---> Data dosen bernama {$dosen->nama} telah disimpan <---";
} */
 protected $informasi = 'Gagal melakukan aksi';

   public function awal()
    {
        $semuadosen = dosen::all();
        return view('dosen.awal',compact('semuadosen'));
    }

    public function tambah()
    {
        return view('dosen.tambah');
    }

    public function simpan(Request $input)
    {

    $pengguna = new Pengguna($input->only('username','password'));

    if ($pengguna->save()) {
    $dosen = new dosen;
    $dosen->nama = $input->nama;
    $dosen->nip = $input->nip;
    $dosen->alamat = $input->alamat;

    if ($pengguna->dosen()->save($dosen)) $this->informasi = "Berhasil simpan data";
    }
    return redirect('dosen')-> with(['informasi'=>$this->informasi]);
    }


    public function edit($id)
    {
        $dosen = dosen::find($id);
        return view('dosen.edit')->with(array('dosen'=>$dosen));
    }

    public function lihat($id)
    {
        $dosen = dosen::find($id);
        return view('dosen.lihat')->with(array('dosen'=>$dosen));
    }

   public function update($id, Request $input)
    {

    $dosen = dosen::find($id);
    $dosen->nama = $input->nama;
    $dosen->nip = $input->nip;
    $dosen->alamat = $input->alamat;
    $dosen->save();

       // $pengguna = new Pengguna($input->only('username'));
    if(!is_null($input->username)) {
        $pengguna = $dosen->pengguna->fill($input->only('username'));
        if(!empty($input->password)) $pengguna->password = $input->password;
    if($pengguna->save()) $this->informasi = 'berhasil simpan data';
    }else{
    $this->informasi = 'berhasil simpan data';
}


    return redirect('dosen')->with(['informasi'=> $this->informasi]);
    }


     public function hapus($id)
    {
        $dosen = dosen::find($id);
        if($dosen->pengguna()->delete()){
            if($dosen->delete()) $this->informasi = 'Berhasil hapus data';
        }
            return redirect('dosen')-> with(['informasi'=>$this->informasi]);
        
    }  
}
