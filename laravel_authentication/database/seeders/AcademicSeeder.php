<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker;

class AcademicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $faker = Faker\Factory::create();  

        // for($i = 0; $i < 10; $i ++) {
        //     $subject = ['maths', 'science','bio','physics', 'CS', 'IT', 'English', 'Hindi', 'Java'];
        //     $subRandom = rand(0,8);


            // DB::table('academics')->insert([
            //     'name' => $faker->name,
            //     'roll_no' => $faker->numberBetween(1,1000),
            //     'subject' => $subject[$subRandom]
            // ]);
            // DB::table('academics')->insert([
            //     'name' => $faker->name,
            //     'roll_no' => $faker->numberBetween(1,50),
            //     'subject' => $faker->random('maths', 'science','bio','physics', 'CS', 'IT', 'English', 'Hindi', 'Java')
            // ]);
    }
}
