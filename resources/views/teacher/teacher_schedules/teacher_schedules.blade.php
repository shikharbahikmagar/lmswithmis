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
                     <h4 class="card-title">My Schedule</h4>
                     <div class="table-responsive pt-3">
                        <table id="schedules" class="table table-bordered teacher_schedule_table">
                           <thead>
                              <tr>
                                 <th>Time</th>
                                 <th>Class Name</th>
                                 <th>Subject Name</th>
                                 <th>Day of the Week</th>
                                 <!-- <th>Description</th> -->
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($teachersScheduleData as $schedule)
                              <tr>
                                 <td>{{ $schedule['time'] }}</td>
                                 <td>Class {{ $schedule['classes']['grade_name'] }}</td>
                                 <td>{{ $schedule['subjects']['subject_name'] }}</td>
                                 <td>{{ $schedule['day_of_week'] }}</td>
                              </tr>
                              <!-- <input type="hidden" name="teacher_id" teacher_id = "{{ $schedule['teachers']['id'] }}"> -->
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