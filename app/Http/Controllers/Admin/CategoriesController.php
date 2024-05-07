<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Image;
use Session;

class CategoriesController extends Controller
{
    public function categories()
    {
        $cat_details = Category::get();
        // echo "<pre>"; print_r($cat_detail); die;
        // return response()->json($cat_details);
        return view('admin.categories.categories')->with(compact('cat_details'));
    }

    //update and add category details
    public function addEditCategory(Request $request, $id=null)
    {
        if($id == "")
        {
            $title = 'Add Category';
            $category = new Category;
            $btn = "submit";
            $message = 'books category added successfully';
        }else
        {
            // echo "<pre>"; print_r($id); die;
            $title = 'Edit Category';
            $category = Category::find($id);
            //echo "<pre>"; print_r($category); die;
            $btn = "Update";
            $message = 'books category updated successfully';
        }

        if($request->isMethod('post'))
        {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $rules = [
                'category_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'table_no' => 'required|numeric',
                'category_image' =>'image',
            ];

            $custom_messages = [
                'category_name.required' => 'Name is required',
                'category_name.alpha' => 'Valid name is required',
                'table_no.required' => 'Table number number is required',
                'table_no.numeric' => 'Valid number is required',
                'category_image.image' => 'valid image is required',
            ];

            $this->validate($request, $rules, $custom_messages);

            // echo "<pre>"; print_r($data); die;

            if($request->hasFile('category_image'))
            {
                $image_tmp = $request->file('category_image');
                if($image_tmp->isValid())
                {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $image_name = rand(111,9999).'.'.$extension;
                    $image_path = 'images/category_images/'.$image_name;
                    
                    Image::make($image_tmp)->save($image_path);
                }
            }
            else{
                $image_name = $data['current_category_image'];
            }
        
                $category->category_name = $data['category_name'];
                $category->table_no = $data['table_no'];
                $category->category_image = $image_name;
                $category->status = 1;
                $category->save();

        Session::flash('success_message', $message);
        return redirect('/admin/categories');

        }

        return view('admin.categories.add_edit_category')->with(compact('title', 'btn', 'category'));
    }

    //delete category
    public function deleteCategory($id)
    {
        Category::where('id', $id)->delete();
        Session::flash('success_message', 'category deleted successfully');
        return redirect()->back();

    }

    public function deleteCategoryImage($id)
    {
        $categoryImage = Category::select('category_image')->where('id', $id)->first();
        $categoryPath = 'images/category_images/';

        if(!empty($categoryPath.$categoryImage->category_image))
        {
            unlink($categoryPath.$categoryImage->category_image);
        }
         Category::where('id', $id)->update(['category_image'=>'']);

         Session::flash('success_message', 'category image deleted');
         return redirect()->back();

    }

    //update category status
    public function updateCategoryStatus(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
           if($data['status'] == "Active")
           {
                $status = 0;
           }
           else{
                $status = 1;
           }

           Category::where('id', $data['category_id'])->update(['status'=>$status ]);
           return response()->json(['status'=>$status, 'category_id'=>$data['category_id']]);


        }
    }
}
