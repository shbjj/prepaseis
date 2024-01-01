<?php

namespace App\Http\Controllers;

use App\Models\Maestro;
use Illuminate\Http\Request;

class MaestroController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index(){
        $page_title = 'Listado de Profesores';
        $page_description = 'Listado de Profesores.';
        $profesores = Maestro::where('activo', true)->paginate(10);
        return view('maestros.index', compact('page_title', 'page_description','profesores'));
    }

    public function create(){
        $page_title = 'Crear Profesor';
        $page_description = 'Crear Profesor.';
        return view('maestros.create', compact('page_title', 'page_description'));
    }

    public function save(Request $request){
        $this->validate($request, [
            'nombre' => 'required',
            'apellido_paterno' => 'required'
        ]);

        $maestro = Maestro::create([
            'nombre' => $request->input('nombre'),
            'apellido_paterno' => $request->input('apellido_paterno'),
            'apellido_materno' => $request->input('apellido_materno')
        ]);
        return redirect()->route('profesores.edit', $maestro)->with('success', 'Maestro creado exitosamente');
    }

    public function edit(Maestro $maestro){
        $page_title = $maestro->getNombreCompletoAttribute();
        $page_description = 'Información del maestro.';
        return view('maestros.edit', ['maestro' => $maestro, 'page_title' => $page_title, 'page_description' => $page_description]);
    }

    public function update(Maestro $maestro, Request $request){
        $this->validate($request, [
            'nombre' => 'required',
            'apellido_paterno' => 'required'
        ]);

        $maestro->nombre = $request->input('nombre');
        $maestro->apellido_paterno  = $request->input('apellido_paterno');
        $maestro->apellido_materno  = $request->input('apellido_materno');
        $maestro->activo = $request->input('activo') ? $request->input('activo') : 0;
        $maestro->save();

        return redirect()->route('profesores.edit', $maestro)->with('success', 'Maestro actualizado exitosamente');
    }
}
