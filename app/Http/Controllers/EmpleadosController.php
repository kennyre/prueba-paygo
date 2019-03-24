<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Despliegue de datos

        $empleados = DB::table('empleado')->get();


        return view('empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Llama a la vista q despliega form para crear empleados
    public function create()
    {
        //
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //Método de la arquitectura REST para insertar info en la BDs
    public function store(Request $request)
    {
        
        //Realizamos un insert a la BD ppor medio del query builder de Laravel

       //return "Almacenando...";

        
        DB::table('empleado')->insert([
            "nombre"            => $request->input('nombre'),
            "apellidos"         => $request->input('apellidos'),
            "tipo_doc"          => $request->input('tipo_doc'),
            "cedula"            => $request->input('cedula'),
            "fecha_nacimiento"  => $request->input('fecha_nacimiento'),
            "cargo"             => $request->input('cargo'),
            "telefono"          => $request->input('telefono'),
            "email"             => $request->input('email'),

            "created_at"        => Carbon::now(),
            "updated_at"        => Carbon::now()
        ]);

        return redirect()->route('empleados.index');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Visualizar datos de un empleado particular

        $empleado = DB::table('empleado')->where('id', $id)->first();

        return view('empleados.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Retornar un formulario para actualizar los datos de un empleado


         $empleado = DB::table('empleado')->where('id', $id)->first();

        return view('empleados.edit', compact('empleado'));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Actualizar

        DB::table('empleado')->where('id', $id)->update([

            "nombre"            => $request->input('nombre'),
            "apellidos"         => $request->input('apellidos'),
            "tipo_doc"          => $request->input('tipo_doc'),
            "cedula"            => $request->input('cedula'),
            "fecha_nacimiento"  => $request->input('fecha_nacimiento'),
            "cargo"             => $request->input('cargo'),
            "telefono"          => $request->input('telefono'),
            "email"             => $request->input('email'),
            
            "updated_at"        => Carbon::now()
        ]);


        //Redireccionar
        return redirect()->route('empleados.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Eliminar un registro por id
    public function destroy($id)
    {
        //
        DB::table('empleado')->where('id', $id)->delete();

        return redirect()->route('empleados.index');

    }
}
