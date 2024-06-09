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
                  <form action="{{ url('/admin/edit-student/'.$students['id']) }}"
                    role="form" enctype="multipart/form-data" method="post">@csrf
                    <p class="card-description">
                      Student Details
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter first name"
                            @if(!empty($students['first_name'])) value = "{{ $students['first_name'] }}" @else  value="{{ old('first_name') }}" @endif>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Middle Name</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="Enter middle name"
                              @if(!empty($students['middle_name'])) value = "{{ $students['middle_name'] }}" @else  value="{{ old('middle_name') }}" @endif>

                          </div>
                        </div>
                      </div>
                      </div>
                     <div class="row">
                        <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter last name"
                              @if(!empty($students['last_name'])) value = "{{ $students['last_name'] }}" @else  value="{{ old('last_name') }}" @endif>
                          </div>
                        </div>
                      </div>
                         <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="address" id="address" placeholder="Enter student address"
                               @if(!empty($students['address'])) value = "{{ $students['address'] }}" @else  value="{{ old('address') }}" @endif>
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
                              <option value="male" @if(!empty($students['gender']) && $students['gender'] == "male") selected @endif>Male</option>
                              <option value="female" @if(!empty($students['gender']) && $students['gender'] == "female") selected @endif>Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">DOB</label>
                          <div class="col-sm-9">
                             <input class="form-control" type="date" name="dob"
                              @if(!empty($students['dob'])) value="{{ $students['dob'] }}" @endif>
                          </div> 
                          </div>
                        </div>
                        </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Parent Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="parent_name" id="parent_name" placeholder="Enter parent name"
                            @if(!empty($students['parent_name'])) value = "{{ $students['parent_name'] }}" @else  value="{{ old('parent_name') }}" @endif>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Parent Contact</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" name="parent_contact" id="parent_contact" placeholder="Enter parent mobile number"
                             @if(!empty($students['parent_contact'])) value = "{{ $students['parent_contact'] }}" @else  value="{{ old('parent_contact') }}" @endif>

                          </div>
                        </div>
                      </div>
                    </div>
                         <div class="row">
                            <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Roll No</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" name="roll_no" id="roll_no" placeholder="Enter roll number"
                             @if(!empty($students['roll_no'])) value = "{{ $students['roll_no'] }}" @else  value="{{ old('roll_no') }}" @endif>

                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Admission Date</label>
                          <div class="col-sm-9">
                             <input class="form-control" type="date" name="admission_date"
                             @if(!empty($students['admission_date'])) value = "{{ $students['admission_date'] }}"  @endif>
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
                            @if(!empty($students['student_image']))
                            <img src="{{ asset('/images/student_images/'.$students['student_image']) }}" width="100px" style="margin-left: 300px;" height="100px" alt="">
                            <input type="hidden" value="{{ $students['student_image'] }}" name="current_teacher_image">
                            <a target="_blank" class="float-right" href="{{ url('images/student_images/'.$students['student_image']) }}">View Image</a><br>
                            <a href="javascript:void(0)" class="imageConfirmDelete float-right" style="color:red;" record="student-{{ $students['id'] }}" 
                            recordId = "{{ $students->id }}">Delete Image</a>
                            @endif
                            <span><a href="">View Image</a></span> | <span><a href="" style="color: red;">Delete Image</a></span>
                          </div>
                        </div>
                      </div>
                        <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Select class</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="grade_id">
                              <option value="">Select class</option>
                                @foreach($grades as $grade)
                                <option value="{{ $grade['id'] }}" @if(!empty($students['grade_id']) && $students['grade_id'] == $grade['id']) selected @endif>
                                  Class {{ $grade['grade_name'] }}</option>
                                @endforeach
                            </select>
                          </div>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                         <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter email"
                            @if(!empty($students['email'])) value = "{{ $students['email'] }}" readonly @endif>
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" id="password" placeholder="you can not change password here"
                            @if(!empty($students['password']))  readonly @endif>
                            <input type="hidden" value="{{ $students['password']}}" name="old_password">
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