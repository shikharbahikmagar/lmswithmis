<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grade;
use Session;

class GradesController extends Controller
{
    public function grades()
    {   
        Session::put('page', 'grades');

        $grades = Grade::get();
        return view('admin.grades.grades')->with(compact('grades'));
    }

    public function addEditGrades(Request $request, $id=null)
    {
         Session::put('page', 'grades');
        if($id == "")
        {
            $title = "Add Grade";
            $gradesData = new Grade;
            $btn = "Submit";
            $message = "grade added successfully";
        }else
        {
            $title = "Edit Grade";
            $gradesData = Grade::find($id);
            $btn = "Update";
            $message = "grade updated successfully";
        }

        if($request->isMethod('post'))
        {
            $data = $request->all();
            //dd($data);

            
            $rules = [
                'grade_name' => 'required|numeric',
                'room_num' => 'required',
                'room_num' => 'required',
                'capacity' => 'required|numeric',
                'enrolled_students' =>'required|numeric',
            ];

            $custom_messages = [
                'grade_name.required' => 'Grade Name is required',
                'grade_name.numeric' => 'Valid Grade Name is required',
                'room_num.required' => 'Room Number is required',
                'capacity.required' => 'Capacity is required',
                'capacity.numeric' => 'Valid Capacity number is required',
                'enrolled_students.required' => 'Enrolled Students is required',
                'enrolled_students.numeric' => 'Valid Enrolled Students Number is required',
            ];

            $this->validate($request, $rules, $custom_messages);


            $gradesData->grade_name = $data['grade_name'];
            $gradesData->room_num = $data['room_num'];
            $gradesData->capacity = $data['capacity'];
            $gradesData->enrolled_students = $data['enrolled_students'];
            $gradesData->status = 1;
            $gradesData->save();
            Session::flash('success_message', $message);
            return redirect('admin/grades');
        }


        return view('admin.grades.add_edit_grade')->with(compact('gradesData', 'btn', 'title'));
    }

    public function updateGradeStatus(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            // dd($data);
            if($data['status'] == 'Active')
            {
                $status = 0;
            }else
            {
                $status = 1;
            }

            Grade::where('id', $data['grade_id'])->update(['status' => $status]);

            return response()->json(['status' => $status, 'grade_id' => $data['grade_id']]);
        }
    }

    //delete grade
    public function deleteGrade($id)
    {
        if($id == "")
        {
            Session::flash('error_message', "grade already deleted");
            return redirect()->back();
        }else
        {
            Grade::where('id', $id)->delete();

            Session::flash('success_message', "grade deleted");
            return redirect()->back();
        }
    }
}
