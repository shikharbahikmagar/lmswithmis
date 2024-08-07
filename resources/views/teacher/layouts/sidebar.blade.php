      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/teacher/dashboard') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#teachers" aria-expanded="false" aria-controls="ui-basic"
          >
              <i class="icon-layout mdi mdi-worker" style="font-size: 20px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">My Details</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="teachers">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/teacher/view-details/'.Auth::guard('teacher')->user()->id) }}"
                @if(Session::get('page') == "teacher_details") 
                   style="background-color: #fff !important; color: #4B49AC !important;"
                  @else style="background-color: #4B49AC !important; color: #fff !important;" 
                  @endif>My Details</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/teacher/update-teacher-pwd/'.Auth::guard('teacher')->user()->id) }}"
                @if(Session::get('page') == "teacher_password") 
                   style="background-color: #fff !important; color: #4B49AC !important;"
                  @else style="background-color: #4B49AC !important; color: #fff !important;" 
                  @endif>Change Password</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/teacher/teacher-schedules') }}"
                @if(Session::get('page') == "teacher_schedules") 
                   style="background-color: #fff !important; color: #4B49AC !important;"
                  @else style="background-color: #4B49AC !important; color: #fff !important;" 
                  @endif>My Schedules</a></li>
              </ul>
            </div>
          </li>

        </ul>
      </nav>