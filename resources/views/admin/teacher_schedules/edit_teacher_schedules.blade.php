   @extends('admin.layouts.layout')
   @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Schedules</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Schedule</li>
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
                <h3 class="card-title">Teacher Schedule</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('/admin/edit-teacher-schedule/'.$teacherScheduleData['id']) }}"
               role="form" enctype="multipart/form-data" method="post">@csrf
                <div class="card-body">
                <div class="form-group">
                  <label>Select Class</label>
                  <select name="class_id" id="class_id" class="custom-select selectClassForEdit" style="width: 100%;">
                    <option value="">Select</option>
                    @foreach($grades as $grade)
                    <option value="{{ $grade->id }}" @if(!empty($teacherScheduleData['class_id']) &&
                        $teacherScheduleData['class_id'] == $grade->id) selected @endif>Class {{ $grade->grade_name }}</option>
                    @endforeach
                  </select>
                  </div>
                    <div class="form-group subject_options">
                    @include('admin.teacher_schedules.ajax_subject_options_for_edit')
                </div>
                <!-- /.card-body -->
                <div class="form-group">
                  <label>Select Day of Week</label>
                  <select name="day_of_week" id="day_of_week" class="custom-select" style="width: 100%;">
                    <option value="everyday"
                    @if(!empty($teacherScheduleData['day_of_week']) &&
                        $teacherScheduleData['day_of_week'] == "everyday") selected @endif>Every Day</option>
                    <option value="sunday" 
                    @if(!empty($teacherScheduleData['day_of_week']) &&
                      $teacherScheduleData['day_of_week'] == "sunday") selected @endif>Sunday</option>
                    <option value="monday" 
                    @if(!empty($teacherScheduleData['day_of_week']) &&
                      $teacherScheduleData['day_of_week'] == "monday") selected @endif>Monday</option>
                    <option value="tuesday" 
                    @if(!empty($teacherScheduleData['day_of_week']) &&
                      $teacherScheduleData['day_of_week'] == "tuesday") selected @endif>Tuesday</option>
                    <option value="wednesday" 
                    @if(!empty($teacherScheduleData['day_of_week']) &&
                      $teacherScheduleData['day_of_week'] == "wednesday") selected @endif>Wednesday</option>
                    <option value="thursday"
                     @if(!empty($teacherScheduleData['day_of_week']) &&
                      $teacherScheduleData['day_of_week'] == "thursday") selected @endif>Thursday</option>
                    <option value="friday" @
                    @if(!empty($teacherScheduleData['day_of_week']) &&
                      $teacherScheduleData['day_of_week'] == "friday") selected @endif>Friday</option>
                    <option value="saturday"
                     @if(!empty($teacherScheduleData['day_of_week']) &&
                      $teacherScheduleData['day_of_week'] == "saturday") selected @endif>Saturday</option>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="time">Time</label>
                    <input type="text" class="form-control" name="time" id="time" placeholder="enter time example: 10:05-11:00"
                     @if(!empty($teacherScheduleData['time'])) value="{{ $teacherScheduleData['time'] }}" @endif>
                  </div>
                  <input type="hidden" name="teacher_id" value="{{ $teacherScheduleData['teachers']['id'] }}">
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
          
          </div><!-- right column -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
   @endsection