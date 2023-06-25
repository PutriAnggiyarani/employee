<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'firstname' => 'Purnama',
                'lastname' => 'Anaking',
                'email'=> 'purnama.anaking@gmail.com',
                'age' => 20,
                'position_id' => 1
            ],

            [
                'firstname' => 'Putri',
                'lastname' => 'Anggiyarani',
                'email'=> 'putri.anggiyarani@gmail.com',
                'age' => 25,
                'position_id' => 2
            ],

            [
                'firstname' => 'Desy',
                'lastname' => 'Midyarani',
                'email'=> 'desy.midyarani.com',
                'age' => 23,
                'position_id' => 3
            ],
        ]);
    }
}

?>