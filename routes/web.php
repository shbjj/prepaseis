<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\MaestroController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TallerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('dashboard');
});*/

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/index', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);


//Alumnos
Route:: controller(AlumnoController:: class) -> group(function () {
    $prefix = 'alumnos';
    Route::get('/'.$prefix.'/', 'index')->name($prefix.'.index');
    Route::get('/'.$prefix.'/edit/{alumno}', 'edit')->name($prefix.'.edit');
    Route::post('/'.$prefix.'/edit/{alumno}', 'update')->name($prefix.'.update');
    Route::post('/'.$prefix.'/importar', 'import')->name($prefix.'.importar');
    Route::get('/'.$prefix.'/importar', 'importForm');
 
});

//Maestros
Route:: controller(MaestroController:: class) -> group(function () {
    $prefix = 'profesores';
    Route::get('/'.$prefix.'/', 'index')->name($prefix.'.index');
    Route::get('/'.$prefix.'/create', 'create')->name($prefix.'.create');
    Route::post('/'.$prefix.'/create', 'save')->name($prefix.'.create');
    Route::get('/'.$prefix.'/edit/{maestro}', 'edit')->name($prefix.'.edit');
    Route::post('/'.$prefix.'/edit/{maestro}', 'update')->name($prefix.'.update');
});

//Talleres
Route:: controller(TallerController:: class) -> group(function () {
    $prefix = 'talleres';
    Route::get('/'.$prefix.'/', 'index')->name($prefix.'.index');
    Route::get('/'.$prefix.'/create', 'create')->name($prefix.'.create');
    Route::post('/'.$prefix.'/create', 'save')->name($prefix.'.create');
    Route::get('/'.$prefix.'/edit/{taller}', 'edit')->name($prefix.'.edit');
    Route::post('/'.$prefix.'/edit/{taller}', 'update')->name($prefix.'.update');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
