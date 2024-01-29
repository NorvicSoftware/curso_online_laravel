<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesores = Profesor::all();
        return view('profesores.index', ['profesores' => $profesores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profesores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_apellido' => 'required|max:75',
            'profesion' => 'required|max:35',
        ]);
        $profesor = new Profesor($request->all());
        $profesor->save();
        return redirect()->action([ProfesorController::class, 'index']);
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
        $profesor = Profesor::findOrFail($id);
        return view('profesores.edit', ['profesor' => $profesor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre_apellido' => 'required|max:75',
            'profesion' => 'required|max:35',
        ]);
        $profesor = Profesor::findOrFail($id);
        $profesor->nombre_apellido = $request->nombre_apellido;
        $profesor->profesion = $request->profesion;
        $profesor->grado_academico = $request->grado_academico;
        $profesor->telefono = $request->telefono;
        $profesor->save();
        return redirect()->action([ProfesorController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
