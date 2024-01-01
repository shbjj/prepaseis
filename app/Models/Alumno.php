<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
     // Define los campos que se deben tratar como fechas
     protected $dates = ['fecha_nacimiento'];

     // ...
 
     // Getter para fecha_nacimiento
     public function getFechaNacimientoAttribute()
     {
         // El método getAttribute automáticamente se llama cuando accedes a la propiedad
         return $this->attributes['fecha_nacimiento'];
     }
 
     // Setter para fecha_nacimiento
     public function setFechaNacimientoAttribute($value)
     {
         // El método setAttribute automáticamente se llama cuando asignas un valor a la propiedad
         $this->attributes['fecha_nacimiento'] = $value;
     }
    protected $fillable = [
            'nombre',
            'apellido_paterno',
            'apellido_materno',
            'telefono',
            'user_id',
            'matricula',
            'estatus',
            'carrera',
            'grupo',
            'grado',
            'fecha_nacimiento',
            'curp',
            'sexo',
            'estado',
            'municipio',
            'cp'
    ];

    public function getNombreCompletoAttribute()
    {
        return "{$this->apellido_paterno} {$this->apellido_materno} {$this->nombre}";
    }
}
