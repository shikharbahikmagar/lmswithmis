      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/dashboard') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          @if(Auth::guard('admin')->user()->type == 'admin' || Auth::guard('admin')->user()->type == 'subadmin') 
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
               <i class="icon-layout mdi mdi-account-star" style="font-size: 20px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Admin Settings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/admin/update-admin-pwd') }}"
                @if(Session::get('page') == "update_password") 
                   style="background-color: #fff !important; color: #4B49AC !important;"
                  @else style="background-color: #4B49AC !important; color: #fff !important;" 
                  @endif>Update Password</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/admin/update-admin-details') }}"
                @if(Session::get('page') == "update_details") 
                  style="background-color: #fff !important; color: #4B49AC !important;"
                  @else style="background-color: #4B49AC !important; color: #fff !important;" 
                  @endif>Update Details</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements"
            @if(Session::get('page') == "book_category" || Session::get('page') == "books") 
            style="background-color: #4B49AC !important; color: #fff !important;" @endif>
              <i class="icon-columns mdi mdi-library" style="font-size: 20px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Library</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{ url('/admin/categories') }}"
                @if(Session::get('page') == "book_category") 
                  style="background-color: #fff !important; color: #4B49AC !important;"
                  @else style="background-color: #4B49AC !important; color: #fff !important;" 
                  @endif>Book Category</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/admin/books') }}"
                @if(Session::get('page') == "books") 
                  style="background-color: #fff !important; color: #4B49AC !important;"
                  @else style="background-color: #4B49AC !important; color: #fff !important;" 
                  @endif>Library Books</a></li>
              </ul>
            </div>
          </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false">
                <i class="icon-bar-graph mdi mdi-book-open-page-variant" style="font-size: 20px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                <span class="menu-title">Class Books</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                  
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/admin/subjects') }}"
                   @if(Session::get('page') == "subjects") 
                  style="background-color: #fff !important; color: #4B49AC !important;"
                  @else style="background-color: #4B49AC !important; color: #fff !important;" 
                  @endif>Books</a></li>
                </ul>
              </div>
            </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 mdi mdi-school" style="font-size: 20px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">School</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('admin/grades') }}"
                 @if(Session::get('page') == "grades") 
                  style="background-color: #fff !important; color: #4B49AC !important;"
                  @else style="background-color: #4B49AC !important; color: #fff !important;" 
                  @endif>Classes</a></li>
              </ul>
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#teachers" aria-expanded="false" aria-controls="ui-basic"
          >
              <i class="icon-layout mdi mdi-worker" style="font-size: 20px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Teacher Details</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="teachers">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/admin/teachers') }}"
                @if(Session::get('page') == "teachers_details") 
                   style="background-color: #fff !important; color: #4B49AC !important;"
                  @else style="background-color: #4B49AC !important; color: #fff !important;" 
                  @endif>Teachers Details</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/admin/teacher-schedules') }}"
                @if(Session::get('page') == "teacher_schedules") 
                   style="background-color: #fff !important; color: #4B49AC !important;"
                  @else style="background-color: #4B49AC !important; color: #fff !important;" 
                  @endif>Teacher Schedules</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
               <i class="mdi mdi-account-card-details" style="font-size: 20px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Student Details</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('admin/students') }}"
                @if(Session::get('page') == "students") 
                   style="background-color: #fff !important; color: #4B49AC !important;"
                  @else style="background-color: #4B49AC !important; color: #fff !important;" 
                  @endif>Student Details</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Notices</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/admin/notice-categories') }}"
                 @if(Session::get('page') == "notice_categories") 
                   style="background-color: #fff !important; color: #4B49AC !important;"
                  @else style="background-color: #4B49AC !important; color: #fff !important;" 
                  @endif> Notice Category </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/admin/notices') }}"
                   @if(Session::get('page') == "notices") 
                   style="background-color: #fff !important; color: #4B49AC !important;"
                  @else style="background-color: #4B49AC !important; color: #fff !important;" 
                  @endif> Notices </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#banner" aria-expanded="false" aria-controls="banner">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Banners</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="banner">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/admin/banners') }}"
                 @if(Session::get('page') == "banners") 
                   style="background-color: #fff !important; color: #4B49AC !important;"
                  @else style="background-color: #4B49AC !important; color: #fff !important;" 
                  @endif> Banners</a></li>
              </ul>
            </div>
          </li>
          @endif
        </ul>
      </nav>