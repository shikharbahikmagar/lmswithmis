@extends('teacher.layouts.layout')
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
                     <h4 class="card-title">Teachers Table</h4>
                     <div class="table-responsive pt-3">
                    <table id="teachers_details" class="table table-bordered">
                        <thead>
                            <tr>
                  <th>Teacher Name</th>
                  <th>Department</th>
                  <th>Contact</th>
                  <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>{{ $teacher['first_name'] }} {{$teacher['last_name'] }}</td>
                    <td>{{ $teacher['department'] }}</td>
                    <td>{{ $teacher['contact'] }}</td>
                    <!-- <td>{{ $teacher['description'] }}</td> -->
                   
                                 <td>
                                    <div class="flex gap-10">
                                    <a href="{{ url('teacher/edit-teacher/'.$teacher['id']) }}"><i style="font-size: 20px;" class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href="{{ url('teacher/update-teacher-pwd/'.$teacher['id']) }}" title="update password" record="teacher" recordId = "{{ $teacher['id'] }}"><i style="font-size: 20px;" class="mdi mdi-account-key"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href="{{ url('teacher/view-details/'.$teacher['id']) }}" record="teacher" recordId = "{{ $teacher['id'] }}"><i style="font-size: 20px;" class="mdi mdi-account-card-details"></i></a>
                                    </div>
                                 </td>
                            </tr>

                        </tbody>
                    </table>
                    </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


@endsection