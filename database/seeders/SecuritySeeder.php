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
            'status' => 0,
            'doors' => 0,
            'windows' => 0,
            'indoor_gate' => 0,
            'outdoor_gate' => 0,
            'motion' => 0,
            'glass_break' => 0,
            'perimeter' => 0,
            'smoke' => 1,
        ]);
    }
}
