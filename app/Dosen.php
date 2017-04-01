<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'Dosen';
    protected $fillable = ['nama','nip','alamat','pengguna_id'];

    {
    	public function doesn matakuliah(){
    		return $this->hasMany(DosenMatakuliah::class);
    	}
    }
}
