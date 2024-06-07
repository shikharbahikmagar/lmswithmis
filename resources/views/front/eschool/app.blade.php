@extends('layouts.eschool_layouts.layout')
@section('content')
<div class="section fun-facts">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="wrapper">
               <div class="row">
                  <div class="col-lg-3 col-md-6">
                     <div class="counter">
                        <h2 class="timer count-title count-number" data-to="150" data-speed="1000"></h2>
                        <p class="count-text ">Happy Students</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="counter">
                        <h2 class="timer count-title count-number" data-to="804" data-speed="1000"></h2>
                        <p class="count-text ">Course Hours</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="counter">
                        <h2 class="timer count-title count-number" data-to="50" data-speed="1000"></h2>
                        <p class="count-text ">Employed Students</p>
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
@include('front.eschool.notice_board')
<div class="services section" id="services">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-6">
            <div class="service-item">
               <div class="icon">
                  <img src="{{ asset('front/assets/images/service-01.png') }}" alt="online degrees">
               </div>
               <div class="main-content">
                  <h4>Online Degrees</h4>
                  <p>Whenever you need free templates in HTML CSS, you just remember TemplateMo website.</p>
                  <div class="main-button">
                     <a href="#">Read More</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="service-item">
               <div class="icon">
                  <img src="{{ asset('front/assets/images/service-02.png') }}" alt="short courses">
               </div>
               <div class="main-content">
                  <h4>Short Courses</h4>
                  <p>You can browse free templates based on different tags such as digital marketing, etc.</p>
                  <div class="main-button">
                     <a href="#">Read More</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="service-item">
               <div class="icon">
                  <img src="{{ asset('front/assets/images/service-03.png') }}" alt="web experts">
               </div>
               <div class="main-content">
                  <h4>Web Experts</h4>
                  <p>You can start learning HTML CSS by modifying free templates from our website too.</p>
                  <div class="main-button">
                     <a href="#">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('front.eschool.about_us')
<section class="section courses" id="courses" >
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
            <div class="section-heading">
               <h6>Latest Courses</h6>
               <h2>Latest Courses</h2>
            </div>
         </div>
      </div>
      <ul class="event_filter">
         <li>
            <a class="is_active" href="#!" data-filter="*">Show All</a>
         </li>
         <li>
            <a href="#!" data-filter=".design">Webdesign</a>
         </li>
         <li>
            <a href="#!" data-filter=".development">Development</a>
         </li>
         <li>
            <a href="#!" data-filter=".wordpress">Wordpress</a>
         </li>
      </ul>
      <div class="row event_box">
         <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
            <div class="events_item">
               <div class="thumb">
                  <a href="#"><img src="{{ asset('front/assets/images/course-01.jpg') }}" alt=""></a>
                  <span class="category">Webdesign</span>
                  <span class="price">
                     <h6><em>$</em>160</h6>
                  </span>
               </div>
               <div class="down-content">
                  <span class="author">Stella Blair</span>
                  <h4>Learn Web Design</h4>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6  development">
            <div class="events_item">
               <div class="thumb">
                  <a href="#"><img src="{{ asset('front/assets/images/course-02.jpg') }}" alt=""></a>
                  <span class="category">Development</span>
                  <span class="price">
                     <h6><em>$</em>340</h6>
                  </span>
               </div>
               <div class="down-content">
                  <span class="author">Cindy Walker</span>
                  <h4>Web Development Tips</h4>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design wordpress">
            <div class="events_item">
               <div class="thumb">
                  <a href="#"><img src="{{ asset('front/assets/images/course-03.jpg') }}" alt=""></a>
                  <span class="category">Wordpress</span>
                  <span class="price">
                     <h6><em>$</em>640</h6>
                  </span>
               </div>
               <div class="down-content">
                  <span class="author">David Hutson</span>
                  <h4>Latest Web Trends</h4>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 development">
            <div class="events_item">
               <div class="thumb">
                  <a href="#"><img src="{{ asset('front/assets/images/course-04.jpg') }}" alt=""></a>
                  <span class="category">Development</span>
                  <span class="price">
                     <h6><em>$</em>450</h6>
                  </span>
               </div>
               <div class="down-content">
                  <span class="author">Stella Blair</span>
                  <h4>Online Learning Steps</h4>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress development">
            <div class="events_item">
               <div class="thumb">
                  <a href="#"><img src="{{ asset('front/assets/images/course-05.jpg') }}" alt=""></a>
                  <span class="category">Wordpress</span>
                  <span class="price">
                     <h6><em>$</em>320</h6>
                  </span>
               </div>
               <div class="down-content">
                  <span class="author">Sophia Rose</span>
                  <h4>Be a WordPress Master</h4>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress design">
            <div class="events_item">
               <div class="thumb">
                  <a href="#"><img src="{{ asset('front/assets/images/course-06.jpg') }}" alt=""></a>
                  <span class="category">Webdesign</span>
                  <span class="price">
                     <h6><em>$</em>240</h6>
                  </span>
               </div>
               <div class="down-content">
                  <span class="author">David Hutson</span>
                  <h4>Full Stack Developer</h4>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="section testimonials">
   <div class="container">
      <div class="row">
         <div class="col-lg-7">
            <div class="owl-carousel owl-testimonials">
               <div class="item">
                  <p>“Please tell your friends or collegues about TemplateMo website. Anyone can access the website to download free templates. Thank you for visiting.”</p>
                  <div class="author">
                     <img src="{{ asset('front/assets/images/testimonial-author.jpg') }}" alt="">
                     <span class="category">Full Stack Master</span>
                     <h4>Claude David</h4>
                  </div>
               </div>
               <div class="item">
                  <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravid.”</p>
                  <div class="author">
                     <img src="{{ asset('front/assets/images/testimonial-author.jpg') }}" alt="">
                     <span class="category">UI Expert</span>
                     <h4>Thomas Jefferson</h4>
                  </div>
               </div>
               <div class="item">
                  <p>“Scholar is free website template provided by TemplateMo for educational related websites. This CSS layout is based on Bootstrap v5.3.0 framework.”</p>
                  <div class="author">
                     <img src="{{ asset('front/assets/images/testimonial-author.jpg') }}" alt="">
                     <span class="category">Digital Animator</span>
                     <h4>Stella Blair</h4>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-5 align-self-center">
            <div class="section-heading">
               <h6>TESTIMONIALS</h6>
               <h2>What they say about us?</h2>
               <p>You can search free CSS templates on Google using different keywords such as templatemo portfolio, templatemo gallery, templatemo blue color, etc.</p>
            </div>
         </div>
      </div>
   </div>
</div>
@include('front.eschool.events')
@include('front.eschool.teams')
@include('front.eschool.contact_us')
@endsection