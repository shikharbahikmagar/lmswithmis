<div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
          @foreach($banners as $banner)
            <div class="item item-1" style="height: 550px; background-image: url('{{ asset('front/assets/banner_images/'.$banner['banner_image']) }}');">
              
              <div class="header-text" style="margin-top: 50px;">
                <h2>{{ $banner['title'] }}</h2>
                <p>{{ $banner['description'] }}</p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>