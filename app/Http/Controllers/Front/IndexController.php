<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\NoticeCategory;

class IndexController extends Controller
{
    public function index()
    {
        $noticeCategories = NoticeCategory::all();
        $notices = Notice::all();
        $notices = json_decode(json_encode($notices), true);
        $noticeCategories = json_decode(json_encode($noticeCategories), true);
        // echo "<pre>"; print_r($noticeCategories); die;
        return view('front.eschool.app')->with(compact('noticeCategories', 'notices'));
    }
}
