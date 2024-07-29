@extends('admin.layouts.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Book Request Details</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Books</li>
               </ol>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <!-- left column -->
            <div class="col-md-6">
               <!-- general form elements -->
               <div class="card card-primary">
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
                  <div class="alert alert-danger">
                     <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                  </div>
                  @endif
                  <div class="card-header">
                     <h3 class="card-title">Update Book Request</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{ url('/admin/update-book-request/'.$book_request_details['id']) }}" role="form" method="post">@csrf
                  <div class="card-body">
                     <div class="form-group">
                        <label for="student_id">Student ID</label>
                        <input type="text" class="form-control" name="student_id" id="student_id" value="{{ $book_request_details['student_id'] }}" readonly>
                     </div>
                     <div class="form-group">
                        <label for="book_id">Book ID</label>
                        <input type="text" readonly class="form-control" name="book_id" id="book_id" value="{{ $book_request_details['book_id'] }}">
                     </div>
                     <div class="form-group">
                        <label for="request_date">Request Date</label>
                        <input type="date" class="form-control" name="request_date" id="request_date" value="{{ $request_date }}" readonly>
                     </div>
                     <div class="form-group">
                        <label for="return_date">Return Date</label>
                        <input type="date" class="form-control" name="return_date" id="return_date" value="{{ $return_date }}">
                     </div>
                     <div class="form-group">
                        <label for="inputState">Status</label>
                        <select name="book_req_status" id="book_req_status" class="form-control">
                          <option value="pending" @if($book_request_details['status'] == "pending") selected @endif>Pending</option>
                          <option value="approved" @if($book_request_details['status'] == "approved") selected @endif>Approved</option>
                          <option value="rejected" @if($book_request_details['status'] == "rejected") selected @endif>Rejected</option>
                        </select>
                    </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                     <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                  </form>
               </div>
               <!-- /.card -->
            </div>
            <div class="col-md-6">
               <dotlottie-player src="https://lottie.host/e3365258-411b-492c-b633-e606e572e5fc/lFOx6FYpfz.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay></dotlottie-player>
               <!--/.col (left) -->
            </div>
            <!-- right column -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- /.content -->
</div>
@endsection