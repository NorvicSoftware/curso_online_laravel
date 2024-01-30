<?php

namespace App\Repositories;
use App\Models\Alumno;

class AlumnoRepository
{
    public function obtenerLosAlumnosIncritosAUnCurso(){
        $alumnos = Alumno::has('cursos')->get();
        return $alumnos;
    }
}
