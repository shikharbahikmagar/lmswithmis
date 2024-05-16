<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use Session;

class SubjectsController extends Controller
{
    public function subjects(Request $request, $id)
    {
        Session::put('page', '');
        $subjects = Subject::with('grades')->where('grade_id', $id)->get();
        $subjects = json_decode(json_encode($subjects), true);
        // echo "<pre>"; print_r($subjects); die();


        return view('admin.subjects.subjects')->with(compact('subjects'));
    }
}
