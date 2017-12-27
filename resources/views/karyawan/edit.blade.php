@extends('layouts.master')
@section('content')
<div class="row">
	<center><h1>DATA KARYAWAN</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Karwayan
	<div class="panel-title pull-right">
	<a href="{{ URL::previous() }}">Kembali</a></div>
	</div>
	<div class="panel-body">
		<form action="{{route('karyawan.update', $karyawan->id)}}" method="post">
			{{csrf_field()}}
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token() }}">
	<div class="form-group">
	<label class="control-lable">Id</label>
	  <input type="text" name="a" value="{{$karyawan->id}}" class="form-control" required="">
	  </div>

	  <div class="form-group">
	<label class="control-lable">Nama</label>
	  <input type="text" name="b" value="{{$karyawan->nama}}" class="form-control" required="">
	  </div>

	<div class="form-group">
		<label class="control-lable">Alamat</label>
		<input type="text" name="c" value="{{$karyawan->alamat}}" class="form-control" required="">
	</div>

	<div class="form-group">
	<label class="control-lable">Id Jabatan</label>
	  <input type="text" name="d" value="{{$karyawan->id_jabatan}}" class="form-control" required="">
	  </div>
	  
	<div class="form-group">
		<label class="control-lable">Tanggal Lahir</label>
		<input type="text" name="e" value="{{$karyawan->tanggal_lahir}}" class="form-control" required="">
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-success">Simpan</button>
		<button type="reset" class="btn btn-danger">Reset</button>
	</div>
	</form>
	</div>
	</div>
	</div>
	</div>
	@endsection



