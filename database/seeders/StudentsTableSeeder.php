<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //password = 123456
        $studentsRecord = [
            [
                'id' =>1, 'first_name' => 'John', 'middle_name'=> 'bdr', 'last_name' => 'thapa', 'address' => 'pokhara', 'gender'=> 'male', 'dob' => '2021-12-02', 'parent_name'=> 'bhim thapa',
                'parent_contact' => '9864354384', 'admission_date' => '2021-12-02', 'grade_id' => 1, 'roll_no'=> 1,
                'email' => 'john@example.com', 'password' => '$2a$12$CHGfcIc90IQvLiVq.gAoKep5tD..drZEnQ.RZwA1WJECZfTTTtQxC', 'student_image' => '', 'status' => 1,
            ],
            [
                'id' =>2, 'first_name' => 'ram', 'middle_name'=> 'bdr', 'last_name' => 'thapa', 'address' => 'baglung', 'gender'=> 'male', 'dob' => '2021-12-02', 'parent_name'=> 'bhim thapa',
                'parent_contact' => '9864354384', 'admission_date' => '2021-12-02', 'grade_id' => 2, 'roll_no'=> 2,
                'email' => 'ram@gmail.com', 'password' => '$2a$12$CHGfcIc90IQvLiVq.gAoKep5tD..drZEnQ.RZwA1WJECZfTTTtQxC', 'student_image' => '', 'status' => 1,
            ],
        ];

        DB::table('students')->insert($studentsRecord);
    }
}
