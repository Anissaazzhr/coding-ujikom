@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<center><h1>DATA JABATAN</h1></center>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title pull-right"></div>
			</div>

			<div class="panel-body"></div>
			<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nama Jabatan</th>
						<th>Besar Uang</th>
					<th colspan="3">Action</th>
				</tr>
			</thead>
			<tbody>
			@foreach($jabatan as $data)
			<tr>
			<td>{{$data->id}}</td>
			<td>{{$data->nama_jabatan}}</td>
			<td>{{$data->besar_uang}}</td>

			<td>
			<a class="btn btn-warning" href="/jabatan/{{$data->id}}/edit">Ubah</a>
			</td><td>
			<form action="{{route('jabatan.destroy', $data->id)}}" method="post">

			<input type="hidden" name="_method" value="Hapus">
			<input type="hidden" name="_token">
			<a class="btn btn-primary" href="/jabatan/{{$data->id}}">Show</a>
			</td><td>

			<input class="btn btn-danger" type="submit" value="Hapus">
			{{csrf_field()}}
			</td>
			</form>
			</td>
			</tr>
			@endforeach
			</tbody>
			</table>
			</div>
			</div>
			</div>
@endsection