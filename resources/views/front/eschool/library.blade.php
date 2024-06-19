<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>E-LIBRARY</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/templatemo-scholar.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Header Area Start ***** -->
  @include('front.layouts.eschool_layouts.header')
  
  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
          @foreach($banners as $banner)
            <div class="item item-1" style="height: 400px; background-image: url('{{ asset('front/assets/banner_images/'.$banner['banner_image']) }}');">
              
              <div class="header-text" style="margin-top: 50px;">
                <h2>{{ $banner['title'] }}</h2>
                <p>{{ $banner['description'] }}</p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
<section class="section courses" id="courses" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h2>Latest Courses</h2>
          </div>
        </div>
      </div>
      <ul class="event_filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        @foreach($book_categories as $category)
        <li>
          <a class="is_active" href="#!" data-filter="{{ $category['category_name'] }}">{{ $category['category_name'] }}</a>
        </li>
        @endforeach
      </ul>
      <div class="row event_box">
        @foreach($books as $book)
        <div class="col-lg-2 col-md-6 align-self-center mb-30 event_outer col-md-6 text-center {{ $book['categories']['category_name'] }}">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img style="width: 300px; height: 200px;" src="{{ asset('images/book_images/'.$book['book_image']) }}" alt=""></a>
              <span class="category">{{ $book['categories']['category_name'] }}</span>
            </div>
            <div class="down-content">
              <span class="author">{{ $book['author'] }}</span>
                <h4>{{ $book['title'] }}</h4>
            </div>
          </div>
          <span id="borrow-btn" style="background-color: white; color: rgba(122, 106, 216, 0.95);" type="button" class="btn btn-primary">Borrow</span>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  @include('front.layouts.eschool_layouts.footer')

  
  <script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('front/assets/js/isotope.min.js') }}"></script>
  <script src="{{ asset('front/assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('front/assets/js/counter.js') }}"></script>
  <script src="{{ asset('front/assets/js/custom.js') }}"></script>
  <script src="{{ asset('front/assets/js/notice_script.js') }}"></script>

  </body>
</html>