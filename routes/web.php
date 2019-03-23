<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|Aquí creamos las rutas de las vistas
|
*/



Route::get('/', function () {

    return view('inicio');
    //return "Hola desde la pág de inicio";
});


Route::get('crear', function () {
    return view('crear');    
});

Route::get('consultar/{nombre?}', function ($nombre = "Invitado") {
    //return view('consultar');    
    return "Hola $nombre";
})->where('nombre', "[A-Za-z]+");


Route::get('actualizar', function () {
    //return view('actualizar');
    return "Hola desde la pág de actualizar";
});

Route::get('eliminar', function () {
    //return view('eliminar');
    return "Hola desde la pág de eliminar";
});