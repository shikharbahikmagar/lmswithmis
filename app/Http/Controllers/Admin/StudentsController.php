<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Grade;
use Image;
use Session;
use Hash;

class StudentsController extends Controller
{
    public function students(Request $request)
    {
        Session::put('page', 'students');
        $grades = Grade::get();
        if($request->ajax())
        {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die();
            $grade_id = $data['class_id'];
            //  Session::put('grade_id', $grade_id);
            if($data['class_id'] == "all")
            {
                $students = Student::with('grades')->get();
                $students = json_decode(json_encode($students), true);
            }
            else
            {
                $students = Student::with('grades')->where('grade_id', $grade_id)->get();
                $students = json_decode(json_encode($students), true);
            }
            return view('admin.students.ajax_students_list')->with(compact('students', 'grade_id', 'grades'));
        }else
        {
            $students = Student::with('grades')->get();
            $students = json_decode(json_encode($students), true);
           

            return view('admin.students.students')->with(compact('students', 'grades'));
        }
        // echo "<pre>"; print_r($students); die;
        
    }

    public function addStudent(Request $request, $id = null)
    {
        Session::put('page', 'students');
        $grade_id = $id;
        if($request->isMethod('post'))
        {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

             $rules = [
                'first_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'last_name' => 'required|regex:/^[\pL\s\-]+$/u', 
                'admission_date' => 'required|date',
                'dob' => 'required|date',
                'gender' => 'required',
                'parent_name' => 'required',
                'parent_contact' => 'required',
                'address' => 'required',
                'roll_no' => 'required|numeric',
                'email' => 'required|email',
                'password' => 'required|min:8',
                'student_image' => 'image', 
            ];
            $customMessages = [
                'first_name.required' => 'first name is required',
                'first_name.alpha' => 'Valid first name is required',
                'last_name.required' => 'last name is required',
                'last_name.alpha' => 'Valid last name is required',
                'admission_date.required' => 'admission date is required',
                'dob.required' => 'dob is required',
                'gender.required' => 'gender is required',
                'parent_name.required' => 'parent name is required',
                'parent_contact.required' => 'parent contact is required',
                'address.required' => 'address is required',
                'roll_no.required' => 'roll number is required',
                'roll.numeric' => 'Valid roll number is required',
                'email.required' => 'email is required',
                'email.email' => 'valid email is required',
                'password.required' => 'password is required',
                'password.min' => 'Password is required with a minimum of 8 characters',
                'student_image.image' => 'valid image is required',
            ];

            $this->validate($request, $rules, $customMessages);

            $count_email = Student::where('email', $data['email'])->count();
            if($count_email > 0){
                Session::flash('error_message', 'Email is already used, please enter unique email address');
                return redirect()->back();
            }

            if(!empty($data['middle_name']))
            {
                $middle_name = $data['middle_name'];
            }else
            {
                $middle_name = '';
            }

            if($request->hasFile('student_image'))
            {
                $student_image = $request->file('student_image');

                if($student_image->isValid())
                {
                    $extension = $student_image->getClientOriginalExtension();
                    $image_name = rand(111,99999).'.'.$extension;
                    $student_image_path = 'images/student_images/'.$image_name;

                    Image::make($student_image)->save($student_image_path);
                }
            }
            else{
                $image_name = '';
            }

            $student = new Student;
            $student->first_name = $data['first_name'];
            $student->middle_name = $middle_name;
            $student->last_name = $data['last_name'];
            $student->admission_date = $data['admission_date'];
            $student->dob = $data['dob'];
            $student->gender = $data['gender'];
            $student->parent_name = $data['parent_name'];
            $student->parent_contact = $data['parent_contact'];
            $student->address = $data['address'];
            $student->roll_no = $data['roll_no'];
            $student->email = $data['email'];
            $student->grade_id = $grade_id;
            $student->password = bcrypt($data['password']);
            $student->student_image = $image_name;
            $student->status = 1;
            $student->save();

            Session::flash('success_message', 'Student added successfully');
            return redirect('admin/students');
        }

        return view('admin.students.add_students')->with(compact('grade_id'));
    }

    public function editStudent(Request $request, $id = null)
    {
        Session::put('page', 'students');
         if($request->isMethod('post'))
        {
            $data = $request->all();
                // echo "<pre>"; print_r($data); die;

             $rules = [
                'first_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'last_name' => 'required|regex:/^[\pL\s\-]+$/u', 
                'admission_date' => 'required|date',
                'dob' => 'required|date',
                'gender' => 'required',
                'parent_name' => 'required',
                'parent_contact' => 'required',
                'address' => 'required',
                'grade_id' => 'required',
                'roll_no' => 'required|numeric',
                'student_image' => 'image', 
            ];
            $customMessages = [
                'first_name.required' => 'first name is required',
                'first_name.alpha' => 'Valid first name is required',
                'last_name.required' => 'last name is required',
                'last_name.alpha' => 'Valid last name is required',
                'admission_date.required' => 'admission date is required',
                'dob.required' => 'dob is required',
                'gender.required' => 'gender is required',
                'parent_name.required' => 'parent name is required',
                'parent_contact.required' => 'parent contact is required',
                'address.required' => 'address is required',
                'roll_no.required' => 'roll number is required',
                'roll.numeric' => 'Valid roll number is required',
                'grade_id.required' => 'Select Class is required',
                'student_image.image' => 'valid image is required',
            ];

            $this->validate($request, $rules, $customMessages);

            if(!empty($data['middle_name']))
            {
                $middle_name = $data['middle_name'];
            }else
            {
                $middle_name = '';
            }

            if($request->hasFile('student_image'))
            {
                $student_image = $request->file('student_image');

                if($student_image->isValid())
                {
                    $extension = $student_image->getClientOriginalExtension();
                    $image_name = rand(111,99999).'.'.$extension;
                    $student_image_path = 'images/student_images/'.$image_name;

                    Image::make($student_image)->save($student_image_path);
                }
            }
            else{
                $image_name = '';
            }

            $student = Student::find($id);
            $student->first_name = $data['first_name'];
            $student->middle_name = $middle_name;
            $student->last_name = $data['last_name'];
            $student->admission_date = $data['admission_date'];
            $student->dob = $data['dob'];
            $student->gender = $data['gender'];
            $student->parent_name = $data['parent_name'];
            $student->parent_contact = $data['parent_contact'];
            $student->address = $data['address'];
            $student->roll_no = $data['roll_no'];
            $student->grade_id = $data['grade_id'];
            $student->email = $data['email'];
            $student->student_image = $image_name;
            $student->status = 1;
            $student->save();

            Session::flash('success_message', 'Student updated successfully');
            return redirect('admin/students');
        }
        $grades = Grade::get();
        $students = Student::find($id);
        $students = json_decode(json_encode($students), true);
        // echo "<pre>"; print_r($students); die;
        return view('admin.students.edit_students')->with(compact('students', 'grades'));
    }

    //check student current password is correct or not
    public function chkStudentCurrentPwd(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $student = Student::where('id', $data['student_id'])->first();
            $student = json_decode(json_encode($student), true);
            // echo "<pre>"; print_r($student); die;
            if(Hash::check($data['student_current_pwd'], $student['password']))
            {
                echo "true";
            }
            else{
                echo "false";
            }
        }
    }

    //updating student current password
    public function updateStudentPwd(Request $request, $id = null)
    {
        Session::put('page', 'students');
        $studentDetails = Student::find($id);
        $studentDetails = json_decode(json_encode($studentDetails), true);
        $studentWithGrade = Student::with('grades')->where('grade_id', $studentDetails['grade_id'])->first();
        $studentWithGrade = json_decode(json_encode($studentWithGrade), true);

        if($request->isMethod('post'))
        {
            $data = $request->all();

            $rules = [
                'student_current_pwd' => 'required',
                'new_pwd' => 'required|min:8',
                'confirm_pwd' => 'required|min:8',
            ];

            $customMessages = [
                'student_current_pwd.required' => 'please enter current password',
                'new_pwd.required' => 'please enter new password',
                'new_pwd.min' => 'new password is required with a minimum of 8 characters',
                'confirm_pwd.required' => 'please enter confirm password',
                'confirm_pwd.min' => 'confirm password is required with a minimum of 8 characters',
            ];

            $this->validate($request, $rules, $customMessages);
            //echo "<pre>"; print_r($data); die;
            if(Hash::check($data['student_current_pwd'], $studentDetails['password']))
            {
                if($data['new_pwd'] == $data['confirm_pwd'])
                {
                    $new_password = bcrypt($data['confirm_pwd']);
                    Student::where('id', $id)->update(['password'=> $new_password]);

                    Session::flash('success_message', 'student password updated successfully');
                    return redirect('admin/students');
                }else
                {
                    Session::flash('error_message', 'new password and confirm password does not match');
                    return redirect()->back();
                }
            }
            else
            {
                Session::flash('error_message', 'current password does not match');
                return redirect()->back();
            }
        }

      


        //echo "<pre>"; print_r($studentWithGrade); die;
        return view('admin.students.update_students_password')->with(compact('studentDetails', 'studentWithGrade'));
    }

    public function updateStudentStatus(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            if($data['status'] == "Active")
            {
                $status = 0;
            }else
            {
                $status = 1;
            }
            Student::where('id', $data['student_id'])->update(['status' => $status]);

            return response()->json(['status'=>$status,'student_id'=>$data['student_id']]);
        }
    }

    //delete student
    public function deleteStudent(Request $request, $id=null)
    {
        Student::where('id', $id)->delete();
        Session::flash('success_message', 'Student deleted successfully');
        return redirect()->back();
    }
}
