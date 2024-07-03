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
          <div class="col-md-8">
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
              @if(empty($eventData['id']))
              action="{{ url('/admin/add-edit-event') }}"
              @else
              action="{{ url('/admin/add-edit-event/'.$eventData['id']) }}"
              @endif
               role="form" enctype="multipart/form-data" method="post">@csrf
                <div class="card-body">
                <div class="form-group">
                  <label>Select Category</label>
                  <select name="category_id" id="category_id" class="custom-select" style="width: 100%;">
                    <option value="">Select</option>
                    @foreach($eventsCategories as $category)
                    <option value="{{ $category->id }}" @if(!empty($eventData['event_cat_id']) &&
                        $eventData['event_cat_id']==$category->id) selected @endif>{{ $category->category_name }}</option>
                    @endforeach
                  </select>

                </div>
                <div class="form-group">
                    <label for="event_title">Event Title</label>
                    <input type="text" class="form-control" name="event_title" id="event_title" placeholder="Enter event title"
                    @if(!empty($eventData)) value="{{ $eventData->title }}" @else value="{{ old('event_title') }}" @endif>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                   <textarea name="description" class="form-control" placeholder="enter description......" id="description" rows = "3">@if(!empty($eventData)){{ $eventData->description }}@else{{ old('description') }}@endif</textarea>
                </div>
                <div class="form-group">
                    <label for="book_image">Category Image</label>
                    <input type="file" class="form-control" id="book_image" name="book_image">
                </div>
                <div>
                    @if(!empty($eventData['book_image']))
                    <img src="{{ asset('/images/book_images/'.$eventData['book_image']) }}" width="100px" height="100px" alt="">
                    <input type="hidden" value="{{ $eventData['book_image'] }}" name="current_category_image">
                    <a target="_blank" class="float-right" href="{{ url('images/book_images/'.$eventData['book_image']) }}">View Image</a><br>
                    <a href="javascript:void(0)" class="imageConfirmDelete float-right" style="color:red;" record="book$eventData-image" 
                    recordId = "{{ $eventData->id }}">Delete Image</a>
                    @endif
                </div>
                <div class="form-group">
                    <label for="event_date">Select Event Date</label>
                    <input type="date" class="form-control" name="event_date" id="event_date" 
                    @if(!empty($eventData)) value="{{ $eventData->event_date }}" @else value="{{ old('event_date') }}" @endif>
                </div>
                <div class="form-group">
                    <label for="start_time">Event Time</label>
                    <input type="text" class="form-control" name="start_time" id="start_time" placeholder="Enter event time"
                    @if(!empty($eventData)) value="{{ $eventData->start_time }}" @else value="{{ old('start_time') }}" @endif>
                </div>
                <div class="form-group">
                    <label for="duration">Event Duration</label>
                    <input type="text" class="form-control" name="duration" id="duration" placeholder="Enter evebt duration"
                    @if(!empty($eventData)) value="{{ $eventData->duration }}" @else value="{{ old('duration') }}" @endif>
                </div>
                <div class="form-group">
                    <label for="location">Event Location</label>
                    <input type="text" class="form-control" name="location" id="location" placeholder="Enter event location"
                    @if(!empty($eventData)) value="{{ $eventData->location }}" @else value="{{ old('location') }}" @endif>
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