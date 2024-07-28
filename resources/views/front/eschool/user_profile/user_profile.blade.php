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
      <section style="background-color: #eee;">
         <div class="container py-5">
            <div class="row">
               <div class="col">
                  <nav aria-label="breadcrumb" class="bg-body-tertiary rounded-3 p-3 mb-4">
                     <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Profile</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                     </ol>
                  </nav>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4">
                  <div class="card mb-4">
                     <div class="card-body text-center">
                        <img src="{{ asset('/images/student_images/'.$student_details['student_image']) }}" alt="avatar"
                           class="rounded-circle img-fluid" style="width: 150px; height: 150px; margin-left: 110px;">
                        <h5 class="my-3">{{ $student_details['first_name'] }} {{ $student_details['middle_name'] }} {{ $student_details['last_name'] }}</h5>
                        <p class="text-muted mb-1">{{ $student_details['gender'] }}</p>
                        <p class="text-muted mb-4">{{ $student_details['address'] }}</p>
                        <div class="d-flex justify-content-center mb-2">
                           <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Follow</button>
                           <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary ms-1">Message</button>
                        </div>
                     </div>
                  </div>
                  <div class="card mb-4 mb-lg-0">
                     <div class="card-body p-0">
                        <ul class="list-group list-group-flush rounded-3">
                           <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                              <i class="fas fa-globe fa-lg text-warning"></i>
                              <p class="mb-0">https://mdbootstrap.com</p>
                           </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                              <i class="fab fa-github fa-lg text-body"></i>
                              <p class="mb-0">mdbootstrap</p>
                           </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                              <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                              <p class="mb-0">@mdbootstrap</p>
                           </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                              <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                              <p class="mb-0">mdbootstrap</p>
                           </li>
                           <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                              <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                              <p class="mb-0">mdbootstrap</p>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="card mb-4">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-sm-3">
                              <p class="mb-0">Full Name:</p>
                           </div>
                           <div class="col-sm-9">
                              <p class="text-muted mb-0">{{ $student_details['first_name'] }} {{ $student_details['middle_name'] }} {{ $student_details['last_name'] }}</p>
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-sm-3">
                              <p class="mb-0">Email:</p>
                           </div>
                           <div class="col-sm-9">
                              <p class="text-muted mb-0">{{ $student_details['email'] }}</p>
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-sm-3">
                              <p class="mb-0">Parent Name:</p>
                           </div>
                           <div class="col-sm-9">
                              <p class="text-muted mb-0">{{ $student_details['parent_name'] }}</p>
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-sm-3">
                              <p class="mb-0">Parent Mobile:</p>
                           </div>
                           <div class="col-sm-9">
                              <p class="text-muted mb-0">{{ $student_details['parent_contact'] }}</p>
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-sm-3">
                              <p class="mb-0">Address:</p>
                           </div>
                           <div class="col-sm-9">
                              <p class="text-muted mb-0">{{ $student_details['address'] }}</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="card mb-4 mb-md-0">
                           <div class="card-body">
                              <p class="mb-4"><span class="text-primary font-italic me-1">Update</span> Details
                              </p>
                              <form action="{{ url('/student/update-details/'.$student_details['id']) }}" method="post" enctype="multipart/form-data">@csrf
                                 <div class="row g-3 align-items-center">
                                    <div class="col-auto">
                                       <label for="email" class="col-form-label">Email:</label>
                                    </div>
                                    <div class="col-auto">
                                       <input type="text" id="email" style="background-color: lightgray;" class="form-control" aria-describedby="passwordHelpInline" value="{{ $student_details['email'] }}" readonly="">
                                    </div>
                                    <div class="col-auto">
                                       <label for="address" class="col-form-label">Address:</label>
                                    </div>
                                    <div class="col-auto">
                                       <input type="text" id="address" name="address" class="form-control" aria-describedby="passwordHelpInline" value="{{ $student_details['address'] }}">
                                    </div>
                                    <div class="col-auto">
                                       <label for="parent_contact" class="col-form-label">Parent Contact:</label>
                                    </div>
                                    <div class="col-auto">
                                       <input type="text" id="parent_contact" name="parent_contact" class="form-control" aria-describedby="passwordHelpInline" value="{{ $student_details['parent_contact'] }}">
                                    </div>
                                    <div class="col-auto">
                                       <label for="student_image" class="col-form-label">Update Profile:</label>
                                    </div>
                                    <div class="col-auto">
                                       <input type="file" id="student_image" name="student_image" class="form-control" aria-describedby="passwordHelpInline" >
                                    </div>
                                    <input type="hidden" name="student_current_image" id="student_current_image" value="{{ $student_details['student_image'] }}">
                              
                                    <div class="col-auto">
                                       <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="card mb-4 mb-md-0">
                           <div class="card-body">
                              <p class="mb-4"><span class="text-primary font-italic me-1">Update</span> Password
                              </p>
                              <form action="{{ url('/student/update-password/'.$student_details['id']) }}" method="post">@csrf
                                 <div class="row g-3 align-items-center">
                                    <div class="col-auto">
                                       <label for="current_password" class="col-form-label">Current Password:</label>
                                    </div>
                                    <div class="col-auto">
                                       <input type="password" id="current_password" name="current_password" class="form-control" aria-describedby="passwordHelpInline" placeholder="Enter current password">
                                       <p id="chkCurrentPwdStd"></p>
                                    </div>
                                   
                                    <div class="col-auto">
                                       <label for="new_password" class="col-form-label">New Password:</label>
                                    </div>
                                    <div class="col-auto">
                                       <input type="password" id="new_password" name="new_password" class="form-control" aria-describedby="passwordHelpInline" placeholder="Enter new password">
                                    </div>
                                    <div class="col-auto">
                                       <label for="confirm_password" class="col-form-label">Confirm Password:</label>
                                    </div>
                                    <div class="col-auto">
                                       <input type="password" id="confirm_password" name="confirm_password" class="form-control" aria-describedby="passwordHelpInline" placeholder="Enter new password again">
                                    </div>
                                    <div class="col-auto">
                                       <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
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
      <script src="{{ asset('front/assets/js/front_script.js') }}"></script>
      <script src="{{ asset('front/assets/js/notice_script.js') }}"></script>
      <script src="{{ asset('front/assets/js/carousel.js') }}"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      @notifyJs
   </body>
</html>