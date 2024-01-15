<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alumno1 = new Alumno();
        $alumno1->nombre_apellido = 'Jaime Duram Miranda';
        $alumno1->edad = 18;
        $alumno1->telefono = '+725357789';
        $alumno1->direccion = 'Los Lirios #5566';
        $alumno1->save();

        $alumno2 = new Alumno();
        $alumno2->nombre_apellido = 'Mary Isabel Corona Vela';
        $alumno2->edad = 21;
        $alumno2->save();

        $alumno3 = new Alumno();
        $alumno3->nombre_apellido = 'Brain Castro Cardozo';
        $alumno3->edad = 23;
        $alumno3->telefono = '+591355433';
        $alumno3->save();
    }
}
