<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ApiuserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fname' => $this->faker->name,
            'lname' => $this->faker->name
        ];
    }
}
