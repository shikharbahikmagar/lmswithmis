<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Admin;
use App\Models\Category;
use Auth;
use Image;
use Session;

class BooksController extends Controller
{


    public function books()
    {
        $books = Book::with(['categories', 'added_by_details'])->get();
        $books = json_decode(json_encode($books), true);
        // echo "<pre>"; print_r($books); die;
        return view('admin.books.books')->with(compact('books'));
    }

    //add edit book
    public function addEditBooks(Request $request, $id = null)
    {
        if($id=="")
        {
            $title = "Add Books";
            $booksData = New Book;
            $message ="book added successfully";
            $btn = "Submit";
        }else
        {
            $title = "Edit Book";
            $btn = "Update";
            $booksData = Book::find($id);
            $message = "Book Edited successfully";
        }
        if($request->isMethod('post'))
        {
            $data = $request->all();
            $data = json_decode(json_encode($data), true);
            //dd($data);

            $rules = [
                'book_title' => 'required|regex:/^[\pL\s\-]+$/u',
                'author' => 'required|regex:/^[\pL\s\-]+$/u',
                'isbn_no' => 'required',
                'description' => 'required',
                'category_image' =>'image',
            ];

            $custom_messages = [
                'book_title.required' => 'Book title is required',
                'book_title.alpha' => 'Valid Book title is required',
                'author.required' => 'auhor name is required',
                'author.alpha' => 'valid author name is required',
                'isbn_no.required' => 'Isbn number is required',
                'category_image.image' => 'valid image is required',
            ];

            $this->validate($request, $rules, $custom_messages);

            if($request->hasFile('book_image'))
            {
                $book_image = $request->file('book_image');

                if($book_image->isValid())
                {
                    $extension = $book_image->getClientOriginalExtension();
                    $image_name = rand(111, 9999).'.'.$extension;
                    $image_path = 'images/book_images/'.$image_name;
                    
                    Image::make($book_image)->save($image_path);
                }
            }
            else{
                $image_name = '';
            }

            $booksData->title = $data['book_title'];
            $booksData->author = $data['author'];
            $booksData->isbn_no = $data['isbn_no'];
            $booksData->category_id = $data['category_id'];
            $booksData->admin_id = Auth::guard('admin')->user()->id;
            $booksData->book_image = $image_name;
            $booksData->description = $data['description'];
            $booksData->status = 1;

            $booksData->save();

            Session::flash('success_message', $message);
            return redirect('/admin/books');


        }

        $admins = Admin::get();
        //dd($booksData);
        $categories = Category::where('status', 1)->get();
        return view('admin.books.add_edit_books')->with(compact('admins','btn', 'categories','booksData', 'title'));
    }

    //update book status
    public function updateBookStatus(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            
            if($data['status'] == "Active")
            {
                $status = 0;
            }else
            {
                $status = 1;
            }
            Book::where('id', $data['book_id'])->update(['status'=>$status]);

            return response()->json(['status'=>$status, 'book_id'=>$data['book_id']]);

        }
    }

    //delete book
    public function deleteBook($id)
    {
        Book::where('id', $id)->delete();
        Session::flash('success_message', 'book deleted successfully');
        return redirect()->back();
    }
}
