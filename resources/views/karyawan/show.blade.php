@extends('layouts.master')
@section('content')
<div class="row">
	<center><h1>DATA KARYAWAN</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Karyawan
	<div class="panel-title pull-right">
	<a href="{{ URL::previous() }}">Kembali</a></div>
	</div>
	<div class="panel-body">
	
	<div class="form-group">
	<label class="control-lable"> Id</label>
	  <input type="text" name="a" value="{{$karyawan->id}}" class="form-control" readonly="" >
	  </div>

	<div class="form-group">
	<label class="control-lable">Nama</label>
	  <input type="text" name="b" value="{{$karyawan->nama}}" class="form-control" readonly="" >
	  </div>

	<div class="form-group">
		<label class="control-lable">Alamat</label>
		<input type="text" name="c" value="{{$karyawan->alamat}}" class="form-control" readonly="" >

		<div class="form-group">
		<label class="control-lable">Tanggal Lahir</label>
		<input type="text" name="d" value="{{$karyawan->tanggal_lahir}}" class="form-control" readonly="" >
	</div>
	</div>
	</div>
	</div>
	</div>
	@endsection



