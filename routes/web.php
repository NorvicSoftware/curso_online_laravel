<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profesores', [ProfesorController::class, 'index'])->name('profesores.index');
Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('/profesores/create', [ProfesorController::class, 'create'])->name('profesores.create');
Route::post('/profesores',  [ProfesorController::class, 'store'])->name('profesores.store');

Route::get('/alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('/alumnos',  [AlumnoController::class, 'store'])->name('alumnos.store');

Route::get('/cursos/create', [CursoController::class, 'create'])->name('cursos.create');
Route::post('/cursos',  [CursoController::class, 'store'])->name('cursos.store');

Route::get('/profesores/{id}/editar', [ProfesorController::class, 'edit'])->name('profesores.edit');
Route::put('/profesores/{id}', [ProfesorController::class, 'update'])->name('profesores.update');

Route::get('/alumnos/{id}/editar', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::put('/alumnos/{id}', [AlumnoController::class, 'update'])->name('alumnos.update');

Route::get('/cursos/{id}/editar', [CursoController::class, 'edit'])->name('cursos.edit');
Route::put('/cursos/{id}', [CursoController::class, 'update'])->name('cursos.update');

Route::get('/profesores/{id}/ver', [ProfesorController::class, 'show'])->name('profesores.show');
Route::get('/alumnos/{id}/ver', [AlumnoController::class, 'show'])->name('alumnos.show');
Route::get('/cursos/{id}/ver', [CursoController::class, 'show'])->name('cursos.show');

Route::delete('/profesores/{id}', [ProfesorController::class, 'destroy'])->name('profesores.destroy');
Route::delete('/alumnos/{id}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
Route::delete('/cursos/{id}', [CursoController::class, 'destroy'])->name('cursos.destroy');

Route::get('/alumnos/reporte/web', [AlumnoController::class, 'report'])->name('alumnos.report');

Route::get('/alumnos/reporte/pdf', [AlumnoController::class, 'reportPDF'])->name('alumnos.reportPDF');
