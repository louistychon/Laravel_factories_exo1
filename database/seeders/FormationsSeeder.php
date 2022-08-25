<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class FormationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            [
                'nom' => 'Coding School 4',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipis',
            ],
            [
                'nom' => 'Coding School 3',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipis',
            ],
            [
                'nom' => 'Coding School 2',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipis',
            ],
            [
                'nom' => 'Coding School 1',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipis',
            ],
            [
                'nom' => 'Marketing lab 4',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipis',
            ],
            [
                'nom' => 'Marketing lab 6',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipis',
            ],
        ]);
    }
}
