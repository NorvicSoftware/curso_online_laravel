<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Alumno;
use App\Models\Profesor;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', ['cursos' => $cursos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profesores = Profesor::all();
        $alumnos = Alumno::all();
        return view('cursos.create', ['profesores' => $profesores, 'alumnos' => $alumnos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $curso = new Curso($request->all());
        $curso->save();
        foreach ($request->alumno_ids as $alumno_id){
            $curso->alumnos()->attach($alumno_id);
        }
        return redirect()->action([CursoController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $profesores = Profesor::all();
        $alumnos = Alumno::all();
        $curso = Curso::findOrFail($id);
        return view('cursos.edit', ['curso' => $curso, 'profesores' => $profesores, 'alumnos' => $alumnos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $curso = Curso::findOrFail($id);
        $curso->nombre = $request->nombre;
        $curso->nivel = $request->nivel;
        $curso->horas_academicas = $request->horas_academicas;
        $curso->profesor_id = $request->profesor_id;
        $curso->save();
        $curso->alumnos()->detach();
        foreach ($request->alumno_ids as $alumno_id){
            $curso->alumnos()->attach($alumno_id);
        }
        return redirect()->action([CursoController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
