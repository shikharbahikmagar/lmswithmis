<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Image;
use Session;

class BannersController extends Controller
{
    public function banners()
    {
       $banners =  Banner::all();
       $banners = json_decode(json_encode($banners), true);
       return view('admin.banners.banners')->with(compact('banners'));
    }

    public function addEditBanners(Request $request, $id=null)
    {
        if($id == "")
        {
            $title = "Add Banner";
            $btn = "Submit";
            $banner = New Banner;
            $message = "banner added successfully";
        }
        else
        {
            $title = "Edit Banner";
            $btn = "Update";
            $banner = Banner::find($id);
            $message = "banner updated successfully";
        }

        if(empty($data['title']))
        {
            $title = '';
        }else
        {
            $title = $data['title'];
        }

        if(empty($data['description']))
        {
            $description = '';
        }
        else
        {
            $description = $data['description'];
        }

        if($request->isMethod('post'))
        {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            //$banner = new Banner;

            if($request->hasFile('banner_image'))
            {
                $banner_image = $request->file('banner_image');

                if($banner_image->isValid())
                {
                    $extension = $banner_image->getClientOriginalExtension();
                    $filename = "banner".rand(111,99999).'.'.$extension;
                    $image_path = 'front/assets/banner_images/'.$filename;
                    
                    Image::make($banner_image)->save($image_path);
                }
            }else
            {
                $filename = $data['current_banner_image'];
            }

            $banner->title = $title;
            $banner->description = $description;
            $banner->banner_image = $filename;
            $banner->status = 1;
            $banner->save();

            Session::flash('success_message', $message);
            return redirect('admin/banners');
        }

        return view('admin.banners.add_edit_banners')->with(compact('banner', 'title', 'btn'));
    }
}
