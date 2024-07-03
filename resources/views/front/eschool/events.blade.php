<div class="section events" id="events">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Schedule</h6>
            <h2>Upcoming Events</h2>
          </div>
        </div>
        @foreach($events as $event)
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="{{ asset('/images/event_banners/'.$event['event_banner']) }}" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">{{ $event['event_categories']['category_name'] }}</span>
                    <h4>{{$event['title']}}</h4>
                  </li>
                  <li>
                    <span>Date:</span>
                    <h6>{{ $event['event_date'] }}</h6>
                  </li>
                  <li>
                    <span>Duration:</span>
                    <h6>{{ $event['duration'] }}</h6>
                  </li>
                  <li>
                    <span>Location:</span>
                    <h6>{{ $event['location'] }}</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>