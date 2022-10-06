<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_name' =>   $this->faker->randomElement(['MATHS','BIO','PHYSICS','CHEMISTRY','SOCIAL']),
            'teacher_name' =>  $this->faker->randomElement(['SAHIL','SNEHA','SUGREEV','SANJAY','NIHARIKA']), 
            'batch_time' =>    $this->faker->randomElement(['MORNING','EVENING']),
            'teaching_day' =>  $this->faker->randomElement(['MONDAY','TUESDAY','WEDNSDAY','THURSDAY','FRIDAY','SATURDAY'])
        ];
    }
}
