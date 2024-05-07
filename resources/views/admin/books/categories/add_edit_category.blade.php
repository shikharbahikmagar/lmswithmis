   @extends('admin.layouts.layout')
   @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">categories</li>
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
              @if(empty($category['id']))
              action="{{ url('/admin/add-edit-category') }}"
              @else
              action="{{ url('/admin/add-edit-category/'.$category['id']) }}"
              @endif
               role="form" enctype="multipart/form-data" method="post">@csrf
                <div class="card-body">
                    <div class="form-group">
                    <label for="category_name">Category Name</label>
                    <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter category name"\
                    @if(!empty($category)) value="{{ $category->category_name }}" @else value="{{ old('category_name') }}" @endif>
                  </div>
                  <div class="form-group">
                    <label for="table_no">Table No</label>
                    <input type="text" class="form-control" name="table_no" id="table_no" placeholder="enter table no"
                    @if(!empty($category)) value="{{ $category->table_no }}" @else value="{{ old('table_no') }}" @endif>
                  </div>
                   <div class="form-group">
                    <label for="category_image">Category Image</label>
                    <input type="file" class="form-control" id="category_image" name="category_image">
                  </div>
                    @if(!empty($category['category_image']))
                    <img src="{{ asset('/images/category_images/'.$category['category_image']) }}" width="100px" height="100px" alt="">
                    <input type="hidden" value="{{ $category['category_image'] }}" name="current_category_image">
                    <a target="_blank" class="float-right" href="{{ url('images/category_images/'.$category['category_image']) }}">View Image</a><br>
                    <a href="javascript:void(0)" class="imageConfirmDelete float-right" style="color:red;" record="category-image" 
                    recordId = "{{ $category->id }}">Delete Image</a>
                    @endif
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