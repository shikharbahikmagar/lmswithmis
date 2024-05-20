<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeacherSchedule;
use Session;

class TeacherScheduleController extends Controller
{
    public function teacherSchedule()
    {
        Session::put('page', 'teacher_schedules');

        $teachersScheduleData = TeacherSchedule::with('subjects', 'classes', 'teachers')->get();
        $teachersScheduleData = json_decode(json_encode($teachersScheduleData), true);
        //echo "<pre>"; print_r($teachersScheduleData); die;
        return view('admin.teacher_schedules.teacher_schedules')->with(compact('teachersScheduleData'));
    }
}
