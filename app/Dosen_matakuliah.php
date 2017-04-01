<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_matakuliah extends Model
{
    protected $table = 'Dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];
    $dosen_mengajar = App\Dosen::find(1)->dosen_matakuliah;
    foreach ($dosen_mengajar as  $mengajar)
}

