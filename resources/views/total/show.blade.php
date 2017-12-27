@extends('layouts.master')
@section('content')
<div class="row">
	<center><h1>DATA TOTAL GAJI</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Total Gaji
	<div class="panel-title pull-right">
	<a href="{{ URL::previous() }}">Kembali</a></div>
	</div>
	<div class="panel-body">
	
	<div class="form-group">
	<label class="control-lable"> Id</label>
	  <input type="text" name="a" value="{{$pinjaman->id}}" class="form-control" readonly="" >
	  </div>

	<div class="form-group">
	<label class="control-lable">Id Karyawan</label>
	  <input type="text" name="b" value="{{$pinjaman->id_karyawan}}" class="form-control" readonly="" >
	  </div>

	<div class="form-group">
		<label class="control-lable">Id Pinjaman</label>
		<input type="text" name="c" value="{{$pinjaman->id_pinjaman}}" class="form-control" readonly="" >
	</div>

	<div class="form-group">
		<label class="control-lable">Id Jabatan</label>
		<input type="text" name="d" value="{{$pinjaman->id_jabatan}}" class="form-control" readonly="" >
	</div>
	</form>
	</div>
	</div>
	</div>
	@endsection



