@extends('student.layouts.layout')

@section('content')
   <div class="row">
      <div class="col-xl-8">
         <div class="card">
            <div class="card-body pb-0">
               <div class="row align-items-center">
                  <div class="col-md-3">
                     <div class="text-center border-end">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-fluid avatar-xxl rounded-circle" alt>
                        <h4 class="text-primary font-size-20 mt-3 mb-2">Jansh Wells</h4>
                        <h5 class="text-muted font-size-13 mb-0">Web Designer</h5>
                     </div>
                  </div>
                  <div class="col-md-9">
                     <div class="ms-3">
                        <div>
                           <h4 class="card-title mb-2">Biography</h4>
                           <p class="mb-0 text-muted">Hi I'm Jansh,has been the industry's standard
                              dummy text To an English person alteration text.
                           </p>
                        </div>
                        <div class="row my-4">
                           <div class="col-md-12">
                              <div>
                                 <p class="text-muted mb-2 fw-medium"><i class="mdi mdi-email-outline me-2"></i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f1bb909f829986949d9d82b181839e939892df929e9c">[email&#160;protected]</a></p>
                                 <p class="text-muted fw-medium mb-0"><i class="mdi mdi-phone-in-talk-outline me-2"></i>418-955-4703</p>
                              </div>
                           </div>
                        </div>
                        <ul class="nav nav-tabs nav-tabs-custom border-bottom-0 mt-3 nav-justfied" role="tablist">
                           <li class="nav-item" role="presentation">
                              <a class="nav-link px-4 " href="https://bootdey.com/snippets/view/profile-projects" target="__blank">
                              <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                              <span class="d-none d-sm-block">Projects</span>
                              </a>
                           </li>
                           <li class="nav-item" role="presentation">
                              <a class="nav-link px-4 active" data-bs-toggle="tab" href="#tasks-tab" role="tab" aria-selected="false" tabindex="-1">
                              <span class="d-block d-sm-none"><i class="mdi mdi-menu-open"></i></span>
                              <span class="d-none d-sm-block">Tasks</span>
                              </a>
                           </li>
                           <li class="nav-item" role="presentation">
                              <a class="nav-link px-4 " href="https://bootdey.com/snippets/view/profile-with-team-section" target="__blank">
                              <span class="d-block d-sm-none"><i class="mdi mdi-account-group-outline"></i></span>
                              <span class="d-none d-sm-block">Team</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            @yield('ajax_page')
         </div>
      </div>
      <div class="col-xl-4">
         <div class="card">
            <div class="card-body">
               <div class="pb-2">
                  <h4 class="card-title mb-3">About</h4>
                  <p>Hi I'm Jansh, has been the industry's standard dummy text To an English
                     person, it will seem like
                     simplified.
                  </p>
                  <ul class="ps-3 mb-0">
                     <li>it will seem like simplified.</li>
                     <li>To achieve this, it would be necessary to have uniform pronunciation</li>
                  </ul>
               </div>
               <hr>
               <div class="pt-2">
                  <h4 class="card-title mb-4">My Skill</h4>
                  <div class="d-flex gap-2 flex-wrap">
                     <span class="badge badge-soft-secondary p-2">HTML</span>
                     <span class="badge badge-soft-secondary p-2">Bootstrap</span>
                     <span class="badge badge-soft-secondary p-2">Scss</span>
                     <span class="badge badge-soft-secondary p-2">Javascript</span>
                     <span class="badge badge-soft-secondary p-2">React</span>
                     <span class="badge badge-soft-secondary p-2">Angular</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-body">
               <div>
                  <h4 class="card-title mb-4">Personal Details</h4>
                  <div class="table-responsive">
                     <table class="table table-bordered mb-0">
                        <tbody>
                           <tr>
                              <th scope="row">Name</th>
                              <td>Jansh Wells</td>
                           </tr>
                           <tr>
                              <th scope="row">Location</th>
                              <td>California, United States</td>
                           </tr>
                           <tr>
                              <th scope="row">Language</th>
                              <td>English</td>
                           </tr>
                           <tr>
                              <th scope="row">Website</th>
                              <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="84e5e6e7b5b6c4f4f6ebe6ede7aae7ebe9">[email&#160;protected]</a></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-body">
               <div>
                  <h4 class="card-title mb-4">Work Experince</h4>
                  <ul class="list-unstyled work-activity mb-0">
                     <li class="work-item" data-date="2020-21">
                        <h6 class="lh-base mb-0">ABCD Company</h6>
                        <p class="font-size-13 mb-2">Web Designer</p>
                        <p>To achieve this, it would be necessary to have uniform grammar, and more
                           common words.
                        </p>
                     </li>
                     <li class="work-item" data-date="2019-20">
                        <h6 class="lh-base mb-0">XYZ Company</h6>
                        <p class="font-size-13 mb-2">Graphic Designer</p>
                        <p class="mb-0">It will be as simple as occidental in fact, it will be
                           Occidental person, it will seem like simplified.
                        </p>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection