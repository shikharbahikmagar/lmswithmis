<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use Auth;
use Session;
use Validator;
use Image;
use Hash;


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
                Session::flash('error_message', 'Account not found with this email');
                return redirect()->back();
            }

            if(Auth::guard('student')->attempt(['email'=>$data['email'], 'password'=>$data['password']]))
            {
                return redirect('/');
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
        smilify('success', 'You have successfully logged out');
        return redirect('/');
    }

    //update details by student
    public function updateDetails(Request $request, $id=null)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            if($data['address'] == "")
            {
                smilify('error', 'Address is Required');

                return redirect()->back();
                
            }else if($data['parent_contact'] == "")
            {
                smilify('error', 'parent Contact is Required');
                return redirect()->back();

            }else if(!is_numeric($data['parent_contact']))
            {
                smilify('error', 'Parent Contact must be a number');
                return redirect()->back();
            }else
            {
                if($request->hasFile('student_image'))
                {
                    $image_tmp = $request->file('student_image');

                    if($image_tmp->isValid())
                    {

                        $extension = $image_tmp->getClientOriginalExtension();
                        $image_name = rand(111, 9999).'.'.$extension;
                        $image_path = 'images/student_images/'.$image_name;

                        //save image to file
                        Image::make($image_tmp)->save($image_path);
                    }
                        else if(!empty($data['student_current_image']))
                    {
                        $image_name = $data['student_current_image'];
                    }else
                    {
                        $image_name = "";
                    }   


                Student::where('id', $id)->update(['address' => $data['address'], 'parent_contact' => $data['parent_contact'], 'student_image' => $image_name]);
                smilify('success', 'Details updated successfully');

                return redirect()->back();
                }

                Student::where('id', $id)->update(['address' => $data['address'], 'parent_contact' => $data['parent_contact']]);
                smilify('success', 'Details updated successfully');
                
                return redirect()->back();
            }
        }
    }

    //check current password
    public function checkCurrentPwd(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            if(Hash::check($data['current_password'], Auth::guard('student')->user()->password))
            {
                echo "true";
            }else
            {
                echo "false";
            }
        }
    }

    //update password
    public function updatePassword(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            if(Hash::check($data['current_password'], Auth::guard('student')->user()->password))
            {
                if($data['new_password'] == $data['confirm_password'])
                {
                    Student::where('id', Auth::guard('student')->user()->id)->update(['password' => bcrypt($data['confirm_password'])]);
                    notify()->success('Password updated successfully');
                    return redirect()->back();
                }else
                {
                    notify()->error('New password and confirm password do not match');
                    return redirect()->back();
                }
            }else
            {
                notify()->error('Current password is incorrect');
                return redirect()->back();
            }
        }
    }

    //student id card
    public function studentIdCard()
    {
        $student_details = Student::where('id', Auth::guard('student')->user()->id)->first();
        $student_details = json_decode(json_encode($student_details), true);

        return view('front.eschool.user_profile.user_id_card')->with(compact('student_details'));
    }

    //download student id card
    public function downloadIdCard()
    {
        $student_details = Student::where('id', Auth::guard('student')->user()->id)->first();
        $student_details = json_decode(json_encode($student_details), true);
        //echo "<pre>"; print_r($student_details); die;

        $pdf = PDF::loadView('front.eschool.user_profile.user_id_card', $student_details);
        return $pdf->download('MyIdCard.pdf');
    }
}
