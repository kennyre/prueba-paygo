<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;


class PagesController extends Controller
{
    //Se crean los métodos que van a reemplazar los que se enconbraban en las rutas
	
	//protected $request;

	public function __construct()
	{
		$this->middleware('validacionesform', ['except' => ['inicio']]);
	}
	

	public function inicio()
	{
		/*return ['key' => ['value1','value2']];*/
		//return response('contenido');
		return view('inicio');
	}
	

	public function crear()
	{
		return view('crear');
	}


	public function crear_empleado(CreateMessageRequest $request)
	{
		//Procesar los datos del formulario

		$data = $request->all(); //devuelve un array
		
		return back()->with('info', 'El empleado se ha creado correctamente');
	}


	public function consultar($nombre = "Invitado")
	{
		    
		$consolas = ["xbox"];

	    return view('consultar', compact('nombre', 'consolas'));
	}
	

	public function actualizar()
	{
		return view('actualizar');
	}


	public function eliminar()
	{
		return view('eliminar');
	}

}
