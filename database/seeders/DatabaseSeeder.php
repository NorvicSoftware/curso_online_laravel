<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profesor;
use App\Models\Alumno;
use App\Models\Curso;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(ProfesorSeeder::class);
        $this->call(AlumnoSeeder::class);
        $this->call(CursoSeeder::class);

        Profesor::factory(10)->create();
//        Alumno::factory(10)->create();
//        Curso::factory(5)->create();

        Curso::factory()->has(Alumno::factory()->count(5))->create();
        Curso::factory()->has(Alumno::factory()->count(5))->create();
        Curso::factory()->has(Alumno::factory()->count(3))->create();

    }
}
