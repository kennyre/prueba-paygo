<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|Aquí creamos las rutas de las vistas
|
*/





Route::get('/', ['as' => 'inicio', 'uses' => 'PagesController@inicio']);

Route::get('crear', ['as' => 'crear', 'uses' => 'PagesController@crear']);
Route::post('crear_empleado', 'PagesController@crear_empleado');


Route::get('consultar/{nombre?}', ['as' => 'consultar', 'uses' => 'PagesController@consultar'])->where('nombre', "[A-Za-z]+");

Route::get('actualizar', ['as' => 'actualizar', 'uses' => 'PagesController@actualizar']);

Route::get('eliminar', ['as' => 'eliminar', 'uses' => 'PagesController@eliminar']);



//Route::resource('empleados', 'EmpleadosController');



//Rutas para el Controlador CRUD


Route::get('empleados', ['as' => 'empleados.index', 'uses' => 'EmpleadosController@index']);

Route::get('empleados/create', ['as' => 'empleados.create', 'uses' => 'EmpleadosController@create']);

Route::POST('empleados', ['as' => 'empleados.store', 'uses' => 'EmpleadosController@store']);

Route::get('empleados/{id}', ['as' => 'empleados.show', 'uses' => 'EmpleadosController@show']);

Route::get('empleados/{id}/edit', ['as' => 'empleados.edit', 'uses' => 'EmpleadosController@edit']);

Route::put('empleados/{id}', ['as' => 'empleados.update', 'uses' => 'EmpleadosController@update']);

Route::delete('empleados/{id}', ['as' => 'empleados.destroy', 'uses' => 'EmpleadosController@destroy']);
