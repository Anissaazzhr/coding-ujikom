@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<center><h1>DATA PINJAMAN</h1></center>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title pull-right"></div>
			</div>

			<div class="panel-body"></div>
			<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Id Karyawan</th>
						<th>Jumlah Pinjaman</th>
					<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($pinjaman as $data)
					<tr>
						<td>{{$data->id}}</td>
						<td>{{$data->id_karyawan}}</td>
						<td>{{$data->jumlah_pinjaman}}</td>
						<td>
						</td>
				<a class="btn btn-warning" href="/pinjaman/{{$data->id}}/edit">Edit</a>
				</td>
				<td>
				<form action="{{route('pinjaman.destroy', $data->id)}}" method="post">
				<input type="hidden" name="_method" value="DELETE">
				<input type="hidden" name="_token">
				<a class="btn btn-primary" href="/pinjaman/{{$data->id}}">Show</a>
				</td>
				<td>
			<input class="btn btn-danger" type="submit" value="Delete">
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