<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Asuntos;
class AsuntosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'asunto_costo'=>$this->faker->randomFloat(2,50,500),
            'asunto_tiempo'=>$this->faker->numberBetween(10,20),
        ];
    }
}
