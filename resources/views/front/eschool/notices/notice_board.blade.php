
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
    <div class="modal fade" id="addnotesmodal" tabindex="-1" role="dialog" aria-labelledby="addnotesmodalTitle" style="display: none;" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content border-0">
             <div class="modal-header bg-info text-white">
                <h5 class="modal-title text-white">Add Notes</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
             </div>
             <div class="modal-body">
                <div class="notes-box">
                   <div class="notes-content">
                      <form action="javascript:void(0);" id="addnotesmodalTitle">
                         <div class="row">
                            <div class="col-md-12 mb-3">
                               <div class="note-title">
                                  <label>Note Title</label>
                                  <input type="text" id="note-has-title" class="form-control" minlength="25" placeholder="Title" />
                               </div>
                            </div>
                            <div class="col-md-12">
                               <div class="note-description">
                                  <label>Note Description</label>
                                  <textarea id="note-has-description" class="form-control" minlength="60" placeholder="Description" rows="3"></textarea>
                               </div>
                            </div>
                         </div>
                      </form>
                   </div>
                </div>
             </div>
             <div class="modal-footer">
                <button id="btn-n-save" class="float-left btn btn-success" style="display: none;">Save</button>
                <button class="btn btn-danger" data-dismiss="modal">Discard</button>
                <button id="btn-n-add" class="btn btn-info" disabled="disabled">Add</button>
             </div>
          </div>
       </div>
    </div>
 </div>