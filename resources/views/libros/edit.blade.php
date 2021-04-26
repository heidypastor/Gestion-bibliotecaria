@extends('layouts.app')

@section('title', 'Editar Libro')

@section('content')

	<form class="form-group" method="POST" action="/libros/{{$libro->slug}}">
		@method('PUT')
		@csrf
		<div class="form-group">
			<label for="">Nombre Del Libro</label>	
			<input type="text" value="{{$libro->nombrelibro}}" name="nombrelibro" class="form-control">	
		</div>

		<div class="form-group">
			<label for="">Autor</label>	
			<input type="text" value="{{$libro->autorlibro}}" name="autorlibro" class="form-control">	
		</div>

		<div class="form-group">
			<label for="">Categoria</label>	
			<input type="text" value="{{$libro->categorialibro}}" name="categorialibro" class="form-control">	
		</div>

		<div class="form-group">
			<label for="">Cantidad de libros</label>	
			<input type="number" value="{{$libro->cantidadlibro}}" name="cantidadlibro" class="form-control">	
		</div>
		<br>
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>

@endsection