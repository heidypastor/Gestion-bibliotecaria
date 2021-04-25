@extends('layouts.app')

@section('title', 'Reservación')

@section('content')

	<div class="container-md">
		<div class="head">
			<h4 style="color: #2e4053" class="text-center">RESERVACIÓN</h4>
		</div>
		<div class="content">
			<p>{{$reservacion->fechaDevoReservación}}</p>
		</div>
		<div class="footer">
            <a href="/reservaciones/{{$reservacion->id}}/edit" class="btn btn-primary">Editar</a>
            <br><br>
            <form action="{{ route('reservaciones.destroy', $reservacion) }}" method="POST">
              @method('DELETE')
              @csrf 
              <button type="submit" class="btn btn-danger" value="Eliminar">Eliminar</button>
            </form>
		</div>
	</div>



@endsection