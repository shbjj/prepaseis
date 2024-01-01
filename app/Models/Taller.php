<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre', 'descripcion', 'ubicacion', 'fecha_inicio', 'fecha_fin', 'fecha_fin_inscripcion','fecha_inicio_inscripcion','horario', 'cupo', 'instructor_id', 'semestre', 'tipo', 'estatus', 'activo'
    ];

    protected $dates = ['fecha_inicio', 'fecha_fin', 'fecha_fin_inscripcion','fecha_inicio_inscripcion'];

    public function instructor()
    {
        return $this->belongsTo(Maestro::class, 'instructor_id');
    }
}
