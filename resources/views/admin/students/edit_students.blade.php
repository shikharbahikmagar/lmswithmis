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
                  <form               
                  @if(empty($teacherData['id']))
                    action="{{ url('/admin/add-edit-teacher') }}"
                    @else
                    action="{{ url('/admin/add-edit-teacher/'.$teacherData['id']) }}"
                    @endif
                    role="form" enctype="multipart/form-data" method="post">@csrf
                    <p class="card-description">
                      teacher details
                    </p>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter first name"
                            @if(!empty($teacherData)) value="{{ $teacherData->first_name }}" @else value="{{ old('first_name') }}" @endif>

                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Middle Name</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="Enter last number"
                                @if(!empty($teacherData)) value="{{ $teacherData->middle_name }}" @else value="{{ old('last_name') }}" @endif>

                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter last number"
                                @if(!empty($teacherData)) value="{{ $teacherData->last_name }}" @else value="{{ old('last_name') }}" @endif>

                          </div>
                        </div>
                      </div>
                    </div>
                     <div class="row">
                         <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="address" id="address" placeholder="Enter last number"
                                @if(!empty($teacherData)) value="{{ $teacherData->address }}" @else value="{{ old('address') }}" @endif>
                          </div> 
                          </div>
                        </div>
                         <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="gender">
                              <option>Select</option>
                              <option value="male" @if(!empty($teacherData['gender']) && $teacherData['gender'] == "male") selected @endif>Male</option>
                              <option value="female" @if(!empty($teacherData['gender']) && $teacherData['gender'] == "female") selected @endif>Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      
                      </div>

                    <div class="row">
                        <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">DOB</label>
                          <div class="col-sm-9">
                             <input class="form-control" type="date" name="dob"
                              @if(!empty($teacherData['dob'])) value="{{ $teacherData->dob }}" @endif>
                          </div> 
                          </div>
                        </div>
                       <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Parent Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="parent_name" id="parent_name" placeholder="Enter first name"
                            @if(!empty($teacherData)) value="{{ $teacherData->first_name }}" @else value="{{ old('first_name') }}" @endif>

                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Parent Contact</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" name="parent_contact" id="parent_contact" placeholder="Enter last number"
                                @if(!empty($teacherData)) value="{{ $teacherData->last_name }}" @else value="{{ old('last_name') }}" @endif>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                         <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Roll No</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" name="roll_no" id="roll_no" placeholder="Enter last number"
                                @if(!empty($teacherData)) value="{{ $teacherData->roll_no }}" @else value="{{ old('last_name') }}" @endif>

                          </div>
                        </div>
                      </div>
                       <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Admission Date</label>
                          <div class="col-sm-9">
                             <input class="form-control" type="date" name="admission_date"
                              @if(!empty($teacherData['admission_date'])) value="{{ $teacherData->admission_date }}" @endif>
                          </div> 
                          </div>
                        </div>
                         <div class="col-sm-4">
                            <label for="student_image">Student Image</label>
                            <input type="file" class="form-control" id="student_image" name="student_image">
                            <a target="_blank" href="{{ url('images/admin_images/admin_photos/'.Auth::guard('admin')->user()->image) }}">View Image</a>
                            @if(!empty( Auth::guard('admin')->user()->image ))
                            <input type="hidden" name="current_student_image" 
                                value="">
                            @endif
                      </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter email"
                            @if(!empty($teacherData['email'])) value="{{ $teacherData->email }}" readonly @else value="{{ old('email') }}" @endif>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                           <input type="password" class="form-control" name="password" id="password" placeholder="Enter password"
                            @if(!empty($teacherData['password'])) Readonly @endif>
                            <input type="hidden" @if(!empty($teacherData['password'])) value="{{ $teacherData['password'] }}" @endif name="old_password">
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