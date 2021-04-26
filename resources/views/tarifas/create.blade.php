@extends('layouts.app')

@section('title', 'Nuevo Libro')

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

	<form class="form-group" method="POST" action="/tarifas">
		@csrf
		<div class="form-group">
			<label for="">Valor Tarifa</label>	
			<input type="text" name="valorTarifa" class="form-control">	
		</div>

		<br>
		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>

@endsection