@extends('layouts.app')

@section('title', 'Libro')

@section('content')

	<p>{{$libro->nombrelibro}}</p>
	<p>{{$libro->autorlibro}}</p>
	<p>{{$libro->slug}}</p>
	<p>{{$libro->categorialibro}}</p>
	<p>{{$libro->cantidadlibro}}</p>




@endsection