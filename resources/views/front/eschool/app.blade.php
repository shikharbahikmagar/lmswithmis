@extends('layouts.eschool_layouts.layout')
@section('content')
        

      <section class="flexslider">
        <ul class="slides">
          <li style="background-image: url('{{ asset('front/img/slider_5.jpg') }}');" class="overlay">
          </li>
          <li style="background-image: url('{{ asset('front/img/slider_5.jpg') }}');" class="overlay">  
          </li>
          <li style="background-image: url('{{ asset('front/img/slider_5.jpg') }}');" class="overlay"> 
          </li>
        </ul>
      </section>
      <section class="probootstrap-section" id="probootstrap-counter">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-users2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="20203" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">Students Enrolled</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-user-tie"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="139" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">Certified Teachers</span>
                </div>
              </div>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-library"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="99" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                  <span class="probootstrap-counter-label">Passing to Universities</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
               
               <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-smile2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                  <span class="probootstrap-counter-label">Parents Satisfaction</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-color: DodgerBlue">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
              <h2 class="mb0">Highlights</h2>
            </div>
          </div>
        </div>
        <div class="probootstrap-tab-style-1">
          <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
            <li class="active"><a data-toggle="tab" href="#featured-news">Featured News</a></li>
            <li><a data-toggle="tab" href="#upcoming-events">Upcoming Events</a></li>
          </ul>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              
              <div class="tab-content">

                <div id="featured-news" class="tab-pane fade in active">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl1">
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="{{ asset('front/img/img_sm_3.jpg') }}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, ut.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              
                            </div>
                          </a>
                        </div>
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="{{ asset('front/img/img_sm_1.jpg') }}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, officia.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              
                            </div>
                          </a>
                        </div>
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="{{ asset('front/img/img_sm_2.jpg') }}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, dolores.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              
                            </div>
                          </a>
                        </div>
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="{{ asset('front/img/img_sm_3.jpg') }}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, earum.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              
                              
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- END row -->
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <p><a href="#" class="btn btn-primary">View all news</a></p>  
                    </div>
                  </div>
                </div>
                <div id="upcoming-events" class="tab-pane fade">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl2">
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="{{ asset('front/img/img_sm_3.jpg') }}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                            </div>
                          </a>
                        </div>
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="{{ asset('front/img/img_sm_1.jpg') }}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                            </div>
                          </a>
                        </div>
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="{{ asset('front/img/img_sm_2.jpg') }}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                            </div>
                          </a>
                        </div>
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="{{ asset('front/img/img_sm_3.jpg') }}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tempora consectetur unde nisi</h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <p><a href="#" class="btn btn-primary">View all events</a></p>  
                    </div>
                  </div>
                </div>

              </div>
            
            </div>
          </div>
        </div>
      </section>     
      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Meet Our Qualified Teachers</h2>
              <p class="lead">Sed a repudiandae impedit voluptate nam Deleniti dignissimos perspiciatis nostrum porro nesciunt</p>
            </div>
          </div>
          <!-- END row -->

          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="{{ asset('front/img/person_1.jpg') }}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Chris Worth</h3>
                  <p>Physical Education</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="{{ asset('front/img/person_5.jpg') }}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Janet Morris</h3>
                  <p>English Teacher</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="{{ asset('front/img/person_6.jpg') }}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Linda Reyez</h3>
                  <p>Math Teacher</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="{{ asset('front/img/person_7.jpg') }}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Jessa Sy</h3>
                  <p>Physics Teacher</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>

@endsection