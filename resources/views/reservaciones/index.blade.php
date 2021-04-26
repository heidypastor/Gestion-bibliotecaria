@extends('layouts.app')

@section('title', 'Reservaciones')

@section('content')

@if(session('status'))
  <div class="alert alert-success">
    {{ session('status') }}
  </div>
@endif

<div class="card-body">
  @if(auth::user()->tipoUsuario == 0)
  <div class="text-right">
    <a href="{{ route('reservaciones.create') }}" class="btn btn-primary">Nuevo</a>
  </div>
  @endif
  <div class="table-responsive table-upgrade">
    <table class="table">
      <thead>
        <th class="text-center">N°</th>
        <th class="text-center">Fecha Devolución</th>
        <th class="text-center">Ver más ..</th>
      </thead>
      <tbody>
        @foreach($reservacions as $reservacion)
          <tr>
            <td class="text-center">{{$reservacion->id}}</td>
            <td class="text-center">{{$reservacion->fechaDevoReservación}}</td>
            <td class="text-center"><a method='GET' href="reservaciones/{{$reservacion->id}}" class="btn btn-primary">Ver más..</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection