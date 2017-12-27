@extends('layouts.master')
@section('content')
<div class="row">
	<center><h1>DATA TOTAL GAJI/h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Total
	<div class="panel-title pull-right">
	<a href="{{ URL::previous() }}">Kembali</a></div>
	</div>
	<div class="panel-body">
		<form action="{{route('total.update', $total->id)}}" method="post">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="form-group">
	<label class="control-lable">Id</label>
	  <input type="text" name="a" value="{{$total->id}}" class="form-control" required="">
	  </div>

	  <div class="form-group">
	<label class="control-lable">Id Karyawan</label>
	  <input type="text" name="b" value="{{$total->id_karyawan}}" class="form-control" required="">
	  </div>

	  <div class="form-group">
		<label class="control-lable">Id Pinjaman</label>
		<input type="text" name="c" value="{{$total->id_pinjaman}}" class="form-control" required="">
	</div>

	<div class="form-group">
		<label class="control-lable">Id Jabatan</label>
		<input type="text" name="c" value="{{$total->id_jabatan}}" class="form-control" required="">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">Simpan</button>
		<button type="reset" class="btn btn-danger">Reset</button>
	</div>
	</form>
	</div>
	</div>
	</div>
	@endsection



