
                    <table id="subjects" class="table table-bordered">
                     <thead>
                     <tr>
                    <th>ID</th>
                    <th>Grade Level</th>
                    <th>Subject Name</th>
                    <th>Subject Code</th>
                    <th>Credit Hours</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subjects as $subject)
                  <tr>
                    <td>{{ $subject['id'] }}</td>
                    <td>{{ $subject['grades']['grade_name'] }}</td>
                    <td>{{ $subject['subject_name'] }}</td>
                    <td>{{ $subject['subject_code'] }}</td>
                    <td>{{ $subject['credit_hours'] }}</td>
                    <td>@if($subject['status'] == 1) 
                                    <a href="javascript:void(0)" class="updateSubjectStatus" id="subject-{{ $subject['id'] }}" subject_id="{{$subject['id']}}">
                                    <i status="Active" style="font-size: 20px; " class="mdi mdi-check-circle-outline"></i></a>
                                    @elseif($subject['status'] == 0)
                                    <a href="javascript:void(0)" class="updateSubjectStatus" id="subject-{{ $subject['id']}}" subject_id="{{$subject['id']}}">
                                    <i style="font-size: 20px; " class="mdi mdi-checkbox-blank-circle-outline" status="InActive"></i></a>
                                    @endif 
                                 </td>
                                 <td>
                                    <a href="{{ url('admin/edit-subject/'.$subject['id']) }}"><i style="font-size: 20px;" class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href="javascript:void(0)" class="deleteSubject" record="subject" recordId = "{{ $subject['id'] }}"><i style="color:red; font-size: 20px;" class="fa fa-trash"></i></a>
                                 </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
