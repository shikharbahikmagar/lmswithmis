@extends('teacher.layouts.layout')
@section('content')  
<div class="content-wrapper">
   <div class="row">
      <div class="col-12 grid-margin">
         <div class="card">
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
            <div class="card-body">
               <h4 class="card-title">My Details</h4>
               <form               
               @if(empty($teacherData['id']))
               action="{{ url('/teacher/edit-teacher') }}"
               @else
               action="{{ url('/teacher/edit-teacher/'.$teacherData['id']) }}"
               @endif
               role="form" enctype="multipart/form-data" method="post">@csrf
               <p class="card-description">
                  My Details
               </p>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group row">
                        <label class="col-sm-3 col-form-label">First Name</label>
                        <div class="col-sm-9">
                           <input readonly type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter first name"
                           @if(!empty($teacherData)) value="{{ $teacherData->first_name }}" @endif>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Last Name</label>
                        <div class="col-sm-9">
                           <input readonly type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter last number"
                           @if(!empty($teacherData)) value="{{ $teacherData->last_name }}" @endif>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group row">
                        <label class="col-sm-3 col-form-label">DOB</label>
                        <div class="col-sm-9">
                           <input readonly class="form-control" type="date" name="dob"
                           @if(!empty($teacherData['dob'])) value="{{ $teacherData->dob }}" @endif>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Joining Date</label>
                        <div class="col-sm-9">
                           <input readonly class="form-control" type="date" name="joining_date"
                           @if(!empty($teacherData['joining_date'])) value="{{ $teacherData->joining_date }}" @endif>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Gender</label>
                        <div class="col-sm-9">
                           <input readonly type="text" class="form-control" name="gender" id="gender" placeholder="Enter gender"
                           @if(!empty($teacherData)) value="{{ $teacherData->gender }}" @endif>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Department</label>
                        <div class="col-sm-9">
                           <input readonly type="text" class="form-control" name="department" id="department" placeholder="Enter department"
                           @if(!empty($teacherData)) value="{{ $teacherData->department }}" @endif>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Teacher Salary</label>
                        <div class="col-sm-9">
                           <input readonly type="text" class="form-control" name="salary" id="salary" placeholder="Enter salary"
                           @if(!empty($teacherData)) value="{{ $teacherData->salary }}" @endif>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Attendance</label>
                        <div class="col-sm-9">
                           <input readonly type="text" class="form-control" name="attendance" id="attendance" placeholder="Enter attendance"
                           @if(!empty($teacherData)) value="{{ $teacherData->attendance }}" @endif>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Contact</label>
                        <div class="col-sm-9">
                           <input readonly type="text" class="form-control" name="contact" id="contact" placeholder="Enter contact"
                           @if(!empty($teacherData)) value="{{ $teacherData->contact }}" @endif>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                           <input readonly type="text" class="form-control" name="address" id="address" placeholder="Enter address"
                           @if(!empty($teacherData['address'])) value="{{ $teacherData->address }}" @endif>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                           <input readonly type="text" class="form-control" name="email" id="email" placeholder="Enter email"
                           @if(!empty($teacherData['email'])) value="{{ $teacherData->email }}" readonly @endif>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
               <div class="col-sm-6">
                     <div class="form-group row">
                        <label class="col-sm-3 col-form-label">My Image</label>
                        <div class="col-sm-9">
                           @if(!empty($teacherData['teacher_image']))
                           <img src="{{ asset('/images/teacher_images/'.$teacherData['teacher_image']) }}" width="200px" height="200px" alt="">
                           @endif
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card-footer">
                  <a href="{{ url('/teacher/dashboard') }}"><button class="btn btn-primary">Back</button></a>
               </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection