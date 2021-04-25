@extends('layouts.app')

@section('title', 'Tarifas')

@section('content')

	<form class="form-group" method="POST" action="/tarifas/{{$tarifa->id}}">
		@method('PUT')
		@csrf
		<div class="form-group">
			<label for="">Valor de la tarifa</label>	
			<input type="text" value="{{$tarifa->valorTarifa}}" name="valorTarifa" class="form-control">	
		</div>
		<br>
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>

@endsection