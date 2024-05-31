@extends('admin.layouts.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-12">
            <h1>Notice Details</h1>
         </div>
         <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Notice Details</li>
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
                  <h3 class="card-title">Notice Details</h3>
               </div>
               <!-- /.card-header -->
               <!-- form start -->
               <div class="card-body">
                 <div class="form-group">
                     <label>Added By</label>
                     <input readonly type="text" class="form-control" name="name" id="name"
                     @if(!empty($notices['notice_cat_id'])) value="{{ $notices['added_by']['name'] }}"@endif>
                  </div>
                  <div class="form-group">
                     <label>Notice Category</label>
                     <input readonly type="text" class="form-control" name="category_name" id="category_name"
                     @if(!empty($notices['notice_cat_id'])) value="{{ $notices['notice_categories']['category_name'] }}"@endif>
                  </div>
                  <div class="form-group">
                     <label for="title">Title</label>
                     <textarea class="form-control" name="title" id="title" rows="3" readonly>@if(!empty($notices['title'])){{ $notices['title'] }}@endif</textarea>
                  </div>
                  <div class="form-group">
                     <label for="link">Link</label>
                     <input type="text" class="form-control" name="link" id="link" placeholder="no links"
                     @if(!empty($notices['link'])) value="{{ $notices['link'] }}"@endif readonly>
                  </div>
                  <div class="form-group">
                     <label for="description">Description</label>
                     <textarea class="form-control" name="description" id="description" rows="5" readonly>@if(!empty($notices['description'])){{ $notices['description'] }}@endif</textarea>
                  </div>
                  <div class="form-group">
                     <label class="form-label">Attachment <span><i>(click below to open)</i></span></label>
                     <div>
                         @if(!empty($notices['attachment']))<a target="_blank" href="{{ url('/files/notice_files/'.$notices['attachment']) }}"><span> {{ $notices['attachment'] }}</span></a>@endif
                     </div>
                  </div>
                   <div class="form-group">
                     <label>Notice URL</label>
                     <input readonly type="text" class="form-control" name="url" id="url"
                     @if(!empty($notices['url'])) value="{{ $notices['url'] }}"@endif>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <a href="{{ url('admin/notices') }}"><button class="btn btn-primary">Back</button></a>
                  </div>
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