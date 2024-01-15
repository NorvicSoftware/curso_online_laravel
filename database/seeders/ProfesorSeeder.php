<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profesor;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profesor1 = new Profesor();
        $profesor1->nombre_apellido = 'Jaime Peredo Lopez';
        $profesor1->profesion = 'Ingenieria de sistemas';
        $profesor1->grado_academico = 'Licenciatura';
        $profesor1->save();

        $profesor2 = new Profesor();
        $profesor2->nombre_apellido = 'Daniel Medina Coria';
        $profesor2->profesion = 'Administración de empresas';
        $profesor2->grado_academico = 'Licenciatura';
        $profesor2->telefono = '727366732';
        $profesor2->save();

        $profesor3 = new Profesor();
        $profesor3->nombre_apellido = 'Pedro Alfonso Poveda Matos';
        $profesor3->profesion = 'Ingenieria comercial';
        $profesor3->grado_academico = 'Master';
        $profesor3->save();
    }
}
