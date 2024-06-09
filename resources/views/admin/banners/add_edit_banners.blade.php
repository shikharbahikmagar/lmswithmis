@extends('admin.layouts.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-12">
            <h1>Notice Categories</h1>
         </div>
         <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Notice Categories</li>
            </ol>
         </div>
      </div>
   </div>
   <!-- /.container-fluid -->
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
                  <h3 class="card-title">{{ $title }}</h3>
               </div>
               <!-- /.card-header -->
               <!-- form start -->
               <form
               @if(empty($banner['id']))
               action="{{ url('/admin/add-edit-banner') }}"
               @else
               action="{{ url('/admin/add-edit-banner/'.$banner['id']) }}"
               @endif
               role="form" enctype="multipart/form-data" method="post">@csrf
               <div class="card-body">
                  <div class="form-group">
                     <label for="title">Title</label>
                     <textarea class="form-control" name="title" id="title" rows="2" placeholder="Enter...">@if(!empty($banner['title'])){{ $banner['title'] }}@else{{ old('title') }}@endif</textarea>
                  </div>
                  <div class="form-group">
                     <label for="description">Description</label>
                     <textarea class="form-control" name="description" id="description" rows="4" placeholder="Enter...">@if(!empty($banner['description'])){{ $banner['description'] }}@else{{ old('description') }}@endif</textarea>
                  </div>
                  <div class="form-group">
                     <label class="form-label">Banner Image</label>
                     <div>
                        <input type="file" class="form-control" value="{{ old('banner_image') }}" id="banner_image" name="banner_image">
                    </div>
                    @if(!empty($banner['banner_image']))
                            <img src="{{ asset('front/assets/banner_images/'.$banner['banner_image']) }}" width="100px" style="margin-left: 300px;" height="100px" alt="">
                            <input type="hidden" value="{{ $banner['banner_image'] }}" name="current_banner_image">
                            <a target="_blank" href="{{ asset('front/assets/banner_images/'.$banner['banner_image']) }}">View Image</a><br>
                            <a href="javascript:void(0)" class="imageConfirmDelete" style="color:red;" record="banner-{{ $banner['id'] }}" 
                            recordId = "{{ $banner->id }}">Delete Image</a>
                            @endif
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
            </div>
            <!-- right column -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@endsection