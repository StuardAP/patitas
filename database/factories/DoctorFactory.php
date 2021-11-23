<?php

namespace Database\Factories;
use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'empleado_id'=>$this->faker->unique()->numberBetween(1,4)
        ];
    }
}
