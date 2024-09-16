<div class="tab-content bg-transparent filtered_notices">
       <div id="note-full-container" class="note-has-grid row">
         @foreach($notices as $notice)
          <div class="col-md-4 single-note-item all-category" style>
             <div class="card card-body">
                <span class="side-stick"></span>
                <a href="{{ url('/notice/'.$notice['url']) }}">
                <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie">{{ $notice['title'] }}<i class="point ml-1 font-10"></i></h5>
                <p class="note-date font-12 text-muted">{{ \Carbon\Carbon::parse($notice['created_at'])->diffForHumans() }}</p>
                <div class="note-content">
                   <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">{{ $notice['description'] }}</p>
                   </a>
                </div>
             </div>
          </div>
          @endforeach
       </div>
</div>