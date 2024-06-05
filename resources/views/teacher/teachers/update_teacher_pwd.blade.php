   @extends('teacher.layouts.layout')
   @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin Setting</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Settings</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
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
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
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
              <div class="card-header">
                <h3 class="card-title">Update Admin Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('/teacher/update-teacher-pwd/'.$teacherDetails->id) }}" role="form" method="post">@csrf
                <div class="card-body">
                    <div class="form-group">
                    <label for="username">Full Name</label>
                    <input type="text" class="form-control" value = "{{ $teacherDetails->first_name }} {{ $teacherDetails->last_name }} " readonly name="username" id="username" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" class="form-control" value = "{{ $teacherDetails->contact }}" readonly name="contact" id="contact" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="department">Department</label>
                    <input type="email" class="form-control" value = "{{ $teacherDetails->department }}" readonly name="department" id="department" placeholder="Enter email">
                  </div>
                   <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" value = "{{ $teacherDetails->email }}" readonly name="email" id="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="teacher_current_pwd">Current Password</label>
                    <input type="password" class="form-control" id="teacher_current_pwd" teacher_id = "{{ $teacherDetails->id }}" name="teacher_current_pwd" placeholder="old password">
                    <span id="chkTeacherCurrentPwd" required></span>
                  </div>
                  <div class="form-group">
                    <label for="new_pwd">New Password</label>
                    <input type="password" class="form-control" id="new_pwd" name="new_pwd" placeholder="new password">
                  </div>
                  <div class="form-group">
                    <label for="confirm_pwd">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_pwd" name="confirm_pwd" placeholder="confirm password">
                  <span id="checkNewConfirm" required></span>
                  </div>  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
         <dotlottie-player src="https://lottie.host/e3365258-411b-492c-b633-e606e572e5fc/lFOx6FYpfz.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay></dotlottie-player>
          <!--/.col (left) -->
          
          </div><!-- right column -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
   @endsection