<?php

namespace Database\Factories;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cliente_nombre' => $this->faker->name(),
            'cliente_apellido'=>$this->faker->lastName(),
            'cliente_telefono'=>$this->faker->numberBetween(900000000,999999999),
        ];
    }
}
