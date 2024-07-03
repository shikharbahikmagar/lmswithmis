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
                     <h4 class="card-title">Events Table</h4>
                     <a href="{{ url('/admin/add-edit-event') }}" class="btn btn-block btn-primary" style="max-width: 150px; float: right; display:inline-block;">
                   Add Event</a>
                     <div class="table-responsive pt-3">
                        <table id="books" class="table table-bordered">
                           <thead>
                              <tr>
                                 <th>ID</th>
                                 <th>Event Title</th>
                                 <th>Event Category</th>
                                 <th>Event Starting Date</th>
                                 <th>Event Banner</th>
                                 <th>Status</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($events as $event)
                              <tr>
                                 <td>{{ $event['id'] }}</td>
                                 <td>{{ $event['title'] }}</td>
                                 <td>{{ $event['event_categories']['category_name'] }}</td>
                                 <td>{{ $event['event_date'] }}</td>
                                 <td><img src="{{ url('/images/event_banners/'.$event['event_banner']) }}" width="60px" height="60px" alt=""></td>
                                 <!-- <td>{{ $event['description'] }}</td> -->
                                 <td>@if($event['status'] == 1) 
                                    <a href="javascript:void(0)" class="updateEventStatus" id="event-{{ $event['id'] }}" event_id="{{$event['id']}}">
                                    <i status="Active" style="font-size: 20px; " class="mdi mdi-check-circle-outline"></i></a>
                                    @elseif($event['status'] == 0)
                                    <a href="javascript:void(0)" class="updateEventStatus" id="event-{{ $event['id']}}" event_id="{{$event['id']}}">
                                    <i style="font-size: 20px; " class="mdi mdi-checkbox-blank-circle-outline" status="InActive"></i></a>
                                    @endif 
                                 </td>
                                 <td>
                                    <a href="{{ url('admin/add-edit-event/'.$event['id']) }}"><i style="font-size: 20px;" class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href="javascript:void(0)" class="deleteEvent" event_id = "{{ $event['id'] }}"><i style="color:red; font-size: 20px;" class="fa fa-trash"></i></a>
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