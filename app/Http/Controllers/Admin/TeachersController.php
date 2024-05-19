<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeachersController extends Controller
{
    public function teachers()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.teachers')->with(compact('teachers'));
    }
}
