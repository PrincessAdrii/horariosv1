<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PuestoController;

//CRUDS
Route::get('/Alumnos.index', [AlumnoController::class, 'index'])->name('alumnos.index');
    Route::get('/Alumnos.create', [AlumnoController::class, 'create'])->name('Alumnos.create');
    Route::post('/Alumnos.store', [AlumnoController::class, 'store'])->name('Alumnos.store');
    Route::get('/Alumnos.editar/{alumno}', [AlumnoController::class, 'edit'])->name('Alumnos.editar');
    Route::get('/Alumnos.ver/{alumno}', [AlumnoController::class, 'show'])->name('Alumnos.ver');
    Route::post('/Alumnos.eliminar/{alumno}', [AlumnoController::class, 'destroy'])->name('Alumnos.eliminar');
    Route::post('/Alumnos.update/{alumno}', [AlumnoController::class, 'update'])->name('Alumnos.update');
    
Route::get('/Alumnos2.index', [AlumnoController::class, 'index'])->name('alumnos.index');
    Route::get('/Alumnos2.create', [AlumnoController::class, 'create'])->name('Alumnos.create');
    Route::post('/Alumnos2.store', [AlumnoController::class, 'store'])->name('Alumnos.store');
    Route::get('/Alumnos2.editar/{alumno}', [AlumnoController::class, 'edit'])->name('Alumnos.editar');
    Route::get('/Alumnos2.ver/{alumno}', [AlumnoController::class, 'show'])->name('Alumnos.ver');
    Route::post('/Alumnos2.eliminar/{alumno}', [AlumnoController::class, 'destroy'])->name('Alumnos.eliminar');
    Route::post('/Alumnos2.update/{alumno}', [AlumnoController::class, 'update'])->name('Alumnos.update');
    


Route::get('/Puestos.index', [PuestoController::class, 'index'])->name('puestos.index');
    Route::get('/Puestos.create', [PuestoController::class, 'create'])->name('puestos.create');
    Route::post('/Puestos.store', [PuestoController::class, 'store'])->name('puestos.store');
    Route::get('/Puestos.editar/{puesto}', [PuestoController::class, 'edit'])->name('puestos.editar');
    Route::get('/Puestos.ver/{puesto}', [PuestoController::class, 'show'])->name('puestos.ver');
    Route::post('/Puestos.eliminar/{puesto}', [PuestoController::class, 'destroy'])->name('puestos.eliminar');
    Route::post('/Puestos.update/{puesto}', [PuestoController::class, 'update'])->name('puestos.update');

Route::get('/Plazas.index', [PlazaController::class, 'index'])->name('plazas.index');





Route::get('/', function () {
    return view('inicio');  
});

Route::get('/dashboard', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
