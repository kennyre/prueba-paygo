<?php

namespace App\Imports;

use App\Empleado;
use Maatwebsite\Excel\Concerns\ToModel;

class EmpleadosImport implements ToModel
{

    

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        

        return new Empleado([
            'nombre'             => $row[0],
            'apellidos'          => $row[1], 
            'tipo_doc'           => $row[2],
            'cedula'             => $row[3],
            'fecha_nacimiento'   => $row[4],
            'cargo'              => $row[5],
            'telefono'           => $row[6],
            'email'              => $row[7],
        ]);
    }
}
