@extends('layouts.app')

@section('title', 'Editar Libro')

@section('content')

	<form class="form-group" method="POST" action="/reservaciones/{{$reservacion->id}}">
		@method('PUT')
		@csrf
		<div class="form-group">
			<label for="">Nombre Del Libro</label>	
			<input type="date" value="{{$reservacion->fechaDevoReservación}}" name="fechaDevoReservación" class="form-control">	
		</div>

		<br>
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>

@endsection