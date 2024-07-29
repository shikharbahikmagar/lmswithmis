<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Resend\Laravel\Facades\Resend;
use App\Mail\BookReqStatus;
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


    //update book request status
    public function updateBookRequest(Request $request, $id=null)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();

            //echo "<pre>"; print_r($data); die;
            $book_request_details = BookRequest::where('id', $id)->with('student_details', 'book_details')->first();
            $book_request_details = json_decode(json_encode($book_request_details), true);
            //echo "<pre>"; print_r($book_request_details); die;


            $student_name = $book_request_details['student_details']['first_name'].' '.$book_request_details['student_details']['middle_name'].' '.$book_request_details['student_details']['last_name'];
            $student_email = $book_request_details['student_details']['email'];
            $book_name = $book_request_details['book_details']['title'];

            //echo "<pre>"; print_r($book_name); die;


            BookRequest::where('id', $id)->update(['status'=>$data['book_req_status'], 'return_date'=>$data['return_date']]);

            //send mail to student about status update
            Mail::to($student_email)->send(new BookReqStatus($student_name, $student_email, $book_name, $data['book_req_status'], $data['return_date']));
            
            Session::flash('success_message', 'Book Request Status Updated Successfully');
            return redirect('/admin/book-requests');
        }

        $book_request_details = BookRequest::find($id);
        $book_request_details = json_decode(json_encode($book_request_details), true);

        $request_date = Carbon::parse($book_request_details['request_date'])->format('Y-m-d');
        $return_date = Carbon::parse($book_request_details['return_date'])->format('Y-m-d');
        // echo "<pre>"; print_r($request_date); die;


       return view('admin.book_requests.update_book_requests')->with(compact('book_request_details', 'return_date', 'request_date'));
    }
}
