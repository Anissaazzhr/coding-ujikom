@extends('layouts.master')
@section('content')
<div class="row">
	<center><h1>DATA JABATAN</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Jabatan
	<div class="panel-title pull-right">
	<a href="{{ URL::previous() }}">Kembali</a></div>
	</div>
	<div class="panel-body">
	
	<div class="form-group">
	<label class="control-lable"> Id</label>
	  <input type="text" name="a" value="{{$jabatan->id}}" class="form-control" readonly="" >
	  </div>

	<div class="form-group">
	<label class="control-lable">Nama Jabatan</label>
	  <input type="text" name="b" value="{{$jabatan->nama_jabatan}}" class="form-control" readonly="" >
	  </div>

	<div class="form-group">
		<label class="control-lable">Besar Uang</label>
		<input type="text" name="c" value="{{$jabatan->besar_uang}}" class="form-control" readonly="" >
	</div>
	</form>
	</div>
	</div>
	</div>
	@endsection



