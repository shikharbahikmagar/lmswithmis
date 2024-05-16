   @extends('admin.layouts.layout')
   @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Books Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Books</li>
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
              @if(empty($gradesData['id']))
              action="{{ url('/admin/add-edit-grade') }}"
              @else
              action="{{ url('/admin/add-edit-grade/'.$gradesData['id']) }}"
              @endif
               role="form" enctype="multipart/form-data" method="post">@csrf
                <div class="card-body">
                    <div class="form-group">
                    <label for="grade_name">Grade Name</label>
                    <input type="text" class="form-control" name="grade_name" id="grade_name" placeholder="Enter grade name"
                    @if(!empty($gradesData)) value="{{ $gradesData->grade_name }}" @else value="{{ old('grade_name') }}" @endif>
                  </div>
                  <div class="form-group">
                    <label for="room_num">Room Number</label>
                    <input type="text" class="form-control" name="room_num" id="room_num" placeholder="Enter table number"
                    @if(!empty($gradesData)) value="{{ $gradesData->room_num }}" @else value="{{ old('room_num') }}" @endif>
                </div> 
                    <div class="form-group">
                    <label for="capacity">Capacity</label>
                    <input type="text" class="form-control" name="capacity" id="capacity" placeholder="Enter table number"
                    @if(!empty($gradesData)) value="{{ $gradesData->capacity }}" @else value="{{ old('capacity') }}" @endif>
                </div> 
                <div class="form-group">
                    <label for="enrolled_students">Enrolled Students</label>
                    <input type="text" class="form-control" name="enrolled_students" id="enrolled_students" placeholder="Enter table number"
                    @if(!empty($gradesData)) value="{{ $gradesData->enrolled_students }}" @else value="{{ old('enrolled_students') }}" @endif>
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