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
            Session::put('teacher_id'. $data['teacher_id']);
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
        
       

        // echo "<pre>"; print_r($teachersScheduleData); die;
        return view('admin.teacher_schedules.teacher_schedules')->with(compact('teachersScheduleData', 'teacherDetails'));
        }
    }

    //add teacher schedules
    public function addTeacherSchedule(Request $request, $id = null)
    {
        Session::put('page', 'teacher_schedules');
        $teacher_id = $id;
        if($request->isMethod('post'))
        {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $rules = [
                'class_id' => 'required',
                'subject_id' => 'required',
                'time' => 'required',
            ];

            $custom_messages = [
                'class_id.required' => 'please select class',
                'subject_id.required' => 'please select Subject',
                'time.required' => 'please select time',

            ];

            $this->validate($request, $rules, $custom_messages);

            $teacherSchedule = new TeacherSchedule;

            $teacherSchedule->teacher_id = $teacher_id;
            $teacherSchedule->class_id = $data['class_id'];
            $teacherSchedule->subject_id = $data['subject_id'];
            $teacherSchedule->day_of_week = $data['day_of_week'];
            $teacherSchedule->time = $data['time'];
            $teacherSchedule->status = 1;

            $teacherSchedule->save();
            Session::flash('success_message', "Schedule added successfully");
            return redirect('admin/teacher-schedules');
        }
        $teacher_id = $id;
        $grades = Grade::get();
        $teacherScheduleData = TeacherSchedule::find($id);
        $subjects = Subject::get();
        // $teacherScheduleData = json_decode(json_encode($teacherScheduleData), true);
        // dd($teacherScheduleData);
       
        return view('admin.teacher_schedules.add_teacher_schedules')->with(compact('teacher_id', 'subjects', 'grades'));
    }

    //edit teacher schedules
    public function editTeacherSchedule(Request $request, $id = null)
    {
        Session::put('page', 'teacher_schedules');
        if($request->isMethod('post'))
        {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $rules = [
                'class_id' => 'required',
                'subject_id' => 'required',
                'time' => 'required',
            ];

            $custom_messages = [
                'class_id.required' => 'please select class',
                'subject_id.required' => 'please select Subject',
                'time.required' => 'please select time',

            ];

            $this->validate($request, $rules, $custom_messages);

            $teacherSchedule = TeacherSchedule::find($id);

            $teacherSchedule->teacher_id = $data['teacher_id'];
            $teacherSchedule->class_id = $data['class_id'];
            $teacherSchedule->subject_id = $data['subject_id'];
            $teacherSchedule->day_of_week = $data['day_of_week'];
            $teacherSchedule->time = $data['time'];
            $teacherSchedule->status = 1;

            $teacherSchedule->save();
            Session::flash('success_message', "Schedule added successfully");
            return redirect('admin/teacher-schedules');
        }
        $teacher_id = $id;
        $grades = Grade::get();
        $schedule_with_teacher = TeacherSchedule::with('teachers')->where('id', $id)->get();
        $schedule_with_teacher = json_decode(json_encode($schedule_with_teacher), true);
        // dd($schedule_with_teacher);
        $teacherScheduleData = TeacherSchedule::find($id);
        $subjects = Subject::get();
        // $teacherScheduleData = json_decode(json_encode($teacherScheduleData), true);
        // dd($teacherScheduleData);
       
        return view('admin.teacher_schedules.edit_teacher_schedules')->with(compact('teacherScheduleData', 'grades', 'subjects', 'schedule_with_teacher'));
    }

    //show subjects dynamically for adding schedules
    public function showSubjectsForAdd(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            $subjects = Subject::where('grade_id', $data['class_id'])->get();
            $subjects = json_decode(json_encode($subjects), true);
            return view('admin.teacher_schedules.ajax_subject_options_for_add')->with(compact('subjects'));
        }
    }

    //show subjects dynamically for editing schedule
    public function showSubjectsForEdit(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            $subjects = Subject::where('grade_id', $data['class_id'])->get();
            $subjects = json_decode(json_encode($subjects), true);
            // echo "<pre>"; print_r($data); die;
            return view('admin.teacher_schedules.ajax_subject_options_for_edit')->with(compact('subjects'));
        }
    }

    //update teacher schedule status
    public function updateTeacherScheduleStatus(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();

            if($data['status'] == "Active")
            {
                $status = 0;
            }else
            {
                $status = 1;
            }

        TeacherSchedule::where('id', $data['schedule_id'])->update(['status'=>$status]);
        return response()->json(['status'=>$status,'schedule_id'=>$data['schedule_id']]);

        }
       
    }

    //delete teacher schedule
    public function deleteTeacherSchedule($id)
    {
        TeacherSchedule::where('id', $id)->delete();

        Session::flash('success_message', 'teacher schedule deleted successfully');
        return redirect()->back();
    }
}
