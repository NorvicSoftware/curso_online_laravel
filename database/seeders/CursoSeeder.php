<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso1 = new Curso();
        $curso1->materia = 'Desarrollo web con Laravel';
        $curso1->nivel = '6to nivel';
        $curso1->horas_academicas = '120 Horas';
        $curso1->profesor_id = 1;
        $curso1->save();

        $curso2 = new Curso();
        $curso2->materia = 'Contabilidad básica';
        $curso2->nivel = '2do nivel';
        $curso2->horas_academicas = '60 Horas';
        $curso2->profesor_id = 2;
        $curso2->save();

        $curso1->alumnos()->attach(1);
        $curso1->alumnos()->attach(2);
        $curso1->alumnos()->attach(3);

        $curso2->alumnos()->attach(1);
        $curso2->alumnos()->attach(3);
    }
}
