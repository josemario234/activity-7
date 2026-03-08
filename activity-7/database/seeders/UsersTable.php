<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'Username' => 'Admon',
            'Email' => ' admon@robotics.com',
            'Password' => 'Adm@2022',
            'Role' => 'Administrative'
        ],
        [
            'Username' => 'Tecmilenio',
            'Email' => ' tecmilenio@robotics.com',
            'Password' => 'Adm@2022',
            'Role' => 'Teacher'
        ],
        [
            'Username' => 'Student',
            'Email' => ' student@robotics.com',
            'Password' => 'Adm@2022',
            'Role' => 'Student'
        ]);
    }
}
