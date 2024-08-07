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
use App\Models\Event;
use Auth;

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
        
        $events = Event::with('event_categories')->orderBy('id', 'desc')->take(3)->where('status', '1')->get();
        $events = json_decode(json_encode($events), true);

        $noticeCategories = NoticeCategory::all();
        $noticeCategories = json_decode(json_encode($noticeCategories), true);

        if($request->ajax())
        {
            $data = $request->all();
            if($data['notice_cat_id'] == "all")
            {
                $notices = Notice::all();
                $notices = json_decode(json_encode($notices), true);
            }else
            {
                $notices = Notice::where('notice_cat_id', $data['notice_cat_id'])->get();
                $notices = json_decode(json_encode($notices), true);
            }

            return view('front.eschool.notices.ajax_notice_board')->with(compact('noticeCategories', 'notices', 'banners', 'total_students', 'total_teachers', 'total_subjects', 'teachers', 'events'));
        //echo "<pre>"; print_r($notices); die;

        }
        $notices = Notice::all();
        $notices = json_decode(json_encode($notices), true);

    
       
        // echo "<pre>"; print_r($teacher_details); die;
        return view('front.eschool.app')->with(compact('noticeCategories', 'notices', 'banners', 'total_students', 'total_teachers', 'total_subjects', 'teachers', 'events'));
    }

    public function notice($url)
    {
        if($url == "")
        {
            Session::flash('errro_message', 'something went wrong');
        }else
        {
            $banners = Banner::orderBy('id', 'desc')->take(5)->where('status', '1')->get();
            $banners = json_decode(json_encode($banners), true);

            $latest_notices = Notice::orderBy('id', 'desc')->take(4)->get();

            $notice_details = Notice::with('notice_categories', 'added_by')->where('url', $url)->first();
            $notice_details = json_decode(json_encode($notice_details), true);
            //echo "<pre>"; print_r($notice_details); die;

            $noticeCategories = NoticeCategory::all();
            $noticeCategories = json_decode(json_encode($noticeCategories), true);

            
        }
        return view('front.eschool.notices.notice_details')->with(compact('notice_details', 'banners', 'latest_notices', 'noticeCategories'));
    }

    //user profile
    public function userProfile()
    {
        $banners = Banner::orderBy('id', 'desc')->take(5)->where('status', '1')->get();
        $banners = json_decode(json_encode($banners), true);

        if(Auth::guard('student')->check())
        {
            $current_student = Auth::guard('student')->user()->id;
            $student_details = Student::find($current_student);
            $student_details = json_decode(json_encode($student_details), true);
            //echo "<pre>"; print_r($student_details); die;
        }
       

        return view('front.eschool.user_profile.user_profile')->with(compact('banners', 'student_details'));
    }

    //about us
    public function aboutUs()
    {
        $banners = Banner::orderBy('id', 'desc')->take(5)->where('status', '1')->get();
        $banners = json_decode(json_encode($banners), true);

        return view('front.eschool.about_us')->with(compact('banners'));
    }
}
