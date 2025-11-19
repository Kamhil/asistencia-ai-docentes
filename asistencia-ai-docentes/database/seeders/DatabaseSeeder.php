<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Esto le dice a Laravel que ejecute tu archivo de docentes
        $this->call([
            DocentesSeeder::class
        ]);
    }
}