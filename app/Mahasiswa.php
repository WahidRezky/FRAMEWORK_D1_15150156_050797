<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa'; 
    protected $guarded=['id'];

    //protected $fillable = ['nama','nim','alamat','pengguna_id'];

    

    public function pengguna() 
    { 
   
    	return $this->belongsTo(Pengguna::class); 
    }
 public function jadwal_matakuliah() 
    { 
   
        return $this ->hasMany(jadwal_matakuliah::class); 
    }
    public function getUsernameAttribute()
    {
    	return $this->pengguna->username;
    }
    public function listMahasiswadanNim()
    {
        $out = [];
        foreach ($this->all() as $mhs){
            $out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
        }
        return $out;
    }
}
