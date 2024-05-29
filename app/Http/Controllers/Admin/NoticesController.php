<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NoticeCategory;
use App\Models\Notice;
use Session;
use Storage;
use Auth;


class NoticesController extends Controller
{
    public function notices(Request $request)
    {
        Session::put('page', 'notices');

        if($request->ajax())
        {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            if($data['notice_cat_id'] != "all")
            {
                $notices = Notice::with('added_by', 'notice_categories')->where('notice_cat_id', $data['notice_cat_id'])->get();
            }
            else
            {
                $notices = Notice::with('added_by', 'notice_categories')->get();
            }
            $notices = json_decode(json_encode($notices), true);
            // echo "<pre>"; print_r($notices); die;
            $noticeCatDetails = NoticeCategory::get();
            return view('admin.notices.ajax_notice_lists')->with(compact('notices', 'noticeCatDetails'));
        }
        $notices = Notice::with('added_by', 'notice_categories')->get();
        $notices = json_decode(json_encode($notices), true);
        $noticeCatDetails = NoticeCategory::get();
        //echo "<pre>"; print_r($notices); die;

        return view('admin.notices.notices')->with(compact('notices', 'noticeCatDetails'));
    }

    public function noticeCategories()
    {
        Session::put('page', 'notice_categories');
        $noticeCategories = NoticeCategory::get();
        return view('admin.notices.notice_categories')->with(compact('noticeCategories'));
    }

    public function addEditNoticeCategory(Request $request, $id = null)
    {
        if($id == "")
        {
            $title = "Add Notice Category";
            $noticeCategory = new NoticeCategory;
            $btn = "Submit";
            $message = "Notice Category Added Successfully";
        }
        else
        {
            $title = "Edit Notice Category";
            $noticeCategory = NoticeCategory::find($id);
            $btn = "Update";
            $message = "Notice Category Updated Successfully";
        }

        if($request->isMethod('post'))
        {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            $rules = [
                'category_name' => 'required|regex:/^[a-zA-Z\s]*$/',
            ];

            $customMessages = [
                'category_name.required' => 'Category name is required',
                'category_name.regex' => 'Enter valid category name',
            ];

            $this->validate($request, $rules, $customMessages);

            $noticeCategory->category_name = $data['category_name'];
            $noticeCategory->status = 1;
            $noticeCategory->save();

            Session::flash('success_message', $message);
            return redirect('admin/notice-categories');
        }
        return view('admin.notices.add_edit_notice_categories')->with(compact('title', 'noticeCategory', 'btn'));
    }

    //update notice category status
    public function updateNoticeCategoryStatus(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            
            if($data['status'] == "Active")
            {
                $status = 0;
            }
            else
            {  
                $status = 1;
            }

            NoticeCategory::where('id', $data['notice_category_id'])->update(['status'=> $status]);
            return response()->json(['status' => $status, 'notice_category_id' => $data['notice_category_id']]);

        }
    }

    public function deleteNoticeCategory($id)
    {
        NoticeCategory::where('id', $id)->delete();
        Session::flash('success_message', 'Notice Category Deleted Successfully');
        return redirect('admin/notice-categories');
    }

    public function addEditNotice(Request $request, $id = null)
    {
        Session::put('page', 'notices');
        if($id == "")
        {
            $title = "Add Notice";
            $notice = new Notice;
            $btn = "Submit";
            $message = "Notice Added Successfully";
        }
        else
        {
            $title = "Edit Notice";
            $notice = Notice::find($id);
            $btn = "Update";
            $message = "Notice Updated Successfully";
        }

        if($request->isMethod('post'))
        {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            // dd(Auth::guard('admin')->user()->id);
            $rules = [
                'notice_cat_id' => 'required',
                'title' => 'required',
            ];

            $customMessages = [
                'notice_cat_id.required' => 'please select category',
                'title.required' => 'please enter title',
            ];

            $this->validate($request, $rules, $customMessages);

            if(empty($data['description']) && empty($data['attachment']))
            {
                Session::flash('error_message', 'please attach file or enter description about notice');
                return redirect()->back();
            }

            if($request->hasFile('attachment'))
            {
                $file = $request->file('attachment');

                if($file->isValid())
                {
                    // echo "<pre>"; print_r($file); die;
                    $file_extension = $file->getClientOriginalExtension();
                    $file_name = rand(111,9999).'.'.$file_extension;
                    $file_path = 'files/notice_files/';

                    $file->move(public_path($file_path), $file_name);   
                }
            }else
            {
                $file_name = '';
            }

            $notice->admin_id = Auth::guard('admin')->user()->id;
            $notice->notice_cat_id = $data['notice_cat_id'];
            $notice->title = $data['title'];
            $notice->link = $data['link'];
            $notice->description = $data['description'];
            $notice->attachment = $file_name;
            $notice->status = 1;
            $notice->save();
            Session::flash('success_message', $message);
            return redirect('admin/notices');
        }
        $noticeCategories = NoticeCategory::get();

        return view('admin.notices.add_edit_notices')->with(compact('title', 'notice', 'btn', 'noticeCategories'));
    }
}
