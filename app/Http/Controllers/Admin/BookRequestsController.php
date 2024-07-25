<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Session;

class BookRequestsController extends Controller
{
    //book requests
    public function bookRequest(Request $request, $id=null)
    {
        if($request->isMethod('post'))
        {
            $book_id = $id;
            $student_id = 
            $check_book_availability = Book::find($id);
            if($check_book_availability)
            {
                Session::flash('toast_message', "book requested");
                return redirect()->back();
            }else
            {
                Session::flash('toast_message', "book not found");
            }


            $book_request = new BookRequest;


            // echo "<pre>"; print_r($id); die;
        }
        

    }
}
