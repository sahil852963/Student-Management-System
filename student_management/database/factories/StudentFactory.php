<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone' =>$this->faker->phoneNumber(),
            'img' =>$this->faker->name,
            'course_id' => $this->faker->numberBetween(1, 7)
        ];
    }
}
