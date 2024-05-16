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
                     <h4 class="card-title">Grades Table</h4>
                     <a href="{{ url('/admin/add-edit-grade') }}" class="btn btn-block btn-primary" style="max-width: 150px; float: right; display:inline-block;">
                        Add Grade</a>
                     <div class="table-responsive pt-3">
                    <table id="grades" class="table table-bordered">
                        <thead>
                            <tr>
                    <th>ID</th>
                    <th>Grade Level</th>
                    <th>Room No</th>
                    <th>Capacity</th>
                    <th>Enrolled Students</th>
                    <!-- <th>Description</th> -->
                    <th>Status</th>
                    <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                   @foreach($grades as $grade)
                  <tr>
                    <td>{{ $grade['id'] }}</td>
                    <td>{{ $grade['grade_name'] }}</td>
                    <td>{{ $grade['room_num'] }}</td>
                    <td>{{ $grade['capacity'] }}</td>
                    <td>{{ $grade['enrolled_students'] }}</td>
                    <!-- <td>{{ $grade['description'] }}</td> -->
                    <td>@if($grade['status'] == 1) 
                                    <a href="javascript:void(0)" class="updateGradeStatus" id="grade-{{ $grade['id'] }}" grade_id="{{$grade['id']}}">
                                    <i status="Active" style="font-size: 20px; " class="mdi mdi-check-circle-outline"></i></a>
                                    @elseif($grade['status'] == 0)
                                    <a href="javascript:void(0)" class="updateGradeStatus" id="grade-{{ $grade['id']}}" grade_id="{{$grade['id']}}">
                                    <i style="font-size: 20px; " class="mdi mdi-checkbox-blank-circle-outline" status="InActive"></i></a>
                                    @endif 
                                 </td>
                                 <td>
                                    <a href="{{ url('admin/add-edit-grade/'.$grade['id']) }}"><i style="font-size: 20px;" class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href="javascript:void(0)" class="deleteGrade" record="grade" recordId = "{{ $grade['id'] }}"><i style="color:red; font-size: 20px;" class="fa fa-trash"></i></a>
                                 </td>
                            </tr>
                            @endforeach
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