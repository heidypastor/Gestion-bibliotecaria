@extends('layouts.app')

@section('title', 'Nuevo Libro')

@section('content')

	<form class="form-group" method="POST" action="/libros">
		@csrf
		<div class="form-group">
			<label for="">Nombre Del Libro</label>	
			<input type="text" name="nombrelibro" class="form-control">	
		</div>

		<div class="form-group">
			<label for="">Autor</label>	
			<input type="text" name="autorlibro" class="form-control">	
		</div>

		<div class="form-group">
			<label for="">Categoria</label>	
			<input type="text" name="categorialibro" class="form-control">	
		</div>

		<div class="form-group">
			<label for="">Cantidad de libros</label>	
			<input type="number" name="cantidadlibro" class="form-control">	
		</div>

		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>

@endsection