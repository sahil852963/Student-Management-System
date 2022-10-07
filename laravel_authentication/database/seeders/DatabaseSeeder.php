<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Academic;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Apiuser::factory(10)->create();
        $this->call([
            // AcademicSeeder::class
        ]);
    }
}
 