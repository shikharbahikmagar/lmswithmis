<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\NoticeCategory;
use App\Models\Banner;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Subject;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $banners = Banner::orderBy('id', 'desc')->take(5)->where('status', '1')->get();
        $banners = json_decode(json_encode($banners), true);

        $total_students = Student::get()->count();
        $total_teachers = Teacher::get()->count();
        $total_subjects = Subject::get()->count();

        $teachers = Teacher::get();
        $teachers = json_decode(json_encode($teachers), true);
        

        $noticeCategories = NoticeCategory::all();
        $noticeCategories = json_decode(json_encode($noticeCategories), true);

        if($request->ajax())
        {
            $data = $request->all();
            $notices = Notice::where('notice_cat_id', $data['notice_cat_id'])->get();
            $notices = json_decode(json_encode($notices), true);
            return view('front.eschool.ajax_notice_board')->with(compact('noticeCategories', 'notices', 'banners', 'total_students', 'total_teachers', 'total_subjects', 'teachers'));
        //echo "<pre>"; print_r($notices); die;

        }
        $notices = Notice::all();
        $notices = json_decode(json_encode($notices), true);

    
       
        // echo "<pre>"; print_r($teacher_details); die;
        return view('front.eschool.app')->with(compact('noticeCategories', 'notices', 'banners', 'total_students', 'total_teachers', 'total_subjects', 'teachers'));
    }
}
