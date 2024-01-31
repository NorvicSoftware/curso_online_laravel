<?php

namespace App\Http\Controllers;

use App\Repositories\AlumnoRepository;
use Illuminate\Http\Request;
use App\Models\Alumno;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Repositories\Exports\AlumnoExcel;
use PDF;

class AlumnoController extends Controller
{
    protected $alumnos;

    public function __construct(AlumnoRepository $alumnos){
        $this->alumnos = $alumnos;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', ['alumnos' => $alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_apellido' => 'required|max:75',
            'edad' => 'required|integer',
        ]);
        $alumno = new Alumno($request->all());
        $alumno->save();
        return redirect()->action([AlumnoController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.view', ['alumno' => $alumno]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.edit', ['alumno' => $alumno]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre_apellido' => 'required|max:75',
            'edad' => 'required|integer',
        ]);
        $alumno = Alumno::findOrFail($id);
        $alumno->nombre_apellido = $request->nombre_apellido;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;
        $alumno->save();
        return redirect()->action([AlumnoController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(DB::table('alumno_curso')->where('alumno_id', '=', $id)->first() != null){
            return redirect()->back()->withErrors(['mensaje' => 'El alumno no puede ser eliminado.']);
        }
        else{
            $alumno = Alumno::findOrFail($id);
            $alumno->delete();
            return redirect()->action([AlumnoController::class, 'index']);
        }
    }

    public function report()
    {
        $alumnos = $this->alumnos->obtenerLosAlumnosIncritosAUnCurso();
        return view('alumnos.report', ['alumnos' => $alumnos]);

    }

    public function reportPDF()
    {
        $data = [
            'alumnos' => $this->alumnos->obtenerLosAlumnosIncritosAUnCurso(),
        ];
        $pdf = PDF::loadView('alumnos.pdf', $data);
        return $pdf->stream();
    }

    public function reportExcel()
    {
        $data = [
            'alumnos' => $this->alumnos->obtenerLosAlumnosIncritosAUnCurso(),
        ];
        return Excel::download(new AlumnoExcel($data), 'alumnos.xlsx');
    }
}
