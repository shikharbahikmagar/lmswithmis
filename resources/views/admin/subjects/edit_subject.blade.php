   @extends('admin.layouts.layout')
   @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Subject Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Subjects</li>
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
          <div class="col-md-12">
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
                <h3 class="card-title">Edit Subject</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('/admin/edit-subject/'.$subjectDetails['id']) }}" role="form" enctype="multipart/form-data" method="post">@csrf
                <div class="card-body">
                     <div class="form-group col-sm-6">
                    <label for="subject_name">Book Name</label>
                    <input type="text" class="form-control" name="subject_name" @if(!empty($subjectDetails)) 
                    value = "{{ $subjectDetails['subject_name'] }} " @endif id="subject_name" placeholder="Enter category name">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="subject_code">Book Code</label>
                    <input type="text" class="form-control" name="subject_code"@if(!empty($subjectDetails)) 
                    value = "{{ $subjectDetails['subject_code'] }} " @endif id="subject_code" placeholder="enter table no">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="credit_hour">Credit Hour</label>
                    <input type="text" class="form-control" name="credit_hour" @if(!empty($subjectDetails)) 
                    value = "{{ $subjectDetails['credit_hours'] }} " @endif id="credit_hour" placeholder="enter table no">
                  </div>
                   
                <!-- /.card-body -->
                <div class="">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
   @endsection