<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teacherRecords = [
            [
                'id' => 1,
                'first_name' => 'John',
                'last_name' => 'Doe',
                'dob' => '2024-12-03',
                'joining_date' => '2024-12-03',
                'department' => 'Science',
                'salary'=> '20000',
                'attendance' => 12,
                'gender' => 'Male',
                'contact' => '986564',
                'address' => '123 Main St',
                'teacher_image' => '',
                'email' => 'john.doe',
                'password' => bcrypt('123'),
                'status' => 1,
            ],
            [
                'id' => 2,
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'dob' => '2024-12-03',
                'joining_date' => '2024-12-03',
                'department' => 'Science',
                'salary'=> '20000',
                'attendance' => 12,
                'gender' => 'Male',
                'contact' => '986564',
                'address' => '123 Main St',
                'teacher_image' => '',
                'email' => 'jane.doe',
                'password' => bcrypt('123'),
                 'status' => 1,
            ],
            [
                'id' => 3,
                'first_name' => 'Mary',
                'last_name' => 'Doe',
                'dob' => '2024-12-03',
                'joining_date' => '2024-12-03',
                'department' => 'Science',
                'salary'=> '20000',
                'attendance' => 12,
                'gender' => 'Male',
                'contact' => '986564',
                'address' => '123 Main St',
                'teacher_image' => '',
                'email' =>'mary.doe',
                'password' => bcrypt('123'),
                 'status' => 1,
            ],
        ];
        DB::table('teachers')->insert($teacherRecords);
    }
}
