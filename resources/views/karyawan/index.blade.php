@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<center><h1>DATA KARYAWAN</h1></center>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title pull-right"></div>
			</div>

			<div class="panel-body"></div>
			<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Tanggal Lahir</th>
						<th colspan="3">Action</th>

					</tr>
				</thead>

				<tbody>
					@foreach($karyawan as $data)
					<tr>
						<td>{{$data->id}}</td>
						<td>{{$data->nama}}</td>
						<td>{{$data->alamat}}</td>
						<td>{{$data->tanggal_lahir}}</td>
					
					<td>
			<a class="btn btn-warning" href="/karyawan/{{$data->id}}/edit">Edit</a>
			</td>
			<td>
			<form action="{{route('karyawan.destroy', $data->id)}}" method="post">
			<input type="hidden" name="_method" value="DELETE">
			<input type="hidden" name="_token">
			<a class="btn btn-primary" href="/karyawan/{{$data->id}}">Show</a>
			</td><td>

			<input class="btn btn-danger" type="submit" value="delete">
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