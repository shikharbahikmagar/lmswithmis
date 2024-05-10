<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>front</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/styles-merged.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/note_board.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/custom.css') }}">
</head>
  <body>
    
    <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>
    
    <div class="probootstrap-page-wrapper">

    @include('layouts.eschool_layouts.header')
    @yield('content')

    @include('layouts.eschool_layouts.footer') 

    </div>
  
    <script src="{{ asset('front/js/scripts.min.js') }}"></script>
    <script src="{{ asset('front/js/main.min.js') }}"></script>
    <script src="{{ asset('front/js/custom.js') }}"></script>

  </body>
</html>