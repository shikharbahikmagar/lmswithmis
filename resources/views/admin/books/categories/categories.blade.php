@extends('admin.layouts.layout')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Categories Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Library</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
            @if(Session::has('error_message'))
                      <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 10px;">
                    {{ Session::get('error_message') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  @endif
                  @if(Session::has('success_message'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 10px;">
                    {{ Session::get('success_message') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  @endif
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Books Categories</h3>
                <a href="{{ url('admin/add-edit-category') }}"><Button class="btn-success" style="float: right;">Add Category</Button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="category_table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Table Number</th>
                    <th>Category Image</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($cat_details as $category)
                  <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>{{ $category->table_no }}</td>
                    <td>{{ $category->category_image }}</td>
                                     <td>
                    @if( $category->status == 1)
    	                <a class="updateCategoryStatus" id="category-{{ $category->id }}" category_id="{{ $category->id }}"
                        href="javascript:void(0)"><i class="fas fa-toggle-on" aria-hidden="true" status="Active"></i></a>
                    @else
                    <a class="updateCategoryStatus" id="category-{{ $category->id }}" category_id="{{ $category->id }}"
                        href="javascript:void(0)"><i class="fas fa-toggle-off" aria-hidden="true" status="In-Active"></i></a>
                    @endif    
                  </td>
                    <td><a href="{{ url('/admin/add-edit-category/'.$category->id ) }}"><i class="fas fa-edit"></i></a>
                    &nbsp;&nbsp;<a style="color:red;" href="javascript:void(0)" class="confirmDelete" record="category" recordId="{{  $category->id }}">
                    <i class="fas fa-trash"></i></a></td>
                  </tr>
                  @endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection