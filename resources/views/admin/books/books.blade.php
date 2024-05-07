@extends('admin.layouts.layout')
@section('content')
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
                <h3 class="card-title">Books Details</h3>
                <a href="{{ url('admin/add-edit-book') }}"><Button class="btn-success" style="float: right;">Add Book</Button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="category_table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Book Title</th>
                    <th>Category</th>
                    <th>Added By</th>
                    <th>Image</th>
                    <!-- <th>Description</th> -->
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($books as $book)
                  <tr>
                    <td>{{ $book['id'] }}</td>
                    <td>{{ $book['title'] }}</td>
                    <td>{{ $book['categories']['category_name'] }}</td>
                    <td>{{ $book['added_by_details']['name'] }}</td>
                    <td>{{ $book['book_image'] }}</td>
                    <!-- <td>{{ $book['description'] }}</td> -->
                    <td>
                    @if( $book['status'] == 1)
    	                <a class="updateCategoryStatus" id="book-{{ $book['id'] }}" category_id="{{ $book['id'] }}"
                        href="javascript:void(0)"><i class="fas fa-toggle-on" aria-hidden="true" status="Active"></i></a>
                    @else
                    <a class="updateCategoryStatus" id="book-{{ $book['id'] }}" category_id="{{ $book['id'] }}"
                        href="javascript:void(0)"><i class="fas fa-toggle-off" aria-hidden="true" status="In-Active"></i></a>
                    @endif    
                  </td>
                    <td><a href="{{ url('/admin/add-edit-book/'.$book['id'] ) }}"><i class="fas fa-edit"></i></a>
                    &nbsp;&nbsp;<a style="color:red;" href="javascript:void(0)" class="confirmDelete" record="book" recordId="{{  $book['id'] }}">
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