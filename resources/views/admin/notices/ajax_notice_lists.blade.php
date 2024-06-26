<div class="table-responsive pt-3">
<table id="notices" class="table table-bordered notice_lists">
    <thead>
        <tr>
            <th>ID</th>
            <th>Added By</th>
            <th>Notice Category</th>
            <th>Notice Title</th>
            <th>Attachment</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($notices as $notice)
        <tr>
            <td>{{ $notice['id'] }}</td>
            <td>{{ $notice['added_by']['name'] }}</td>
            <td>{{ $notice['notice_categories']['category_name'] }}</td>
            <td style="word-wrap: break-word;max-width: 160px;white-space:normal;">{{ $notice['title'] }}</td>
            <td><a target="_blank" href="{{ asset('files/notice_files/'.$notice['attachment']) }}">{{ $notice['attachment'] }}</a></td>
            <td>@if($notice['status'] == 1) 
            <a href="javascript:void(0)" class="updateNoticeStatus" id="notice-{{ $notice['id'] }}" notice_id="{{$notice['id']}}">
            <i status="Active" style="font-size: 20px; " class="mdi mdi-check-circle-outline"></i></a>
            @elseif($notice['status'] == 0)
            <a href="javascript:void(0)" class="updateNoticeStatus" id="notice--{{ $notice['id']}}" notice_id="{{$notice['id']}}">
            <i style="font-size: 20px; " class="mdi mdi-checkbox-blank-circle-outline" status="InActive"></i></a>
            @endif 
            </td>
            <td>
            <a href="{{ url('admin/add-edit-notices/'.$notice['id']) }}" title="edit notice"><i style="font-size: 20px;" class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="{{ url('admin/view-notice-details/'.$notice['id']) }}" title="view notice"><i style="font-size: 20px;" class="fa fa-info-circle" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="javascript:void(0)" class="deleteNotice" notice_id = "{{ $notice['id'] }}"><i style="color:red; font-size: 20px;" class="fa fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>