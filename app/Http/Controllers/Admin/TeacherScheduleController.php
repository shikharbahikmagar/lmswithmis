<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeacherSchedule;
use Session;
use App\Models\Teacher;
use App\Models\Grade;
use App\Models\Subject;

class TeacherScheduleController extends Controller
{
    public function teacherSchedule(Request $request)
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

    public function addEditTeacherSchedule(Request $request, $id = null)
    {
        if($id == "")
        {
            $title = "Add Teacher Schedule";
            $teacherScheduleData = new TeacherSchedule;
            $btn = "Submit";
            $messgage = "Teacher Schedule added successfully";
        }else
        {
            $title = "Edit Teacher Schedule";
            $teacherScheduleData = TeacherSchedule::find($id);
            $btn = "Update";
            $messgage = "Teacher Schedule updated successfully";
        }

        $grades = Grade::get();
        
        $subjects = Subject::get();
       
        return view('admin.teacher_schedules.add_edit_teacher_schedules')->with(compact('title', 'btn', 'teacherScheduleData', 'grades', 'subjects'));
    }

    public function showSubjects(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            $subjects = Subject::where('grade_id', $data['class_id'])->get();
            // $subjects = json_decode(json_encode($subjects), true);
            return view('admin.teacher_schedules.ajax_subject_options')->with(compact('subjects'));
        }
    }
}
