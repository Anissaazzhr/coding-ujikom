@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<center><h1>DATA JABATAN</h1></center>
		<div class="panel panel-primary">
				<div class="panel heading">Data Jabatan
				<div class="panel-title pull-right">
				<a href="{{ URL::previous() }}">Kembali</a></div>
				</div>

				<div class="panel-body">
					<form action="{{route('jabatan.store')}}" method="post">
					{{csrf_field()}}
					<div class="form-group">
						<label class="control-label">Id</label>
						<input type="text" name="a" class="form-control" required="">
					</div>
					<div class="form-group">
						<label class="control-label">Nama Jabatan</label>
						<input type="text" name="b" class="form-control" required="">
					</div>
					<div class="form-group">
						<label class="control-label">Besar Uang</label>
						<input type="text" name="c" class="form-control" required="">
					</div>
					<div class="form-group">
		<button type="submit" class="btn btn-success">Simpan</button>
		<button type="reset" class="btn btn-danger">Reset</button>
	</div>
				</div>
			@endsection