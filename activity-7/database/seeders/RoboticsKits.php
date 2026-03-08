<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RoboticsKits extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kits')->insert([
            'kit_name' => 'StarterKit'
        ],
        [
            'kit_name' => 'StarterKit'
        ],
        [
            'kit_name' => 'Educational Robotics Kit'
        ],
        [
            'kit_name' => 'Kit5'
        ]);
    }
}
