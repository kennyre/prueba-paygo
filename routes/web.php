<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|Aquí creamos las rutas de las vistas
|
*/





Route::get('/', ['as' => 'inicio', 'uses' => 'PagesController@inicio'])->middleware('validacionesform');

Route::get('crear', ['as' => 'crear', 'uses' => 'PagesController@crear']);
Route::post('crear_empleado', 'PagesController@crear_empleado');


Route::get('consultar/{nombre?}', ['as' => 'consultar', 'uses' => 'PagesController@consultar'])->where('nombre', "[A-Za-z]+");

Route::get('actualizar', ['as' => 'actualizar', 'uses' => 'PagesController@actualizar']);

Route::get('eliminar', ['as' => 'eliminar', 'uses' => 'PagesController@eliminar']);