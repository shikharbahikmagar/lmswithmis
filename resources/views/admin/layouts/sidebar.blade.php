      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="true" aria-controls="ui-basic"
            @if(Session::get('page') == "update_details" || Session::get('page') == "update_password") 
            style="background-color: #4B49AC !important; color: #fff !important;" @else
             style="background-color: #fff !important; color: #4B49AC; !important;" @endif>
              <i class="icon-layout menu-icon" style=""></i>
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
              <i class="icon-columns menu-icon"></i>
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
                  @endif>Books</a></li>
              </ul>
            </div>
          </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title">Subjects</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                  
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/admin/subjects') }}">Subjects</a></li>
                </ul>
              </div>
            </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">School</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('admin/grades') }}">Classes</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
              </ul>
            </div>
          </li>

        </ul>
      </nav>