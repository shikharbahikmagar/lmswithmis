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
        $grades = Grade::where('status', 1)->get();
        $grades = json_decode(json_encode($grades), true);
        if($request->ajax())
        {
            $data = $request->all();
            if($data['class_id'] == "all")
            {
                  $subjects = Subject::with('grades')->get();
            $subjects = json_decode(json_encode($subjects), true);
            }else
            {
                $subjects = Subject::where('grade_id', $data['class_id'])->with('grades')->get();
                $subjects = json_decode(json_encode($subjects), true);

            }
            
            return view('admin.subjects.subjects')->with(compact('subjects', 'grades'));
            // echo "<pre>"; print_r($data); die();
        }else{
            Session::put('page', 'subjects');
            
            $subjects = Subject::with('grades')->get();
            $subjects = json_decode(json_encode($subjects), true);

            return view('admin.subjects.subjects')->with(compact('subjects', 'grades'));
        }

        // echo "<pre>"; print_r($grades); die();
    }

}
