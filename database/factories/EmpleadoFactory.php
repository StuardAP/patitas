<?php

namespace Database\Factories;
use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'empleado_dni'=>$this->faker->randomNumber(8),
            'empleado_nombre' => $this->faker->name(),
            'empleado_apellido'=>$this->faker->lastName(),
            'empleado_telefono'=>$this->faker->numberBetween(900000000,999999999),
        ];
    }
}
