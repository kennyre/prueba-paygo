@extends('navegacion')




@section('contenido')


<html>
	<title>Formulario Registro de Datos</title>

<head>

	
</head>



<body>

	<h1>Formulario para creación de Empleados</h1>
	<div align="left">

		@if(session()->has('info') )

			<h3> {{ session('info') }} </h3>

		@else

			<form action="crear_empleado" method="post">
				
				
				{!! csrf_field() !!}
				
				<label for="p_apellido_cliente" class="control-label  col-xs-4 col-sm-2 col-md-2 col-lg-2">Nombres</label>


				<!-- La función old de se utiliza para q el formulario visualice los valores ingresados al devolverse cuando hay un error -->

				<div class="col-xs-8 col-sm-4 col-md-4 col-lg-4">
					<input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="form-control input-sm add-bottom-xs add-bottom-sm " onKeyUp="javascript:this.value=this.value.toUpperCase();" placeholder="" required />

					{!! $errors->first('nombre', '<span class=error>:message</span>') !!}
					
				</div>
					
				


				<label for="s_apellido_cliente" class="control-label  col-xs-4 col-sm-2 col-md-2 col-lg-2">Apellidos:</label>
				
				<div class="col-xs-8 col-sm-4 col-md-4 col-lg-4">
					<input type="text" name="apellidos" id="apellidos" value="{{ old('apellidos') }}" class="form-control input-sm add-bottom-xs add-bottom-sm"  onKeyUp="javascript:this.value=this.value.toUpperCase();" placeholder="" required />

					{!! $errors->first('nombre', '<span class=error>:message</span>') !!}
				</div>
				
				
				
				<br><br>
				<label for="subcategory" class="col-xs-8 col-sm-2 col-md-2 col-lg-2">Tipo de Documento:</label>

				<div class="col-xs-8 col-sm-3 col-md-3 col-lg-3	">
					<select name="tipo_doc" id="itipo_doc" required value="{{ old('tipo_doc') }}" class="form-control input-sm">
					
						<option value="0">Seleccione tipo documento</option>
						<option value="CC">CC - Cédula de Ciudadania</option>
						<option value="CI">CI - Cédula de Identidad</option>
						<option value="TI">TI - Tarjeta de Identidad</option>
						<option value="TP">TP - Tarjeta de Pasaporte</option>
						<option value="RC">RC - Registro Civil</option>
						<option value="CE">CE - Cédula de Extranjeria</option>
						<option value="CI">CI - Carné de Identidad</option>
						<option value="DNI">DNI - Doc. Nacional de Identidad</option>
						<option value="DUI">DUI - Documento Unico de Identidad</option>
						<option value="IO">IO - Identificacion Oficial</option>
														
					</select>


				</div>
				
				
				<label for="subcategory" class="control-label col-xs-4 col-sm-3 col-md-3 col-lg-3">Documento de Identidad:</label>

				<div class="col-xs-8 col-sm-3 col-md-3 col-lg-3" aling="left">
					<input type="text" name="cedula" id="cedula" value="{{ old('cedula') }}" class="form-control positive-integer input-sm add-bottom-xs"  />

					{!! $errors->first('cedula', '<span class=error>:message</span>') !!}

				</div>
				


				<br><br>
				<label for="fecha_nacimiento" class="control-label  col-xs-4 col-sm-2 col-md-2 col-lg-2">Fecha Nacimiento:</label>
				<div class="col-xs-8 col-sm-4 col-md-4 col-lg-4">
					<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" class="form-control input-sm add-bottom-xs add-bottom-sm" placeholder="" required />

					{!! $errors->first('fecha_nacimiento', '<span class=error>:message</span>') !!}

				</div>
				
				
				<label for="s_apellido_cliente" class="control-label  col-xs-4 col-sm-2 col-md-2 col-lg-2">Cargo:</label>

				<div class="col-xs-8 col-sm-4 col-md-4 col-lg-4">
					<input type="file" name="cargo" id="cargo" value="{{ old('cargo') }}" class="form-control input-sm add-bottom-xs add-bottom-sm" placeholder=""/>
				</div>
				
			
				<br><br>
				<label for="p_apellido_cliente" class="control-label  col-xs-4 col-sm-2 col-md-2 col-lg-2">Telefono</label>
				
				<div class="col-xs-8 col-sm-4 col-md-4 col-lg-4">
					<input type="text" name="telefono" id="telefono" value="{{ old('telefono') }}" class="form-control positive-integer input-sm add-bottom-xs" placeholder="" required />

					{!! $errors->first('telefono', '<span class=error>:message</span>') !!}

				</div>
					

				<label for="s_apellido_cliente" class="control-label  col-xs-4 col-sm-2 col-md-2 col-lg-2">E-mail:</label>

				<div class="col-xs-8 col-sm-4 col-md-4 col-lg-4">
					<input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control input-sm add-bottom-xs" placeholder="abc@uea.com" required />

					{!! $errors->first('email', '<span class=error>:message</span>') !!}

				</div>
				
				
				
				
				
				
				<br><br><br><br><br><br>
				<div class="sent" align="center">
					<!-- BOTON PARA SIMULAR EL ENVIO -->
					<button name='enviar' id='enviar' class="btn-approved">Enviar</button>
				</div>
				
			</form>

		@endif
		
		
	</div>

	<script type="text/javascript" src="js/jquery.numeric.js"></script>
	<script type="text/javascript" src="js/jsnumeric.js"></script>
</body>

</html>







@stop