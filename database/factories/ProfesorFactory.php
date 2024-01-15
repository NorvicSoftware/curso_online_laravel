<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profesor>
 */
class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_apellido' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'profesion' => $this->faker->randomElement(['Ing. Sistema', 'Ing. Electronico', 'Adm. Empresas', 'Ing. Comercial']),
            'grado_academico' => $this->faker->randomElement(['Licenciatura', 'Master', 'Tecnico']),
            'telefono' => $this->faker->phoneNumber()
        ];
    }
}
