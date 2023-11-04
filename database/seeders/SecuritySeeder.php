<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SecuritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('securities')->insert([
            'status' => rand(0, 1),
            'doors' => rand(0, 1),
            'windows' => rand(0, 1),
            'indoor_gate' => rand(0, 1),
            'outdoor_gate' => rand(0, 1),
            'movement' => rand(0, 1),
            'glass_break' => rand(0, 1),
            'perimeter' => rand(0, 1),
        ]);
    }
}
