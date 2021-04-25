@extends('layouts.app')

@section('title', 'Nueva Reservación')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form class="form-group" method="POST" action="/reservaciones">
		@csrf
		<div class="form-group">
			<label for="">Fecha devolución</label>	
			<input type="date" name="fechaDevoReservación" class="form-control">	
		</div>

		<br>
		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>

@endsection