<?php

namespace App\Exports;

//use App\\empleado;
use App\empleado;
use Maatwebsite\Excel\Concerns\FromCollection;

class EmpleadosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return empleado::all();
    }
}
