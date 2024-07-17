<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
use Image;
use App\Models\TeacherSchedule;
use App\Models\Teacher;
use App\Models\Grade;
use App\Models\Subject;
use Hash;

class TeacherController extends Controller
{
    public function login(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            $teacherCount = Teacher::where(['email' => $data['email']])->count();
            if($teacherCount == 0)
            {
                Session::flash('error_message', 'Invalid email address');
                return redirect()->back();
            }

            if(Auth::guard('teacher')->attempt(['email'=>$data['email'], 'password'=>$data['password']]))
            {
                return redirect('/teacher/dashboard');
            }else
            {
                Session::flash('error_message', 'Invalid email address or password');
                return redirect()->back();
            }
        }
        return view('teacher.teacher_login');
    }

    public function dashboard()
    {
        Session::put('page', '');
        // Auth::guard('teacher')->logout();
        // dd("hello");
        return view('teacher.dashboard');
    }

    public function teachers()
    {
        Session::put('page', 'teacher_details');
        $teacher = Teacher::where('id', Auth::guard('teacher')->user()->id)->first();
        return view('teacher.teachers.teachers')->with(compact('teacher'));
    }

   //add edit teacher
    public function EditTeacher(Request $request, $id = null)
    {
        if($id == "")
        {
            $title = "Add Teacher";
            $teacherData = new Teacher;
            $btn = "Submit";
            $message = "Teacher added successfully";
        }else
        {
            $title = "Edit Teacher";
            $teacherData = Teacher::find($id);
            $btn = "Update";
            $message = "Teacher Details updated successfully";
        }
        if($request->isMethod('post'))
        {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            
             $rules = [
                'first_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'last_name' => 'required|regex:/^[\pL\s\-]+$/u', 
                'department' => 'regex:/^[\pL\s\-]+$/u',
                'dob' => 'required|date',
                'joining_date' => 'required|date',
                'gender' => 'required',
                'salary' => 'required',
                'contact' => 'required',
                'address' => 'required',
                'attendance' => 'required|numeric',
                'email' => 'required|email',
                'teacher_image' => 'image', 
            ];
            $customMessages = [
                'first_name.required' => 'first name is required',
                'first_name.alpha' => 'Valid first name is required',
                'last_name.required' => 'last name is required',
                'last_name.alpha' => 'Valid last name is required',
                'department.alpha' => 'Valid department name is required',
                'dob.required' => 'dob is required',
                'joining_date.required' => 'joinig date is required',
                'gender.required' => 'gender is required',
                'salary.required' => 'salary is required',
                'contact.required' => 'contact is required',
                'address.required' => 'address is required',
                'attendance.required' => 'attendance is required',
                'attendance.numeric' => 'Valid attendance number is required',
                'email.required' => 'email is required',
                'email.email' => 'valid email is required',
                'teacher_image.image' => 'valid image is required',
            ];

            $this->validate($request, $rules, $customMessages);
           
            if(empty($data['admin_image']))
            {
                $image_name = '';
            }
           if(empty($data['password']))
           {
                $password = $data['old_password'];
           }else
           {
                $password = bcrypt($data['password']);
           }

            if($request->hasFile('teacher_image'))
            {
                $teacher_image = $request->file('teacher_image');

                if($teacher_image->isValid())
                {

                    $extension = $teacher_image->getClientOriginalExtension();
                    $image_name = rand(111, 9999).'.'.$extension;
                    $image_path = 'images/teacher_images/'.$image_name;
                    //save image to file
                    Image::make($teacher_image)->resize(500, 500)->save($image_path);
                }
                    else if(!empty($data['current_teacher_image']))
                {
                    $image_name = $data['current_teacher_image'];
                }else
                {
                    $image_name = "";
                }   
            }

            $teacherData->first_name = $data['first_name'];
            $teacherData->last_name = $data['last_name'];
            $teacherData->dob = $data['dob'];
            $teacherData->joining_date = $data['joining_date'];
            $teacherData->department = $data['department'];
            $teacherData->salary = $data['salary'];
            $teacherData->attendance = $data['attendance'];
            $teacherData->gender = $data['gender'];
            $teacherData->contact = $data['contact'];
            $teacherData->address = $data['address'];
            $teacherData->teacher_image = $image_name;
            $teacherData->email = $data['email'];
            $teacherData->password = $password;
            $teacherData->status = 1;
            $teacherData->save();

            Session::flash('success_message', $message);
            return redirect('teacher/teachers');
        }
 
        return view('teacher.teachers.edit_teachers')->with(compact('title', 'teacherData', 'btn'));


    }

    //check teahers current password
    public function chkCurrentTeacherPwd(Request $request)
    {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $teacher = Teacher::where('id', $data['teacher_id'])->first();
            // echo "<pre>"; print_r($teacher); die;
            if(Hash::check($data['teacher_current_pwd'], $teacher->password))
            {
                echo "true";
            } else
            {
                echo "false";
            }
    }

    public function updateTeacherPwd(Request $request, $id)
    {
        Session::put('page', 'teacher_password');
        if($request->isMethod('post'))
        {
            $teacher = Teacher::where('id', $id)->first();
            $data = $request->all();

            $rules = [
                'teacher_current_pwd' => 'required',
                'new_pwd' => 'required|min:8',
                'confirm_pwd' => 'required|min:8|same:new_pwd',
            ];

            $customMessages = [

                'teacher_current_pwd.required' => 'current password is required',
                'new_pwd.required' => 'new password is required',
                'new_pwd.min' => 'the new password must be at least 8 characters',
                'confirm_pwd.required' => 'confirm password is required',
                'confirm_pwd.min' => 'the new password must be at least 8 characters',
                'confirm_pwd.same' => 'new password and confirm password does not match',
            ];

            $this->validate($request, $rules, $customMessages);
            // echo "<pre>"; print_r($data); die;

            if(Hash::check($data['teacher_current_pwd'], $teacher->password))
            {
                if($data['new_pwd'] == $data['confirm_pwd'])
                {

                    Teacher::where('id', $id)->update(['password'=> bcrypt($data['new_pwd'])]);

                    Session::flash('success_message', 'Password updated successfully');
                    return redirect('teacher/dashboard');
                }else
                {
                    Session::flash('error_message', 'new password and confirm password does not match');
                    return redirect()->back();
                }
            }
            else
            {
                Session::flash('error_message', 'current password is incorrect');
                    return redirect()->back();
            }
        }
        $teacherDetails = Teacher::find($id);
        return view('teacher.teachers.update_teacher_pwd')->with(compact('teacherDetails'));
    }   
    
    public function viewDetails($id=null)
    {
        Session::put('page', 'teacher_details');
        $teacherData = Teacher::find($id);
        return view('teacher.teachers.view_teacher_details')->with(compact('teacherData'));
    }


        public function teacherSchedule(Request $request)
    {
        Session::put('page', 'teacher_schedules');
        $teacherDetails = Teacher::get();
        $teachersScheduleData = TeacherSchedule::with('subjects', 'classes', 'teachers')->get();
        $teachersScheduleData = json_decode(json_encode($teachersScheduleData), true);
        
       

        // echo "<pre>"; print_r($teachersScheduleData); die;
        return view('teacher.teacher_schedules.teacher_schedules')->with(compact('teachersScheduleData', 'teacherDetails'));
        
    }

    public function logout()
    {
        if(Auth::guard('teacher')->check())
        {
            Auth::guard('teacher')->logout();
            return redirect('/teacher/login');
        }
    }


}
