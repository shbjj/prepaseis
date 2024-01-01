<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use App\Imports\AlumnosImport;
use Illuminate\Auth\Events\Validated;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Validators\ValidationException;

class AlumnoController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index(){
        $page_title = 'Listado de Alumnos';
        $page_description = 'Listado de Alumnos.';
        $alumnos = Alumno::where('estatus','INSCRITO')->paginate(10);
        return view('alumnos.index', compact('page_title', 'page_description','alumnos'));
    }
    public function edit(Alumno $alumno){
        $page_title = $alumno->getNombreCompletoAttribute();
        $page_description = 'Información del alumno.';
        return view('alumnos.edit', ['alumno' => $alumno, 'page_title' => $page_title, 'page_description' => $page_description]);
    }

    public function update(Alumno $alumno, Request $request){
        $page_title = $alumno->getNombreCompletoAttribute();
        $page_description = 'Información del alumno.';


        $this->validate($request, [
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'estatus' => 'required|in:INSCRITO,RECURSADOR,EGRESADO,BAJA_DEFINITIVA,BAJA_TEMPORAL',
            'grado' => 'integer|required',
            'matricula' => 'nullable|string|unique:alumnos,matricula,' . $alumno->id, // Asegura que sea único en la tabla 'alumnos', excluyendo el registro actual
        ]);

        $alumno->nombre = $request->input('nombre');
        $alumno->apellido_paterno = $request->input('apellido_paterno');
        $alumno->apellido_materno = $request->input('apellido_materno');
        $alumno->curp = $request->input('curp');
        $alumno->fecha_nacimiento = $request->input('fecha_nacimiento');
        $alumno->estado = $request->input('estado');
        $alumno->municipio = $request->input('municipio');
        $alumno->cp = $request->input('cp');
        $alumno->telefono = $request->input('telefono');
        $alumno->matricula = $request->input('matricula');
        $alumno->grado = $request->input('grado');
        $alumno->grupo = $request->input('grupo');
        $alumno->estatus = $request->input('estatus');
        $alumno->carrera = $request->input('carrera');

        $alumno->save();

        return view('alumnos.edit', ['alumno' => $alumno, 'page_title' => $page_title, 'page_description' => $page_description]);
    }

    public function import(Request $request)
    {
        $page_title = 'Importar Alumnos';
        $page_description = 'Importar Alumnos desde un archivo de Excel.';
        
        try {
            $file = $request->file('import_file');
            Excel::import(new AlumnosImport, $file);
            
            Session::flash('status', 'Alumnos importados exitosamente');
        } catch (ValidationException $e) {
            $failures = $e->failures();
            
            foreach ($failures as $failure) {
                $errors[] = "Fila {$failure->row()}: {$failure->errors()[0]}";
            }
            
            Session::flash('error', 'Error durante la importación. Verifica el archivo y vuelve a intentarlo.');
            Session::flash('import_errors', $errors);
        }
    
        return view('alumnos.importar', compact('page_title', 'page_description'));
    }

    public function importForm(){
        $page_title = 'Importar Alumnos';
        $page_description = 'Importar Alumnos desde un archivo de Excel.';
        return view('alumnos.importar', compact('page_title', 'page_description'));
    }
}
