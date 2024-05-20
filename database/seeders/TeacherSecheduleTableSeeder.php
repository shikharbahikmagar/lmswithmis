<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSecheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teacherScheduleRecord = [
            ['id' =>1, 'teacher_id' => 2, 'class_id' => 1, 'subject_id' => '2', 'day_of_week' => 'everyday', 'time'=> '10:15 - 11:05'
                , 'status' => 1],
            ['id' =>2, 'teacher_id' => 2, 'class_id' => 2, 'subject_id' => '3', 'day_of_week' => 'everyday', 'time'=> '11:05 - 12:00'
                , 'status' => 1],
            ['id' =>3, 'teacher_id' => 2, 'class_id' => 3, 'subject_id' => '4', 'day_of_week' => 'everyday', 'time'=> '02:05 - 03:55'
                , 'status' => 1],
        ];
        DB::table('teacher_schedules')->insert($teacherScheduleRecord);
    }
}
