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
                     <h4 class="card-title">Teacher Schedule Table</h4>
                     <div class="d-flex flex-row">
                      <div class="col-sm-3">
                        <select class="custom-select mr-sm-2 teacherSchedule" id="inlineFormCustomSelect">
                        <option selected value="all">All Teachers</option>
                       @foreach($teacherDetails as $teacher)
                        <option value="{{ $teacher['id'] }}">{{$teacher['first_name']}} {{$teacher['last_name']}}</option>
                        @endforeach
                        </select>
                     </div>

                     <a href="" class="btn btn-block btn-primary disabled-link" id="addTeacherSchedule" style="max-width: 150px; margin-left:62%">
                        Add schedule</a>
                     </div>
                     <div class="table-responsive pt-3 teacher_schedule_table">
                        @include('admin.teacher_schedules.ajax_teacher_schedules')
                    </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


@endsection