@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data Jadwal Dosen</strong>
			<a href="{{ url('Dosen_matakuliah/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> Dosen</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
		<thead>
		<tr>
	<th>No.</th>
	<th>Nama Dosen</th>
	<th>Nip Dosen</th>
	<th>Nama Matakuliah</th>
	<th>Aksi</th>
</tr>
</thead>
<tbody>
		<?php $x=1?>
		@foreach ($semuaJadwalDosenMengajar as $dosen)
		<tr>
		<td>{{ $x++ }}</td>
		<td>{{ $dosen->dosen->nama or 'nama kosong'}}</td>
		<td>{{ $dosen->dosen->nip or 'ni kosong'}}</td>
		<td>{{ $dosen->matakuliah->title or 'title kosong'}}</td>
		<td>
		<div class="btn-group" role="group">
		<a href="{{url('Dosen_matakuliah/edit/'.$dosen->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
		<i class="fa fa-pencil"></i></a>
		<a href="{{url('Dosen_matakuliah/'.$dosen->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
		<a href="{{url('Dosen_matakuliah/hapus/'.$dosen->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
	</div>
	</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@stop