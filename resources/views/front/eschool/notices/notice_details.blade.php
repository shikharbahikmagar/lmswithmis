<!-- About 1 - Bootstrap Brain Component -->
@extends('front.layouts.eschool_layouts.layout')
@section('content')

<div class="text-center" style="margin-top: 50px;">
  <h1>Notice Details</h1>
</div>


<!-- About 3 - Bootstrap Brain Component -->
<section class="py-3 py-md-5">
<div class="container overflow-hidden">
    <div class="row gy-2 gy-md-0 justify-content-xxl-center">
      <div class="col-12 order-md-1 col-md-8 col-xxl-6">
        <div class="text-center text-md-start">
          <h2 class="display-3 fw-bold">{{ $notice_details['title'] }}</h2>
          <p class="text-secondary fs-4 mb-2">{{ $notice_details['notice_categories']['category_name'] }}</p> <p class="note-date font-12 text-muted">{{ \Carbon\Carbon::parse($notice_details['created_at'])->diffForHumans() }}</p>
          <hr class="w-25 mx-auto ms-md-0 mb-4 text-secondary">
          <p>{{ $notice_details['description'] }}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container mb-4 mb-md-5 mt-5">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-xxl-8">
        <img class="img-fluid rounded shadow" loading="lazy" src="{{ url('/files/notice_files/'.$notice_details['attachment']) }}" alt="About 3">
      </div>
    </div>
  </div>


</section>


@endsection