@extends('navegacion')




@section('contenido')


	<h1>Todos los empleados</h1>
	<table width="100%" border="1">
		
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Tipo de Documento</th>
				<th>No.Documento</th>
				<th>Fecha Nacimiento</th>
				<th>Cargo</th>
				<th>Teléfono</th>
				<th>Email</th>
				<th>Actualizar</th>
			</tr>
		</thead>


		<tbody>
			
			@foreach ($empleados as $empleado)

				

				<tr>
					<td>
						{{ $empleado->id }} 
					</td>

					<td>
						<a href="{{ route('empleados.show', $empleado->id) }}">
							{{ $empleado->nombre }} 
						</a>
					</td>

					<td> {{ $empleado->apellidos }} </td>
					
					<td> {{ $empleado->tipo_doc }} </td>

					<td> {{ $empleado->cedula }} </td>
					
					<td> {{ $empleado->fecha_nacimiento }} </td>
					
					<td> {{ $empleado->cargo }} </td>
					
					<td> {{ $empleado->telefono }} </td>
					
					<td> {{ $empleado->email }} </td>

					<td> 
						<a href="{{ route('empleados.edit', $empleado->id) }}">
							Actualizar
						</a>
						<form style="display: inline;" method="POST" action="{{ route('empleados.destroy', $empleado->id) }}">

							{!! csrf_field() !!}

							{!! method_field('DELETE') !!}

							<button type="submit" class="btn btn-danger btn-xs">Eliminar</button>

						</form>
					</td>
					

				</tr>

			@endforeach

		</tbody>

	</table>

@stop