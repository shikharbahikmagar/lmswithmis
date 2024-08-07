
<div class="table-responsive pt-3">
<table id="students" class="table table-bordered student_lists">
    <thead>
        <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Parent Name</th>
            <th>Parent Contact</th>
            <th>Class</th>
            <th>Roll No</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $student['id'] }}</td>
            <td>{{ $student['first_name'] }} {{$student['middle_name'] }} {{$student['last_name'] }}</td>
            <td>{{ $student['parent_name'] }}</td>
            <td>{{ $student['parent_contact'] }}</td>
            <td>Class {{ $student['grades']['grade_name'] }}</td>
            <td>{{ $student['roll_no'] }}</td>
            <td>@if($student['status'] == 1) 
            <a href="javascript:void(0)" class="updateStudentStatus" id="student-{{ $student['id'] }}" student_id="{{$student['id']}}">
            <i status="Active" style="font-size: 20px; " class="mdi mdi-check-circle-outline"></i></a>
            @elseif($student['status'] == 0)
            <a href="javascript:void(0)" class="updateStudentStatus" id="student-{{ $student['id']}}" student_id="{{$student['id']}}">
            <i style="font-size: 20px; " class="mdi mdi-checkbox-blank-circle-outline" status="InActive"></i></a>
            @endif 
            </td>
            <td>
            <a href="{{ url('admin/update-student-pwd/'.$student['id']) }}" title="update password"><i style="font-size: 22px;" class="mdi mdi-account-key"></i></a>&nbsp;&nbsp;&nbsp;
            <a href="{{ url('admin/edit-student/'.$student['id']) }}" title="Edit Details"><i style="font-size: 20px;" class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
            <a href="javascript:void(0)" class="deleteStudent" title="Delete Student" studentId = "{{ $student['id'] }}"><i style="color:red; font-size: 20px;" class="fa fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
