<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjectRecords = [
            [
                'id' => 1,
                'grade_id' =>1,
                'subject_name' => 'English',
                'subject_code' => 'ENG',
                'credit_hours' =>2,
                'status' => 1,
            ],
            [
                'id' => 2,
                'grade_id' =>1,
                'subject_name' => 'Maths',
                'subject_code' => 'MAT',
                'credit_hours' =>2,
                'status' => 1,
            ],
            [
                'id' => 3,
                'grade_id' =>1,
                'subject_name' => 'Science',
                'subject_code' => 'SCI',
                'credit_hours' =>2,
                'status' => 1,
            ],
            [
                'id' => 4,
                'grade_id' =>2,
                'subject_name' => 'History',
                'subject_code' => 'HIS',
                'credit_hours' =>2,
                'status' => 1,
            ],
            [
                'id' => 5,
                'grade_id' =>2,
                'subject_name' => 'Geography',
                'subject_code' => 'GEO',
                'credit_hours' =>2,
                'status' => 1,
            ],
            [
                'id' => 6,
                'grade_id' =>2,
                'subject_name' => 'Economics',
                'subject_code' => 'ECO',
                'credit_hours' =>2,
                'status' => 1,
            ],
        ];

        DB::table('subjects')->insert($subjectRecords);
    }
}
