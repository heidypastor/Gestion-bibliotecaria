@extends('layouts.app')

@section('title', 'Libros Disponibles')

@section('content')

<div class="card-body">
  <div class="table-responsive table-upgrade">
    <table class="table">
      <thead>
        <th class="text-center">Nombre</th>
        <th class="text-center">Autor</th>
        <th class="text-center">Categoria</th>
        <th class="text-center">Cantidad</th>
        {{-- <th class="text-center">Ver más..</th> --}}
        <th class="text-center">Editar</th>
      </thead>
      <tbody>
      	@foreach($libros as $libro)
          <tr>
            <td class="text-center">{{$libro->nombrelibro}}</td>
            <td class="text-center">{{$libro->autorlibro}}</td>
            <td class="text-center">{{$libro->categorialibro}}</td>
            <td class="text-center">{{$libro->cantidadlibro}}</td>
            {{-- <td class="text-center"><a href="/libros/{{$libro->slug}}" class="btn btn-primary">Ver más..</td> --}}
            <td class="text-center"><a href="/libros/{{$libro->slug}}/edit" class="btn btn-primary">Editar</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>


@endsection