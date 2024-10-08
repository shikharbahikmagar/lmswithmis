<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>E-LIBRARY</title>

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

  <div class="text-center" style="margin-top: 50px;">
  <h1>Book Details</h1>
  <hr>
</div>

<nav aria-label="breadcrumb" style="margin-top: 50px; margin-left: 300px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Books</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $book_details['title'] }}</li>
  </ol>
</nav>

<section class="py-5">
  <div class="container">
    <div class="row gx-5">
      <aside class="col-lg-6">
        <div class="border rounded-4 mb-3 d-flex justify-content-center">
          <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/detail1/big.webp">
            <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="{{ asset('images/book_images/'.$book_details['book_image']) }}" />
          </a>
        </div>

        <!-- thumbs-wrap.// -->
        <!-- gallery-wrap .end// -->
      </aside>
      <main class="col-lg-6">
        <div class="ps-lg-3">
          <h4 class="title text-dark">
            {{ $book_details['title'] }}
          </h4>
          <div class="d-flex flex-row my-3">
            <div class="text-warning mb-1 me-2">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <span class="ms-1">
                4.5
              </span>
            </div>
            <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154 orders</span>
            <span class="text-success ms-2">In stock</span>
          </div>

          <p>
            {{ $book_details['description'] }}
          </p>

          <hr>

          <div class="row">
            <dt class="col-3">Author :</dt>
            <dd class="col-9">{{$book_details['author']}}</dd>

            <dt class="col-3">Category :</dt>
            <dd class="col-9">{{ $book_details['categories']['category_name'] }}</dd>

            <dt class="col-3">ISBN :</dt>
            <dd class="col-9">{{ $book_details['isbn_no'] }}</dd>

            <dt class="col-3">Brand</dt>
            <dd class="col-9">Reebook</dd>
          </div>

          <hr />
        <form action="{{ url('/book-request/'.$book_details['id']) }}" method="post">@csrf
          <div class="row mb-4">
            <div class="col-md-4 col-6">
              <label class="mb-2">Select Date</label>
              <input type="date" name="">
            </div>

          </div>
          <button type="submit" class="btn btn-warning shadow-0">Borrow</button>
          <a href="#" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i class="me-1 fa fa-heart fa-lg"></i> Save </a>

          </form>
        </div>
      </main>
    </div>
  </div>
</section>
<!-- content -->

<section class="bg-light border-top py-4">
  <div class="container">
    <div class="row gx-4">
      <div class="col-lg-8 mb-4">
        <div class="border rounded-2 px-3 py-2 bg-white">
          <!-- Pills navs -->
          <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item d-flex" role="presentation">
              <a class="nav-link d-flex align-items-center justify-content-center w-100 active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab" aria-controls="ex1-pills-1" aria-selected="true">Specification</a>
            </li>
          </ul>
          <hr>
          <!-- Pills navs -->

          <!-- Pills content -->
          <div class="tab-content" id="ex1-content">
            <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
              <table class="table border mt-3 mb-2">
                <tr>
                  <th class="py-2">Title:</th>
                  <td class="py-2"> {{ $book_details['title'] }}</td>
                </tr>
                <tr>
                  <th class="py-2">Author:</th>
                  <td class="py-2"> {{ $book_details['author'] }}</td>
                </tr>
                <tr>
                  <th class="py-2">Category:</th>
                  <td class="py-2"> {{ $book_details['categories']['category_name'] }}</td>
                </tr>
                <tr>
                  <th class="py-2">ISBN</th>
                  <td class="py-2">{{ $book_details['isbn_no'] }}M</td>
                </tr>
              </table>
            </div>
            <div class="tab-pane fade mb-2" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
              Tab content or sample information now <br />
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
              officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
              nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            </div>
            <div class="tab-pane fade mb-2" id="ex1-pills-3" role="tabpanel" aria-labelledby="ex1-tab-3">
              Another tab content or sample information now <br />
              Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
              commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
              mollit anim id est laborum.
            </div>
            <div class="tab-pane fade mb-2" id="ex1-pills-4" role="tabpanel" aria-labelledby="ex1-tab-4">
              Some other tab content or sample information now <br />
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
              officia deserunt mollit anim id est laborum.
            </div>
          </div>
          <!-- Pills content -->
        </div>
      </div>
      <div class="col-lg-4">
        <div class="px-0 border rounded-2 shadow-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Similar items</h5>
              @foreach($relatedBooks as $book)
              <div class="d-flex mb-3">
                <a href="#" class="me-3">
                  <img src="{{ asset('/images/book_images/'.$book['book_image']) }}" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                </a>
                <div class="info">
                  <a href="#" class="nav-link mb-1">
                   {{$book['title']}}
                  </a>
                  <strong class="text-dark"> $38.90</strong>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
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
<script src="{{ asset('front/assets/js/carousel.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>