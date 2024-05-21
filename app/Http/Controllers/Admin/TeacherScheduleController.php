<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeacherSchedule;
use Session;
use App\Models\Teacher;

class TeacherScheduleController extends Controller
{
    public function teacherSchedule(Request $request, $id = null)
    {
        Session::put('page', 'teacher_schedules');
        $teacherDetails = Teacher::get();
        if($request->ajax())
        {

            $data = $request->all();
            if($data['teacher_id'] != "all")
            {
            $teachersScheduleData = TeacherSchedule::with('subjects', 'classes', 'teachers')->where('teacher_id', $data['teacher_id'])->get();
            $teachersScheduleData = json_decode(json_encode($teachersScheduleData), true);
            return view('admin.teacher_schedules.ajax_teacher_schedules')->with(compact('teachersScheduleData', 'teacherDetails'));
            }else
            {
                $teachersScheduleData = TeacherSchedule::with('subjects', 'classes', 'teachers')->get();
                $teachersScheduleData = json_decode(json_encode($teachersScheduleData), true);
                return view('admin.teacher_schedules.ajax_teacher_schedules')->with(compact('teachersScheduleData', 'teacherDetails'));
            }

        }else
        {
        $teachersScheduleData = TeacherSchedule::with('subjects', 'classes', 'teachers')->get();
        $teachersScheduleData = json_decode(json_encode($teachersScheduleData), true);
        
       

        //echo "<pre>"; print_r($teachersScheduleData); die;
        return view('admin.teacher_schedules.teacher_schedules')->with(compact('teachersScheduleData', 'teacherDetails'));
        }
    }
}
