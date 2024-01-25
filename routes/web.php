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
