@extends('layouts.app')

@section('title', 'Libros Disponibles')

@section('content')

@if(session('status'))
  <div class="alert alert-success">
    {{ session('status') }}
  </div>
@endif

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
        <th class="text-center">Eliminar</th>
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
            <td class="text-center">
                <form action="{{ route('libros.destroy', $libro) }}" method="POST">
                  @method('DELETE')
                  @csrf 
                  <button type="submit" class="btn btn-danger" value="Eliminar">Eliminar</button>
                </form>

            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection