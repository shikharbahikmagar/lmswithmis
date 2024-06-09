<div class="team section" id="team">
    <div class="container">
      <div class="row">
        @foreach($teachers as $teacher)
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img class="rounded-circle" src="{{ asset('images/teacher_images/'.$teacher['teacher_image']) }}" alt="">
              <span class="category">{{ $teacher['department'] }}</span>
              <h4>{{ $teacher['first_name'] }} {{ $teacher['last_name'] }}</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div> 