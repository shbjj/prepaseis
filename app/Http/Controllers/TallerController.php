<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Taller;
use App\Models\Maestro;
use Illuminate\Http\Request;

class TallerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index(){
        $page_title = 'Listado de Talleres';
        $page_description = 'Listado de Talleres.';
        $talleres = Taller::where('activo', true)->paginate(10);
        return view('talleres.index', compact('page_title', 'page_description','talleres'));
    }

    public function create(){
        $page_title = 'Crear Taller';
        $page_description = 'Crear Taller.';
        $profesores = Maestro::where('activo',true)->orderBy('apellido_paterno')->get();
        return view('talleres.create', compact('page_title', 'page_description','profesores'));
    }

    public function save(Request $request){   
        $this->validate($request, [
            'nombre' => 'required',
            'rangoClases' => 'required',
            'rangoInscripciones' => 'required',
            'dia' => 'required',
            'cupo' => 'integer|required',
            'tipo' => 'required',
            'estatus' => 'required'
        ]);

        $fechasClases = explode(" - ", $request->input('rangoClases'));
        $fechasInscripciones = explode(" - ", $request->input('rangoInscripciones'));
        $horario = [];
        $dias = $request->input('dia');
        $diasStart = $request->input('time-start');
        $diasEnd = $request->input('time-end');

        // Itera sobre cada valor del arreglo
        $cont = 0;
        foreach ($dias as $dia) {
            $horario[] = ['dia' => $dia, 'inicio' => $diasStart[$cont], 'fin' => $diasEnd[$cont]];
            $cont++;
        }

        $taller = Taller::create([
            'nombre' => $request->input('nombre'),
            'tipo' => $request->input('tipo'),
            'estatus' => $request->input('estatus'),
            'ubicacion' => $request->input('ubicacion'),
            'cupo' => $request->input('cupo'),
            'semestre' => $request->input('semestre'),
            'instructor' => $request->input('instructor'),
            'descripcion' => $request->input('descripcion'),
            'fecha_inicio' => Carbon::createFromFormat('m/d/Y', $fechasClases[0])->format('Y-m-d'),
            'fecha_fin' => Carbon::createFromFormat('m/d/Y', $fechasClases[1])->format('Y-m-d'),
            'fecha_inicio_inscripcion' => Carbon::createFromFormat('m/d/Y', $fechasInscripciones[0])->format('Y-m-d'),
            'fecha_fin_inscripcion' => Carbon::createFromFormat('m/d/Y', $fechasInscripciones[1])->format('Y-m-d'),
            'horario' => json_encode($horario)
        ]);
        return redirect()->route('talleres.edit', $taller)->with('success', 'Taller creado exitosamente');
    }

    public function edit(Taller $taller){
        $page_title = $taller->nombre;
        $page_description = 'Información del maestro.';
        $profesores = Maestro::where('activo',true)->orderBy('apellido_paterno')->get();
        $horario = json_decode($taller->horario, true);
        
        return view('talleres.edit', [
            'taller' => $taller, 
            'page_title' => $page_title, 
            'page_description' => $page_description, 
            'profesores' => $profesores, 
            'taller' => $taller,
            'horario' => $horario
        ]);
    }

    public function update(Taller $taller, Request $request){
        
        $this->validate($request, [
            'nombre' => 'required',
            'rangoClases' => 'required',
            'rangoInscripciones' => 'required',
            'dia' => 'required',
            'cupo' => 'integer|required',
            'tipo' => 'required',
            'estatus' => 'required'
        ]);

        $fechasClases = explode(" - ", $request->input('rangoClases'));
        $fechasInscripciones = explode(" - ", $request->input('rangoInscripciones'));
        $horario = [];
        $dias = $request->input('dia');
        $diasStart = $request->input('time-start');
        $diasEnd = $request->input('time-end');

        // Itera sobre cada valor del arreglo
        $cont = 0;
        foreach ($dias as $dia) {
            $horario[] = ['dia' => $dia, 'inicio' => $diasStart[$cont], 'fin' => $diasEnd[$cont]];
            $cont++;
        }

        
        $taller->nombre = $request->input('nombre');
        $taller->tipo = $request->input('tipo');
        $taller->estatus = $request->input('estatus');
        $taller->ubicacion = $request->input('ubicacion');
        $taller->cupo = $request->input('cupo');
        $taller->semestre = $request->input('semestre');
        $taller->instructor_id = $request->input('instructor');
        $taller->descripcion = $request->input('descripcion');
        $taller->fecha_inicio = Carbon::createFromFormat('m/d/Y', $fechasClases[0])->format('Y-m-d');
        $taller->fecha_fin = Carbon::createFromFormat('m/d/Y', $fechasClases[1])->format('Y-m-d');
        $taller->fecha_inicio_inscripcion = Carbon::createFromFormat('m/d/Y', $fechasInscripciones[0])->format('Y-m-d');
        $taller->fecha_fin_inscripcion = Carbon::createFromFormat('m/d/Y', $fechasInscripciones[1])->format('Y-m-d');
        $taller->horario = json_encode($horario);
        $taller->activo = $request->input('activo') ? $request->input('activo') : 0;
        $taller->save();

        return redirect()->route('talleres.edit', $taller)->with('success', 'Taller actualizado exitosamente');
    }
}
