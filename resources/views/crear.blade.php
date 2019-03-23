@extends('navegacion')




@section('contenido')


<html>
	<title>Formulario Registro de Datos</title>

<head>

	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">

		

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/multistep.css">
		
		<!-- Fuentes Instaladas -->
		<link rel="stylesheet" href="fonts/fonts.css">
		<!-- Checkbox Bootstrap css-->
		<link rel="stylesheet" href="css/bootstrap2-toggle.css">

		<!-- LIBRERIA DE ESTILOS BOOTSTRAP Y JQUERY -->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootbox.min.js"></script>

		<!-- LIBRERIA DE VALIDACION DEL FORMULARIO -->
		<script type="text/javascript" src="js/jquery.validate.js"></script>
		<script type="text/javascript" src="js/additional-methods.js"></script>

		<!-- Checkbox Bootstrap js-->
		<script type="text/javascript" src="js/bootstrap2-toggle.min.js"></script>

		<!-- Ocultar div de los Pasos al hacer scroll Down / Mostrar al hacer scroll up-->
		<script type="text/javascript" src="js/headroom.min.js"></script>
		<script type="text/javascript" src="js/jquery.headroom.min.js"></script>
		
	
		




	<script type="text/javascript">
				
		$(document).ready(function()
		{
			
			
			//VALIDACIÓN PARA DESPLEGAR ACORDEON DATOS DEL CLIENTE:
			$("#id_destino").change(function(){
				
				if($(this).val() == '3'){
					
					$("#acrdn5").show();
					
				}else{
					
					$("#acrdn5").hide();
				}
			});

		
		});	
			
			
			//FUNCIÓN PARA VERIFICACIÓN DE OFAC
			
	</script>
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
					<select name="id_tipo_doc" id="id_tipo_doc" required value="{{ old('id_tipo_doc') }}" class="form-control input-sm">
					
						<option value="0">Seleccione tipo documento</option>
						<option value="1">CC - Cédula de Ciudadania</option>
						<option value="1">CI - Cédula de Identidad</option>
						<option value="2">TI - Tarjeta de Identidad</option>
						<option value="3">TP - Tarjeta de Pasaporte</option>
						<option value="4">RC - Registro Civil</option>
						<option value="5">CE - Cédula de Extranjeria</option>
						<option value="6">CI - Carné de Identidad</option>
						<option value="6">DNI - Doc. Nacional de Identidad</option>
						<option value="6">DUI - Documento Unico de Identidad</option>
						<option value="6">ID - Identificacion Oficial</option>
														
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
				
				
				<label for="s_apellido_cliente" class="control-label  col-xs-4 col-sm-2 col-md-2 col-lg-2">URL Foto:</label>

				<div class="col-xs-8 col-sm-4 col-md-4 col-lg-4">
					<input type="file" name="url_foto" id="url_foto" value="{{ old('url_foto') }}" class="form-control input-sm add-bottom-xs add-bottom-sm" placeholder=""/>
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