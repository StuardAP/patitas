<?php

namespace Database\Factories;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'producto_costo'=>$this->faker->randomFloat(2,20,100),
            'producto_cantidad'=>$this->faker->numberBetween(10,20),
        ];
    }
}
