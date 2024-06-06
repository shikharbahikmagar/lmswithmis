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
                  <h4 class="card-title">Add Teachers</h4>
                  <form               
                  @if(empty($teacherData['id']))
                    action="{{ url('/teacher/edit-teacher') }}"
                    @else
                    action="{{ url('/teacher/edit-teacher/'.$teacherData['id']) }}"
                    @endif
                    role="form" enctype="multipart/form-data" method="post">@csrf
                    <p class="card-description">
                      teacher details
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter first name"
                            @if(!empty($teacherData)) value="{{ $teacherData->first_name }}" @else value="{{ old('first_name') }}" @endif>

                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
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
                          <label class="col-sm-3 col-form-label">DOB</label>
                          <div class="col-sm-9">
                             <input class="form-control" type="date" name="dob"
                              @if(!empty($teacherData['dob'])) value="{{ $teacherData->dob }}" @endif>
                          </div> 
                          </div>
                        </div>
                         <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Joining Date</label>
                          <div class="col-sm-9">
                             <input class="form-control" type="date" name="joining_date"
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
                            <select class="form-control" name="gender">
                              <option value="">Select</option>
                              <option value="male" @if(!empty($teacherData['gender']) && $teacherData['gender'] == "male") selected @endif>Male</option>
                              <option value="female" @if(!empty($teacherData['gender']) && $teacherData['gender'] == "female") selected @endif>Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Department</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" name="department" id="department" placeholder="Enter department"
                                @if(!empty($teacherData)) value="{{ $teacherData->department }}" @else value="{{ old('department') }}" @endif>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Teacher Salary</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="salary" id="salary" placeholder="Enter salary"
                                @if(!empty($teacherData)) value="{{ $teacherData->salary }}" @else value="{{ old('salary') }}" @endif>
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Attendance</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="attendance" id="attendance" placeholder="Enter attendance"
                            @if(!empty($teacherData)) value="{{ $teacherData->attendance }}" @else value="{{ old('attendance') }}" @endif>
                          </div>
                        </div>
                      </div>
                      </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Contact</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter contact"
                            @if(!empty($teacherData)) value="{{ $teacherData->contact }}" @else value="{{ old('contact') }}" @endif>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Teacher Image</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control" id="teacher_image" name="teacher_image">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter address"
                            @if(!empty($teacherData['address'])) value="{{ $teacherData->address }}" @else value="{{ old('address') }}" @endif>
                          </div>
                        </div>
                      </div>
                        <div class="col-sm-6">
                             @if(!empty($teacherData['teacher_image']))
                            <img src="{{ asset('/images/teacher_images/'.$teacherData['teacher_image']) }}" width="100px" style="margin-left: 300px;" height="100px" alt="">
                            <input type="hidden" value="{{ $teacherData['teacher_image'] }}" name="current_teacher_image">
                            <a target="_blank" class="float-right" href="{{ url('images/teacher_images/'.$teacherData['teacher_image']) }}">View Image</a><br>
                            <a href="javascript:void(0)" class="imageConfirmDelete float-right" style="color:red;" record="book$teacherData-image" 
                            recordId = "{{ $teacherData->id }}">Delete Image</a>
                            @endif
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
                    </div>
                    <div class="card-footer">
                  <button type="submit" class="btn btn-primary">submit</button>
                </div>
                  </form>
                </div>
              </div>
            </div>
            </div>
            </div>
   @endsection