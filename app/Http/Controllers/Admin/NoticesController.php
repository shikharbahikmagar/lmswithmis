<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NoticeCategory;
use Session;

class NoticesController extends Controller
{
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
}
