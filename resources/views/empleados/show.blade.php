@extends('navegacion')




@section('contenido')

	<h1>Empleado</h1>

	<p>Empleado {{ $empleado->nombre }} {{ $empleado->apellidos }} </p>

@stop