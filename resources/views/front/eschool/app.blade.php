@extends('front.layouts.eschool_layouts.layout')
@section('content')

@include('front.eschool.notice_board')


<div class="section fun-facts">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="wrapper">
               <div class="row">
                  <div class="col-lg-3 col-md-6">
                     <div class="counter">
                        <h2 class="timer count-title count-number" data-to="{{ $total_students }}" data-speed="1000"></h2>
                        <p class="count-text ">Happy Students</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="counter">
                        <h2 class="timer count-title count-number" data-to="{{ $total_subjects }}" data-speed="1000"></h2>
                        <p class="count-text ">Courses</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="counter">
                        <h2 class="timer count-title count-number" data-to="{{ $total_teachers }}" data-speed="1000"></h2>
                        <p class="count-text ">Teachers</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="counter end">
                        <h2 class="timer count-title count-number" data-to="15" data-speed="1000"></h2>
                        <p class="count-text ">Years Experience</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('front.eschool.events')

@include('front.eschool.teams')
@include('front.eschool.contact_us')
@endsection