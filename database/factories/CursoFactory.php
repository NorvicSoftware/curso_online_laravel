<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Profesor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'materia' => $this->faker->word(),
            'nivel' => $this->faker->randomElement(['1r nivel', '2do nivel', '3r nivel', '4to nivel', '5to nivel']),
            'horas_academicas' => $this->faker->randomElement(['10 Horas', '40 Horas', '80 Horas']),
            'profesor_id' => Profesor::all()->random()->id
        ];
    }
}
