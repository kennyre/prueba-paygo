<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|Aquí creamos las rutas de las vistas
|
*/




//Diseño inicial de rutas:

Route::get('/', ['as' => 'inicio', 'uses' => 'PagesController@inicio']);
/*
Route::get('crear', ['as' => 'crear', 'uses' => 'PagesController@crear']);

Route::post('crear_empleado', 'PagesController@crear_empleado');

Route::get('consultar/{nombre?}', ['as' => 'consultar', 'uses' => 'PagesController@consultar'])->where('nombre', "[A-Za-z]+");

Route::get('actualizar', ['as' => 'actualizar', 'uses' => 'PagesController@actualizar']);

Route::get('eliminar', ['as' => 'eliminar', 'uses' => 'PagesController@eliminar']);
*/


//Ruta utilizando Eloquent:
//Route::resource('empleados', 'EmpleadosController');





//Rutas para el Controlador CRUD utilizando el query builder
//Son las que utilizaremos en esta implementación


//Ruta que despliega la vista que muestra el listado de empleados existente actualmente
Route::get('empleados', ['as' => 'empleados.index', 'uses' => 'EmpleadosController@index']);

//Ruta que despliega la vista que contiene el formulario de creación de empleados
Route::get('empleados/create', ['as' => 'empleados.create', 'uses' => 'EmpleadosController@create']);

//Ruta que enlaza a la vista que se encarga de almacenar los datos en la BDs
Route::POST('empleados', ['as' => 'empleados.store', 'uses' => 'EmpleadosController@store']);

//Ruta que enlaza a la vista que despliega información de un registro específico
Route::get('empleados/{id}', ['as' => 'empleados.show', 'uses' => 'EmpleadosController@show']);

//Ruta que despliega la vista que contiene el formulario para actualizar datos de un empleado
Route::get('empleados/{id}/edit', ['as' => 'empleados.edit', 'uses' => 'EmpleadosController@edit']);

//Ruta que enlaza a la vista que se encarga de ejecutar la actualización de los datos por id
Route::put('empleados/{id}', ['as' => 'empleados.update', 'uses' => 'EmpleadosController@update']);

//Ruta que enlaza a la vista que se encarga de ejecutar la eliminación de un registro por id
Route::delete('empleados/{id}', ['as' => 'empleados.destroy', 'uses' => 'EmpleadosController@destroy']);
