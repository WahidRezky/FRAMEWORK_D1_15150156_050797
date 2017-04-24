<?php

namespace App\Http\controllers;

use App\dosen;

class RelationshipRebornController extends controller
{
	public function ujiHas()
	{
		return dosen::has('dosen_matakuliah')->get();
	}

	public function ujiDoesntHave()
	{
		return dosen::doesntHave('dosen_matakuliah')->get();
	}

}