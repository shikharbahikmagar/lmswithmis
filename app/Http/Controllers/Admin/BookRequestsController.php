<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookRequestsController extends Controller
{
    //book requests
    public function bookRequest(Reqeust $request, $id=null)
    {
        if($request->isMethod('post'))
        {
            $request_details = $request->all();

            echo "<pre>"; print_r($request_details); die;
        }
        

    }
}
