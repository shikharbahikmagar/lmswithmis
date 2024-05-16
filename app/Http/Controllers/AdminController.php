<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use Session;
use Image;
use App\Models\Admin;

class AdminController extends Controller
{
    public function dashboard()
    {
        Session::put('page', '');
        return view('admin.dashboard');
    }

    public function login(request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            
            $rules = [
            'email' => 'email|required|max:250',
            'password' => 'required',
    
           ];
           $customMessages = [
            'email.required' => 'Email is required',
            'email.email' => 'Enter valid email',
            'password.required' => 'Password is required', 
           ];
    
           $this->validate($request, $rules, $customMessages );
            
           if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password']]))
           {
                return redirect('admin/dashboard');
           }else{

                Session::flash('error_message','Invalid Email or Password');
                return redirect()->back();
           }
        }

        return view('admin.admin_login');
        // dd(Hash::make('123456'));
        // echo "<pre>"; print_r($getCategories); die;
    }

    public function logout()
    {
        if(Auth::guard('admin')->check())
        {
            Auth::guard('admin')->logout();
            return redirect('/admin/login');
        }
    }

    public function updateAdminDetails(Request $request)
    {
        Session::put('page', 'update_details');
        if($request->isMethod('post'))
        {
            $data = $request->all();
            // echo "<pre>"; print_r($adminData); die;
             $rules = [
                'admin_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'admin_mobile' => 'required|numeric', 
                'admin_image' => 'image', 
            ];
            $customMessages = [
                'admin_name.required' => 'Name is required',
                'admin_name.alpha' => 'Valid name is required',
                'admin_mobile.required' => 'Mobile number is required',
                'admin_mobile.numeric' => 'Valid number is required',
                'admin_image.image' => 'valid image is required',
            ];

            $this->validate($request, $rules, $customMessages);

            if(empty($data['admin_image']))
            {
                $image_name = '';
            }

            if($request->hasFile('admin_image'))
            {
                $image_tmp = $request->file('admin_image');

                if($image_tmp->isValid())
                {

                    $extension = $image_tmp->getClientOriginalExtension();
                    $image_name = rand(111, 9999).'.'.$extension;
                    $image_path = 'images/admin_images/admin_photos/'.$image_name;

                    //save image to file
                    Image::make($image_tmp)->save($image_path);
                }
                    else if(!empty($data['current_admin_image']))
                {
                    $image_name = $data['current_admin_image'];
                }else
                {
                    $image_name = "";
                }   

            }
                Admin::where('email', Auth::guard('admin')->user()->email)->update(
                [
                    'name'=>$data['admin_name'], 
                    'mobile'=>$data['admin_mobile'],
                    'image'=>$image_name,
                ]);

                Session::flash('success_message', 'Admin Details updated successfully');
                return redirect()->back();

           
        }


        $adminDetails = Admin::where('email', Auth::guard('admin')->user()->email)->first();
        // dd($adminDetails);
        return view('admin.update_admin_details')->with(compact('adminDetails'));
    }

    public function checkCurrentPwd(Request $request)
    {
        $data = $request->all();
        // echo "<pre>"; print_r($data); die;
        if(Hash::check($data['current_pwd'], Auth::guard('admin')->user()->password))
        {
            echo "true";
        }
        else
        {
            echo "false";
        }
        
    }

    public function updateAdminPwd(Request $request)
    {
        Session::put('page', 'update_password');
         if($request->isMethod('post'))
        {
            $adminData = $request->all();
            
            if(Hash::check($adminData['current_pwd'], Auth::guard('admin')->user()->password))
            {
                if($adminData['new_pwd'] == $adminData['confirm_pwd'])
                {
                    Admin::where('id', Auth::guard('admin')->user()->id)->update(['password'=>bcrypt($adminData['new_pwd'])]);
                    Session::flash('success_message', 'Password Updated successfully');
                    return redirect()->back();
                }else{
                    Session::flash('error_message', 'new password and confirm password does not match');
                    return redirect()->back();
                }
            }else{
                Session::flash('error_message', 'Incorrect current password');
                return redirect()->back();
            }
            echo "<pre>"; print_r($adminData); die;
        }

        $adminDetails = Admin::where('email', Auth::guard('admin')->user()->email)->first();
        return view('admin.update_admin_password')->with(compact('adminDetails'));        
    }

}
