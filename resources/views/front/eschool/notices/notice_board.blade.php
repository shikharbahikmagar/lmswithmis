
<div class="page-content container note-has-grid" style="margin-top: 100px;">
    <ul class="nav nav-pills p-3 bg-white mb-3 rounded-pill align-items-center">
       <li class="nav-item">
          <a href="javascript:void(0)" notice_cat_id = "all" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2 active notice_filter" id="all-category">
          <i class="icon-layers mr-1"></i><span class="d-none d-md-block">All Notes</span>
          </a>
       </li>
       @foreach($noticeCategories as $category)
       <li class="nav-item">
          <a href="javascript:void(0)" notice_cat_id = "{{ $category['id'] }}" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2 notice_filter" id="note-business"> <i class="icon-briefcase mr-1"></i><span class="d-none d-md-block">{{ $category['category_name'] }}</span></a>
       </li>
       @endforeach
    </ul>
      @include('front.eschool.notices.ajax_notice_board')

 </div>