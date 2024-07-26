<nav id="navbar" class="navbar navbar-light navbar-expand-lg sticky-top" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img style="height: 50px; width: 100px; margin-left: 180px;" class="navbar-brand" src="{{ asset('/images/logos/logo.png') }}" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-dark"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto  my-2 my-lg-0 navbar-nav-scroll" style="gap: 20px;  color: white;">
      <li class="nav-item" style="margin-left: 200px;">
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </li>
        <li class="nav-item" style="margin-left: 50px;">
          <a class="nav-link active home" aria-current="page" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link about" href="https://www.google.com">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link contact" href="https://www.google.com">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link contact" href="{{ url('/library') }}">E-Library</a>
        </li>
   
      </ul>
      @if(Auth::guard('student')->check())
      <div class="btn-group" style="margin-right: 80px;">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-regular fa-user"></i>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <li><a class="dropdown-item" href="#"><img class="rounded-circle" src="{{ asset('/images/student_images/'.Auth::guard('student')->user()->student_image) }}" alt="" style="width: 50px; height: 50px;"></a></li>
          <li><a class="dropdown-item" href="#">{{Auth::guard('student')->user()->first_name}}</a></li>
          <hr>
          <li><a class="dropdown-item" href="{{ url('/student/logout') }}">logout</a></li>
        </ul>
      </div>
      @else
      <li class="nav-item dropdown" style="margin-right: 80px;">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Login
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="{{ url('/student/login') }}">Student</a></li>
            <hr class="dropdown-divider">
            <li><a class="dropdown-item" href="https://www.google.com">Teacher</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="https://www.google.com">Admin</a></li>
          </ul>
        </li>
        @endif
    </div>
  </div>
</nav>
