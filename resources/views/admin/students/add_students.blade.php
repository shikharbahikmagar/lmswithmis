   @extends('admin.layouts.layout')
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
                  <h4 class="card-title">Add Student</h4>
                  <form action="{{ url('/admin/add-students/'.$grade_id) }}"
                    role="form" enctype="multipart/form-data" method="post">@csrf
                    <p class="card-description">
                      Student Details
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ old('first_name') }}" name="first_name" id="first_name" placeholder="Enter first name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Middle Name</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" value="{{ old('middle_name') }}" name="middle_name" id="middle_name" placeholder="Enter middle name">

                          </div>
                        </div>
                      </div>
                      </div>
                     <div class="row">
                        <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" value="{{ old('last_name') }}" name="last_name" id="last_name" placeholder="Enter last name">
                          </div>
                        </div>
                      </div>
                         <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" value="{{ old('address') }}" name="address" id="address" placeholder="Enter student address">
                          </div> 
                          </div>
                        </div>
                      </div>
                    <div class="row">
                         <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="gender">
                              <option value="">Select</option>
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                        <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">DOB</label>
                          <div class="col-sm-9">
                             <input class="form-control" type="date" name="dob">
                          </div> 
                          </div>
                        </div>
                        </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Parent Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ old('parent_name') }}" name="parent_name" id="parent_name" placeholder="Enter parent name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Parent Contact</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" value="{{ old('parent_contact') }}" name="parent_contact" id="parent_contact" placeholder="Enter parent mobile number">

                          </div>
                        </div>
                      </div>
                    </div>
                         <div class="row">
                            <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Roll No</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" value="{{ old('roll_no') }}" name="roll_no" id="roll_no" placeholder="Enter roll number">

                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Admission Date</label>
                          <div class="col-sm-9">
                             <input class="form-control" type="date" name="admission_date">
                          </div> 
                          </div>
                        </div>
                         </div>
                    <div class="row">
                         <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Student Image</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control" value="{{ old('student_image') }}" id="student_image" name="student_image">
                          </div>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                         <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ old('email') }}" name="email" id="email" placeholder="Enter email">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                            <input type="password" class="form-control" value="{{ old('password') }}" name="password" id="password" placeholder="Enter passsword">
                          </div>
                        </div>
                      </div>
                      </div>                     
                    <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                  </form>
                </div>
              </div>
            </div>
            </div>
            </div>
   @endsection