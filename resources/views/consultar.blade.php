@extends('navegacion')




@section('contenido')


	<h1>saludos para <?Php echo $nombre; ?> </h1>

	<ul>
		@forelse($consolas as $consola)
			<li>{{ $consola }}</li>
		@empty
			<p>No hay consolas :(</p>
		@endforelse

		@if(count($consolas) === 1)
			<p>solo tienes una consola</p>
		@endif

	</ul>


@stop


