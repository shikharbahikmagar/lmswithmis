<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>E-LIBRARY</title>
    @notifyCss
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/templatemo-scholar.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/carousel.css') }}">
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
<!-- 
  <div class="container text-center my-3">
		<div class="row mx-auto my-auto justify-content-center">
			<div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner" role="listbox">
          @foreach($books as $book)
					<div class="carousel-item active" >
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="{{ asset('images/book_images/'.$book['book_image']) }}" style="height: 200px;" class="img-fluid">
								</div>
								<div class="card-img-overlay">Slide 1</div>
							</div>
						</div>
					</div>
        @endforeach
				</div>
				<a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				</a>
				<a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
				</a>
			</div>
		</div>		
	</div> -->

<section class="section courses" id="courses" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h2>All Books</h2>
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
        <div class="col-lg-3 col-md-6 align-self-center mb-30 mt-5 event_outer col-md-6 text-center books_container design {{ $book['categories']['category_name'] }}">
          <div class="events_item">
            <div class="thumb">
              <a href="{{ url('/books/'.$book['id']) }}"><img style="width: 180px; height: 180px; margin-left: 50px;" src="{{ asset('images/book_images/'.$book['book_image']) }}" alt=""></a>
              <span class="category">{{ $book['categories']['category_name'] }}</span>
            </div>
            <div class="down-content">
              <span class="author">{{ $book['author'] }}</span>
                <h4 class="book-title ">{{ $book['title'] }}</h4>
            </div>
          </div>
          <span id="borrow-btn" style="background-color: white; color: rgba(122, 106, 216, 0.95);" type="button" class="btn btn-primary"><a href="{{ url('/books/'.$book['id']) }}">Borrow</a></span>
        </div>
        @endforeach
      </div>

      <div class="d-flex" style="margin-top: 100px;">
          {!! $books->links() !!}
      </div>
    </div>
  </section>
  @include('notify::components.notify')
  @include('front.layouts.eschool_layouts.footer')

  
  <script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('front/assets/js/isotope.min.js') }}"></script>
  <script src="{{ asset('front/assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('front/assets/js/counter.js') }}"></script>
  <script src="{{ asset('front/assets/js/custom.js') }}"></script>
  <script src="{{ asset('front/assets/js/notice_script.js') }}"></script>
  <script src="{{ asset('front/assets/js/carousel.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  @notifyJs
  


  </body>
</html>