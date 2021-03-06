@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<center><h1>DATA PINJAMAN</h1></center>
		<div class="panel panel-primary">
				<div class="panel heading">Data Pinjaman
				<div class="panel-title pull-right">
				<a href="{{ URL::previous() }}">Kembali</a></div>
				</div>

				<div class="panel-body">
					<form action="{{route('pinjaman.store')}}" method="post">
					{{csrf_field()}}
					<div class="form-group">
						<label class="control-label">Id</label>
						<input type="text" name="a" class="form-control" required="">
					</div>
					<div class="form-group">
						<label class="control-label">Id Karyawan</label>
						<input type="text" name="b" class="form-control" required="">
					</div>
					<div class="form-group">
						<label class="control-label">Jumlah Pinjaman</label>
						<input type="textarea" name="c" class="form-control" required="">
					</div>
					<div class="form-group">
		<button type="submit" class="btn btn-success">Simpan</button>
		<button type="reset" class="btn btn-danger">Reset</button>
	</div>
				</div>
			@endsection