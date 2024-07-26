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
                smilify('success', 'Success, Book Requested Successfully');
                return redirect('/library');
            }else
            {
                notify()->error('book not found ⚡️');
                return redirect()->back();
            }


            $book_request = new BookRequest;
            $book_request->book_id = $book_id;
            $book_request->student_id = $student_id;
            $book_request->status = 'pending';  
            

            // echo "<pre>"; print_r($id); die;
        }
        

    }
}
