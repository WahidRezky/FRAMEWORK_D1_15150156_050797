<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['username','password'];
   	public function dosen()
    {
    	return $this->hsOne(Dosen::class);
    }
	public function mahasiswa()
    {
    	return $this->hsOne(Mahasiswa::class);
    }
    public function peran()
    {
    	return $this->belongToMany(Peran::class);
    }
    
}
