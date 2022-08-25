<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TypeformationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typeformations')->insert([
        [
            'nom' => 'Marketing',
        ],
        [
            'nom' => 'Dev web',
        ],
        [
            'nom' => 'AI',
        ],
        [
            'nom' => 'informatique',
        ],
        [
            'nom' => 'commerce',
        ],
        [
            'nom' => 'Communication',
        ],
    ]);
    }
}
