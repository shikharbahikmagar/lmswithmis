@extends('admin.layouts.layout')
@section('content')
<div class="content-wrapper">
   <div class="row">
      <div class="col-md-12 grid-margin">
         <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
               <div class="card">
                  <div class="card-body">
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
                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     @endif
                     <h4 class="card-title">Sections Table</h4>
                     <div class="d-flex flex-row">
                      <div class="col-sm-3">
                        <select class="custom-select mr-sm-2 noticeCategory" id="inlineFormCustomSelect">
                        <option selected value="all">All Notices</option>
                       @foreach($noticeCatDetails as $category)
                        <option value="{{ $category['id'] }}">{{$category['category_name']}} </option>
                        @endforeach
                        </select>
                     </div>

                     <a href="{{ url('/admin/add-edit-notices') }}" class="btn btn-block btn-primary" style="max-width: 150px; margin-left:62%">
                        Add Notice</a>
                     </div>
                        @include('admin.notices.ajax_notice_lists')
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection