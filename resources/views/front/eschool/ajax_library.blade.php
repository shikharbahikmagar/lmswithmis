@extends('front.eschool.library_layout')

@section('content')

<section class="section courses" id="courses" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h2>All Books</h2>
          </div>
        </div>
      </div>
      <ul class="event_filter">
        @foreach($book_categories as $category)
        <li>
          <a class="is_active filter_library_book" book_category_id="{{ $category['id'] }}" href="#!" data-filter="{{ $category['category_name'] }}">{{ $category['category_name'] }}</a>
        </li>
        @endforeach
      </ul>
     

     
    <div class="row event_box filtered_books">
            @foreach($books as $book)
            <div class="col-lg-3 align-self-center mb-30 mt-5 event_outer text-center books_container design {{ $book['categories']['category_name'] }}">
            <div class="events_item">
                <div class="thumb">
                <a href="{{ url('/books/'.$book['id']) }}"><img style="width: 180px; height: 180px; margin-left: 50px;" src="{{ asset('images/book_images/'.$book['book_image']) }}" alt=""></a>
                <span class="category">{{ $book['categories']['category_name'] }}</span>
                </div>
                <div class="down-content">
                <span class="author">{{ $book['author'] }}</span>
                    <h4 class="book-title ">{{ $book['title'] }}</h4>
                </div>
            </div>
            <span id="borrow-btn" style="background-color: white; color: rgba(122, 106, 216, 0.95);" type="button" class="btn btn-primary"><a href="{{ url('/books/'.$book['id']) }}">Borrow</a></span>
            </div>
            @endforeach
    </div>




      <div class="d-flex" style="margin-top: 100px;">
          {!! $books->links() !!}
      </div>

      </div>
</section>

@endsection