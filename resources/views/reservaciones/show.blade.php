@extends('layouts.app')

@section('title', 'Reservación')

@section('content')

	<div class="container-md">
		<div class="head">
			<h4 style="color: #2e4053" class="text-center">RESERVACIÓN</h4>
		</div>
		<div class="table-responsive table-upgrade">
		  <table class="table">
		    <thead>
		      <th class="text-center">Fecha Devolución</th>
		      <th class="text-center">Libros reservados</th>
		    </thead>
		    <tbody>
		        <tr>
		          <td class="text-center">{{$reservacion->fechaDevoReservación}}</td>
					<td class="text-center">
		         		@foreach($reservacion->libros as $libro)
							<ul>
								<li>{{$libro->nombrelibro}}</li>
							</ul>
						@endforeach
					</td>
		        </tr>
		    </tbody>
		    <tfoot>
		    	<tr>
		    		<td class="text-center"><a href="/reservaciones/{{$reservacion->id}}/edit" class="btn btn-primary">Editar</a></td>
		    		<td class="text-center">
		    			<form action="{{ route('reservaciones.destroy', $reservacion) }}" method="POST">
			              @method('DELETE')
			              @csrf 
			              <button type="submit" class="btn btn-danger" value="Eliminar">Eliminar</button>
			            </form>
		    		</td>
		    	</tr>
		    </tfoot>
		  </table>
		</div>
	</div>

@endsection