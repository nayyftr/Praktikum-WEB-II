<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("students")->insert([
            [
                'name' => 'Nayla Fatira',
                'student_id_number' => 'F55123067',
                'email' => 'nay@gmail.com',
                'phone_number' => '085342580048',
                'birth_date' => '2005-06-08',
                'gender' => 'Female',
                'status' => 'Active',
                'major_id' => 1,
            ],
            [
                'name' => 'Ola',
                'student_id_number' => 'F55123009',
                'email' => 'olaa@gmail.com',
                'phone_number' => '085280284736',
                'birth_date' => '2004-03-20',
                'gender' => 'Female',
                'status' => 'Active',
                'major_id' => 2,
            ]
        ]);
    }
}
