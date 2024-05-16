<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $GradeRecords = [
            ['id'=>1, 'grade_name'=>'1', 'room_num'=>'cls1', 'capacity'=>30, 'enrolled_students'=>20, 'status'=>1],
            ['id'=>2, 'grade_name'=>'2', 'room_num'=>'cls1', 'capacity'=>30, 'enrolled_students'=>20, 'status'=>1],
            ['id'=>3, 'grade_name'=>'3', 'room_num'=>'cls1', 'capacity'=>30, 'enrolled_students'=>20, 'status'=>1],
            ['id'=>4, 'grade_name'=>'4', 'room_num'=>'cls1', 'capacity'=>30, 'enrolled_students'=>20, 'status'=>1],
            ['id'=>5, 'grade_name'=>'5', 'room_num'=>'cls1', 'capacity'=>30, 'enrolled_students'=>20, 'status'=>1],
            ['id'=>6, 'grade_name'=>'6', 'room_num'=>'cls1', 'capacity'=>30, 'enrolled_students'=>20, 'status'=>1],
            ['id'=>7, 'grade_name'=>'7', 'room_num'=>'cls1', 'capacity'=>30, 'enrolled_students'=>20, 'status'=>1],
        ];

        DB::table('grades')->insert($GradeRecords);
    }
}
