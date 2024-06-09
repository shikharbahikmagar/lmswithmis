<!doctype html>
<html lang="en">
   <head>
      <title>TEACHER|LOGIN</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="{{ asset('login_form/css/style.css') }}">
   </head>
   <body>
      <section class="ftco-section">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-6 col-lg-5">
                  <div class="login-wrap p-4 p-md-5">
                     <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-user-o"></span>
                     </div>
                     <h3 class="text-center mb-4">TEACHER LOGIN</h3>
                     <form action="{{ url('/teacher/login') }}" method="post" class="login-form">
                        @csrf
                        <div class="form-group">
                           <input type="text" class="form-control rounded-left" id="email" name="email" placeholder="email address" required>
                        </div>
                        <div class="form-group d-flex">
                           <input type="password" class="form-control rounded-left" id="password" name="password" placeholder="password" required>
                        </div>
                        <div class="form-group d-md-flex">
                           <div class="w-50">
                              <label class="checkbox-wrap checkbox-primary">Remember Me
                              <input type="checkbox" checked>
                              <span class="checkmark"></span>
                              </label>
                           </div>
                        </div>
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Login</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script src="{{ asset('login_form/js/jquery.min.js') }}"></script>
      <script src="{{ asset('login_form/js/popper.js') }}"></script>
      <script src="{{ asset('login_form/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('login_form/js/main.js') }}"></script>
   </body>
</html>