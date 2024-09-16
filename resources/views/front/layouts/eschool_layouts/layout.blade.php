<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
      <title>School</title>
      <!-- Bootstrap core CSS -->
      <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      @notifyCss
      <!-- Additional CSS Files -->
      <link rel="stylesheet" href="{{ asset('front/assets/css/fontawesome.css') }}">
      <link rel="stylesheet" href="{{ asset('front/assets/css/notice_style.css') }}">
      <link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}">
      <link rel="stylesheet" href="{{ asset('front/assets/css/user_profile.css') }}">
      <link rel="stylesheet" href="{{ asset('front/assets/css/templatemo-scholar.css') }}">
      <link rel="stylesheet" href="{{ asset('front/assets/css/owl.css') }}">
      <link rel="stylesheet" href="{{ asset('front/assets/css/animate.css') }}">
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
      <!-- ***** Preloader End ***** -->
      @include('front.layouts.eschool_layouts.header')
      @include('front.layouts.eschool_layouts.banners')
      @yield('content')
      @include('front.layouts.eschool_layouts.footer')
      @include('notify::components.notify')
      <!-- Scripts -->
      <!-- Bootstrap core JavaScript -->
      <script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('front/assets/js/isotope.min.js') }}"></script>
      <script src="{{ asset('front/assets/js/owl-carousel.js') }}"></script>
      <script src="{{ asset('front/assets/js/counter.js') }}"></script>
      <script src="{{ asset('front/assets/js/custom.js') }}"></script>
      <script src="{{ asset('front/assets/js/front_script.js') }}"></script>
      <script src="{{ asset('front/assets/js/notice_script.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      @if(Session::has('toast_message'))
      @notifyJs
      <script>
         toastr.options = {
           "closeButton": true,
           "progressBar": true,
           "showEasing": "swing",
           "positionClass": "toast-bottom-full-width",
             timeOut: 2000,
         }
           toastr.success("{{ Session::get('toast_message') }}");
      </script>
      @endif
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <nav id="navbar" class="navbar navbar-light navbar-expand-lg">
      <div class="container-fluid">
   </body>
</html>