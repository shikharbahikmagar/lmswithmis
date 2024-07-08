<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Auth;
use Session;


class StudentController extends Controller
{
    public function login(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            $studentCount = Student::where(['email' => $data['email']])->count();
            if($studentCount == 0)
            {
                Session::flash('error_message', 'Invalid email address');
                return redirect()->back();
            }

            if(Auth::guard('student')->attempt(['email'=>$data['email'], 'password'=>$data['password']]))
            {
                return redirect('/student/dashboard');
            }else
            {
                Session::flash('error_message', 'Invalid email address or password');
                return redirect()->back();
            }
        }
        return view('student.student_login');
    }

    public function dashboard()
    {

        // Auth::guard('student')->logout();
        // dd("hello");
        $student_details = Student::where('id', Auth::guard('student')->user()->id)->first();
        $student_details = json_decode(json_encode($student_details), true);

        return view('student.students.ajax_assignments_page')->with(compact('student_details'));
    }

    public function students()
    {
        Session::put('page', 'students_details');
        $student = Student::where('id', Auth::guard('student')->user()->id)->first();
        return view('student.students.students')->with(compact('student'));
    }

   //add edit student
    public function EditStudent(Request $request, $id = null)
    {
        if($id == "")
        {
            $title = "Add Student";
            $student = new Student;
            $studentData = array();
            $message = "Student added successfully!";
        }else
        {
            $title = "Edit Student";
            $studentData = Student::where('id', $id)->first();
            $studentData = json_decode(json_encode($studentData), true);
            $student = Student::find($id);
            $message = "Student updated successfully!";
        }

        if($request->isMethod('post'))
        {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            $rules = [
                'name' => 'required|regex:/^[\pL\s\-]+$/u',
                'email' => 'required|email',
                'mobile' => 'required|numeric',
                'password' => 'required',
            ];

        }
    }

    //student logout
    public function logout()
    {
        Auth::guard('student')->logout();
        return redirect('/student/login');
    }
}
