<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boleta extends Model
{
    use HasFactory;
    protected $fillable = [
        'taller_id', 'alumno_id', 'instructor_id', 'director_id', 'nombre_taller', 'semestre',
        'descripcion', 'fecha_inicio', 'fecha_fin', 'estatus'
    ];

    protected $dates = ['fecha_inicio', 'fecha_fin'];

    public function taller()
    {
        return $this->belongsTo(Taller::class, 'taller_id');
    }

    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'alumno_id');
    }

    public function instructor()
    {
        return $this->belongsTo(Maestro::class, 'instructor_id');
    }

    public function director()
    {
        return $this->belongsTo(Maestro::class, 'director_id');
    }
}
