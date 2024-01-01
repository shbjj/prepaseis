<?php

namespace App\Imports;

use App\Models\Alumno;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class AlumnosImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        // Convierte el valor de fecha de Excel a una instancia de Carbon
        
        $fechaNacimiento = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha_de_nacimiento']);

        return new Alumno([
            'nombre' => $row['nombre'],
            'apellido_paterno' => $row['apellido_paterno'],
            'apellido_materno' => $row['apellido_materno'],
            'matricula' => $row['matricula'],
            'estatus' => $row['estatus'],
            'carrera' => $row['carrera'],
            'grupo' => $row['grupo'],
            'grado' => $row['grado'],
            'curp' => $row['curp'],
            'sexo' => $row['sexo'],
            'estado' => $row['estado'],
            'municipio' => $row['municipio'],
            'cp' => $row['cp'],
            'fecha_nacimiento' => $fechaNacimiento
        ]);
    }

    public function rules(): array{
        return[
            'nombre' => ['required'],
            'apellido_paterno' => ['required'],
            'estatus' => ['required', 'in:INSCRITO,RECURSADOR,EGRESADO,BAJA_DEFINITIVA,BAJA_TEMPORAL'],
            'grado' => ['required', 'integer']
        ];
    }
}
