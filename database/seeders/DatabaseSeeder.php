<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Typeformations;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Eleves::factory(50)->create();

        $this->call([
            BatimentsSeeder::class,
            FormationsSeeder::class,
            TypeformationsSeeder::class,
        ]);
    }
}
