   @extends('admin.layouts.layout')
   @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Schedules</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Schedule</li>
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
                <h3 class="card-title">{{ $title }}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form
              @if(empty($teacherScheduleData['id']))
              action="{{ url('/admin/add-edit-teacher-schedule') }}"
              @else
              action="{{ url('/admin/add-edit-teacher-schedule/'.$teacherScheduleData['id']) }}"
              @endif
               role="form" enctype="multipart/form-data" method="post">@csrf
                <div class="card-body">
                <div class="form-group">
                  <label>Select Class</label>
                  <select name="class_id" id="class_id" class="custom-select selectClass" style="width: 100%;">
                    <option value="">Select</option>
                    @foreach($grades as $grade)
                    <option value="{{ $grade->id }}" @if(!empty($teacherScheduleData['class_id']) &&
                        $teacherScheduleData['class_id'] == $grade->id) selected @endif>Class {{ $grade->grade_name }}</option>
                    @endforeach
                  </select>
                  </div>
                    <div class="form-group subject_options">
                    @include('admin.teacher_schedules.ajax_subject_options')
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">{{ $btn }}</button>
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