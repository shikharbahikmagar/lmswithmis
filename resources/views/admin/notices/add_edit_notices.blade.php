@extends('admin.layouts.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Notice Categories</h1>
         </div>
         <div class="col-sm-6">
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
               @if(empty($notice['id']))
               action="{{ url('/admin/add-edit-notices') }}"
               @else
               action="{{ url('/admin/add-edit-notices/'.$notice['id']) }}"
               @endif
               role="form" enctype="multipart/form-data" method="post">@csrf
               <div class="card-body">
                  <div class="form-group">
                     <label>Select Notice Category</label>
                     <select name="notice_cat_id" id="notice_cat_id" class="custom-select" style="width: 100%;">
                        <option value="">Select</option>
                        @foreach($noticeCategories as $category)
                        <option value="{{ $category->id }}" @if(!empty($notice['notice_cat_id']) &&
                        $notice['notice_cat_id']==$category->id) selected @endif>{{ $category->category_name }}</option>
                        @endforeach
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="title">Title</label>
                     <textarea class="form-control" name="title" id="title" rows="3" placeholder="Enter ...">@if(!empty($notice['title'])){{ $notice['title'] }} @else{{ old('title') }} @endif</textarea>
                  </div>
                  <div class="form-group">
                     <label for="link">Link</label>
                     <input type="text" class="form-control" name="link" id="link" placeholder="Enter link"
                     @if(!empty($notice)) value="{{ $notice->link }}" @else value="{{ old('link') }}" @endif>
                  </div>
                  <div class="form-group">
                     <label for="description">Description</label>
                     <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter ...">@if(!empty($notice['description'])){{ $notice['description'] }} @else{{ old('description') }} @endif</textarea>
                  </div>
                  <div class="form-group">
                     <label class="form-label">Attachment</label>
                     <div>
                        <input type="file" class="form-control" value="{{ old('attachment') }}" id="attachment" name="attachment">
                     </div>
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