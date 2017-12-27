@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<center><h1>DATA TOTAL GAJI</h1></center>
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
						<th>Id Pinjaman</th>
						<th>Id Jabatan</th>
					<th colspan="3">Action</th>
				</tr>
			</thead>
			<tbody>
			@foreach($total as $data)

			<tr>
			<td>{{$data->id}}</td>
			<td>{{$data->id_karyawan}}</td>
			<td>{{$data->id_pinjaman}}</td>
			<td>{{$data->id_jabatan}}</td>
			<td>
			</td>

			<td>
			<a class="btn btn-warning" href="/total/{{$data->id}}/edit">Edit</a>
			</td><td>
			<form action="{{route('total.destroy', $data->id)}}" method="post">

			<input type="hidden" name="_method" value="DELETE">
			<input type="hidden" name="_token">
			<a class="btn btn-primary" href="/total/{{$data->id}}">Show</a>
			</td><td>

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
			@endection