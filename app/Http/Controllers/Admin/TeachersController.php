<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Session;
use Image;
use Hash;
class TeachersController extends Controller
{
    public function teachers()
    {
        Session::put('page', 'teachers_details');
        $teachers = Teacher::all();
        return view('admin.teachers.teachers')->with(compact('teachers'));
    }

    //add edit teacher
    public function addEditTeacher(Request $request, $id = null)
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
                $image_tmp = $request->file('teacher_image');

                if($image_tmp->isValid())
                {

                    $extension = $image_tmp->getClientOriginalExtension();
                    $image_name = rand(111, 9999).'.'.$extension;
                    $image_path = 'images/teacher_images/'.$image_name;

                    //save image to file
                    Image::make($image_tmp)->save($image_path);
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
            return redirect('admin/teachers');
        }

        return view('admin.teachers.add_edit_teachers')->with(compact('title', 'teacherData', 'btn', 'message'));


    }
    //update teacher status
    public function updateTeacherStatus(Request $request)
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

            Teacher::where('id', $data['teacher_id'])->update(['status' => $status]);
            return response()->json(['status' => $status, 'teacher_id' => $data['teacher_id']]);
        }
    }
    //delete teacher
    public function deleteTeacher($id)
    {
        Teacher::where('id', $id)->delete();
        Session::flash('success_message', 'Teacher deleted successfully');
        return redirect()->back();
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

    //update teacher password
    public function updateTeacherPwd(Request $request, $id)
    {
        if($request->isMethod('post'))
        {
            $teacher = Teacher::where('id', $id)->first();
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            if(Hash::check($data['teacher_current_pwd'], $teacher->password))
            {
                if($data['new_pwd'] == $data['confirm_pwd'])
                {
                    Teacher::where('id', $id)->update(['password'=> bcrypt($data['new_pwd'])]);
                    Session::flash('success_message', 'Password updated successfully');
                    return redirect('admin/teachers');
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
        return view('admin.teachers.update_teacher_pwd')->with(compact('teacherDetails'));
    }    

    

}
