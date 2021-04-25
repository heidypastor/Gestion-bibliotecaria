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
        <th class="text-center">Valor Tarifa</th>
        <th class="text-center">Editar</th>
        <th class="text-center">Eliminar</th>
      </thead>
      <tbody>
      	@foreach($tarifas as $tarifa)
          <tr>
            <td class="text-center">{{$tarifa->valorTarifa}}</td>
            <td class="text-center"><a href="/tarifas/{{$tarifa->id}}/edit" class="btn btn-primary">Editar</td>
            <td class="text-center">
                <form action="{{ route('tarifas.destroy', $tarifa) }}" method="POST">
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