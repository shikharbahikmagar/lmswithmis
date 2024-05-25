<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Grade;
use Session;

class SubjectsController extends Controller
{
    public function subjects(Request $request)
    {
        
        Session::put('page', 'subjects');
        $grades = Grade::where('status', 1)->get();
        $grades = json_decode(json_encode($grades), true);
        if($request->ajax())
        {

            $data = $request->all();
            // echo "<pre>"; print_r($data); die();
            $grade_id = $data['class_id'];
            //  Session::put('grade_id', $grade_id);
            if($data['class_id'] == "all")
            {
                
                $subjects = Subject::with('grades')->get();
                $subjects = json_decode(json_encode($subjects), true);
            }else
            {
               
                $subjects = Subject::where('grade_id', $data['class_id'])->with('grades')->get();
                $subjects = json_decode(json_encode($subjects), true);

            }
            
            return view('admin.subjects.ajax_add_subject')->with(compact('subjects', 'grades', 'grade_id'));
            // echo "<pre>"; print_r($data); die();
        }else{
            
                $subjects = Subject::with('grades')->get();
                $subjects = json_decode(json_encode($subjects), true);

            return view('admin.subjects.subjects')->with(compact('subjects', 'grades'));
        }

        // echo "<pre>"; print_r($grades); die();
    }

    //add subjects
    public function addSubject(Request $request, $id = null)
    {
        $grade_id = $id;
        Session::put('page', 'subjects');   
        if($request->isMethod('post'))
        {

            $data = $request->all();
            

            foreach($data['subject_name'] as $key=>$value)
            {
                if(!empty($value))
                {
                    // $grade_id = Session::get('grade_id');
                    // Session::put('grade_id', '');
                    if(empty($data['subject_code'][$key]) || empty($data['credit_hour'][$key]))
                    {
                        Session::flash('error_message', 'Enter at least one subject');
                        return redirect()->back();
                    }
                  if(!preg_match('/^[\pL\pM]+$/u', $value))
                  {
                        Session::flash('error_message', 'Enter valid subject name');
                        return redirect()->back();
                  }
                    if(!is_numeric($data['credit_hour'][$key]))
                    {
                        Session::flash('error_message', 'Credit hour must be numeric');
                        return redirect()->back();
                    }
                    // $data = json_decode(json_encode($data), true);
                    //dd($data);
                    $subject = new Subject;
                    $subject->grade_id = $grade_id;
                    $subject->subject_name = $value;
                    $subject->subject_code = $data['subject_code'][$key];
                    $subject->credit_hours = $data['credit_hour'][$key];
                    $subject->status = 1;
                    $subject->save();
                    }
                // echo "<pre>"; print_r($value); die;
                
                // echo "<pre>"; print_r($grade_id); die;
            }
            Session::flash('success_message', 'subjects added successfully');
            return redirect('admin/subjects');
            
        }

        return view('admin.subjects.add_subjects')->with(compact('grade_id'));
    }

    //edit subjects
    public function editSubject(Request $request, $id)
    {
        Session::put('page', 'subjects');
        if($request->isMethod('post'))
        {
            $data = $request->all();

             $rules = [
                'subject_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'subject_code' => 'required',
                'credit_hour' => 'required|numeric',
            ];

            $custom_messages = [
                'subject_name.required' => 'subject name is required',
                'subject_name.alpha' => 'Valid subject name is required',
                'subject_code.required' => 'Subject code is required',
                'credit_hour.required' => 'credit hour is required',
                'credit_hour.numeric' => 'valid credit hour is required',
            ];

            $this->validate($request, $rules, $custom_messages);
            // echo "<pre>"; print_r($data); die();
            $subject = Subject::find($id);
            $subject->subject_name = $data['subject_name'];
            $subject->subject_code = $data['subject_code'];
            $subject->credit_hours = $data['credit_hour'];
            $subject->save();
            Session::flash('success_message', 'Subject updated successfully');
            return redirect('admin/subjects');
        }
        $subjectDetails = Subject::find($id);
        return view('admin.subjects.edit_subject')->with(compact('subjectDetails'));
    }

    //delete subjects
    public function deleteSubject($id)
    {
        Subject::where('id', $id)->delete();
        Session::flash('success_message', 'Subject deleted successfully');
        return redirect()->back();
    }

    //update subject staus
    public function updateSubjectStatus(Request $request)
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
            Subject::where('id', $data['subject_id'])->update(['status'=>$status]);

            return response()->json(['status'=>$status,'subject_id'=>$data['subject_id']]);
        }

    }

}
