<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Resend\Laravel\Facades\Resend;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BookRequest;
use Carbon\Carbon;
use Session;
use Auth;
use Illuminate\Support\Facades\Mail;

class BookRequestsController extends Controller
{
    //book requests
    public function bookRequest(Request $request, $id=null)
    {
        if($request->isMethod('post'))
        {
            $book_id = $id;
            $student_id = Auth::guard('student')->user()->id;
            $student_name = Auth::guard('student')->user()->first_name.' '.Auth::guard('student')->user()->middle_name.' '.Auth::guard('student')->user()->last_name;
            $student_email = Auth::guard('student')->user()->email;
            $book_name = Book::find($id)->title;

            $check_book_availability = Book::find($id)->count();
            if($check_book_availability > 0)
            {
                $book_request = new BookRequest;
                $book_request->student_id = $student_id;
                $book_request->book_id = $book_id;
                $book_request->request_date = Carbon::now();
                $book_request->return_date = Carbon::now()->addDays(7);
                $book_request->status = 'pending';  
                $book_request->save();

                Resend::emails()->send([

                    'from' => 'no-reply@shikharbahik.com.np',
                    'to' => $student_email,
                    'subject' => 'Book Requested',
                    'html' => '<h1>Hello, '.$student_name.'</h1> <br>'. 'Your book request has been successfully submitted. <br> You will be notified once the book is ready for collection. <br>'.'Book Name: '.$book_name.'<br> Thank you.'
        
                ]);

                smilify('success', 'Success, Book Requested Successfully');
                return redirect('/library');
            }else
            {
                notify()->error('book not found ⚡️');
                return redirect()->back();
            }





            // echo "<pre>"; print_r($id); die;
        }
        

    }
}
