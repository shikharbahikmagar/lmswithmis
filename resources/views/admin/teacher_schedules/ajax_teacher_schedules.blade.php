<div class="table-responsive pt-3">
<table id="schedules" class="table table-bordered teacher_schedule_table">
   <thead>
      <tr>
         <th>ID</th>
         <th>Teacher Name</th>
         <th>Class Name</th>
         <th>Subject Name</th>
         <th>Day of the Week</th>
         <th>Time</th>
         <!-- <th>Description</th> -->
         <th>Status</th>
         <th>Action</th>
      </tr>
   </thead>
   <tbody>
      @foreach($teachersScheduleData as $schedule)
      <tr>
         <td>{{ $schedule['id'] }}</td>
         <td>{{ $schedule['teachers']['first_name'] }} {{ $schedule['teachers']['last_name'] }}</td>
         <td>Class {{ $schedule['classes']['grade_name'] }}</td>
         <td>{{ $schedule['subjects']['subject_name'] }}</td>
         <td>{{ $schedule['day_of_week'] }}</td>
         <td>{{ $schedule['time'] }}</td>
         <td>@if($schedule['status'] == 1) 
            <a href="javascript:void(0)" class="updateTeacherScheduleStatus" id="schedule-{{ $schedule['id'] }}" schedule_id="{{$schedule['id']}}">
            <i status="Active" style="font-size: 20px; " class="mdi mdi-check-circle-outline"></i></a>
            @elseif($schedule['status'] == 0)
            <a href="javascript:void(0)" class="updateTeacherScheduleStatus" id="schedule-{{ $schedule['id']}}" schedule_id="{{$schedule['id']}}">
            <i style="font-size: 20px; " class="mdi mdi-checkbox-blank-circle-outline" status="InActive"></i></a>
            @endif 
         </td>
         <td>
            <a href="{{ url('admin/edit-teacher-schedule/'.$schedule['id']) }}"><i style="font-size: 20px;" class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
            <a href="javascript:void(0)" class="deleteTeacherSchedule" schedule_id = "{{ $schedule['id'] }}"><i style="color:red; font-size: 20px;" class="fa fa-trash"></i></a>
         </td>
      </tr>
      <!-- <input type="hidden" name="teacher_id" teacher_id = "{{ $schedule['teachers']['id'] }}"> -->
      @endforeach
   </tbody>
</table>
</div>