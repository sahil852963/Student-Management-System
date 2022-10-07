<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;


class AcademicFactory extends Factory
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
                'roll_no' => $this->faker->numberBetween(1,50),
                'subject' => $this->faker->randomElement(['maths', 'science','bio','physics', 'CS', 'IT', 'English', 'Hindi', 'Java'])
            
        ];
    }
}
