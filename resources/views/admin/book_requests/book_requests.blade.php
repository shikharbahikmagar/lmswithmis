@extends('admin.layouts.layout')
@section('content')
<div class="content-wrapper">
   <div class="row">
      <div class="col-md-12 grid-margin">
         <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
               <div class="card">
                  <div class="card-body">
                     @if(Session::has('error_message'))
                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ Session::get('error_message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     @endif
                     @if(Session::has('success_message'))
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('success_message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     @endif
                     @if ($errors->any())
                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     @endif
                     <h4 class="card-title">Book Requests Table</h4>
                     <div class="table-responsive pt-3">
                        <table id="teachers_table" class="table table-bordered">
                           <thead>
                              <tr>
                                 <th>ID</th>
                                 <th>Student Name</th>
                                 <th>Book Title</th>
                                 <th>Author</th>
                                 <th>ISBN no</th>
                                 <th>Request at</th>
                                 <th>Return Date</th>
                                 <th>Status</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($bookRequests as $request)
                              <tr>
                                 <td>{{ $request['id'] }}</td>
                                 <td>{{ $request['student_details']['first_name'] }} {{$request['student_details']['middle_name'] }} {{$request['student_details']['last_name'] }}</td>
                                 <td>{{ $request['book_details']['title'] }}</td>
                                 <td>{{ $request['book_details']['author'] }}</td>
                                 <td>{{ $request['book_details']['isbn_no'] }}</td>
                                 <td>{{ \Carbon\Carbon::parse($request['request_date'])->diffForHumans() }}</td>
                                 <td>{{ \Carbon\Carbon::parse($request['return_date'])->diffForHumans() }}</td>
                                 <td>{{ ucfirst($request['status']) }}</td>
                                 <td>
                                    <a href="{{ url('admin/update-book-request/'.$request['id']) }}"><i style="font-size: 20px;" class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href="javascript:void(0)" class="deleteBookRequest" recordId = "{{ $request['id'] }}"><i style="color:red; font-size: 20px;" class="fa fa-trash"></i></a>
                                 </td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection