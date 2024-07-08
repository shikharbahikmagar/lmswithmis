@extends('student.dashboard')
@section('ajax_page')
<div class="tab-content p-4">
<div class="tab-pane active show" id="team-tab" role="tabpanel">
   <h4 class="card-title mb-4">Team</h4>
   <div class="row">
      <div class="col-xl-4 col-md-6" id="team-1">
         <div class="card">
            <div class="card-body">
               <div class="d-flex mb-4">
                  <div class="flex-grow-1 align-items-start">
                     <div class="avatar-group float-start flex-grow-1">
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Terrell Soto">
                           <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="rounded-circle avatar-sm">
                           </a>
                        </div>
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Ruhi Shah">
                           <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="rounded-circle avatar-sm">
                           </a>
                        </div>
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Denny Silva">
                              <div class="avatar-sm">
                                 <div class="avatar-title rounded-circle bg-primary">
                                    D
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <!-- end avatar group -->
                  </div>
                  <div class="dropdown ms-2">
                     <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="mdi mdi-dots-horizontal"></i>
                     </a>
                     <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="javascript: void(0);">Edit</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger leave-team" data-id="1" data-bs-toggle="modal" data-bs-target=".bs-add-leave-team" href="javascript: void(0);">
                        Leave Team</a>
                     </div>
                  </div>
                  <!-- end dropdown -->
               </div>
               <div>
                  <h5 class="mb-1 font-size-17">Marketing</h5>
                  <p class="text-muted  font-size-13 mb-0">4 Projects</p>
               </div>
            </div>
            <!-- end card-body -->
         </div>
         <!-- end card -->
      </div>
      <!-- end col -->
      <div class="col-xl-4 col-md-6" id="team-2">
         <div class="card">
            <div class="card-body">
               <div class="d-flex mb-4">
                  <div class="flex-grow-1 align-items-start">
                     <div class="avatar-group float-start flex-grow-1">
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Mark Burke" data-bs-original-title="Mark Burke">
                           <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="" class="rounded-circle avatar-sm">
                           </a>
                        </div>
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Julia Halsey" data-bs-original-title="Julia Halsey">
                           <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="rounded-circle avatar-sm">
                           </a>
                        </div>
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Ayaan Curry" data-bs-original-title="Ayaan Curry">
                           <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="rounded-circle avatar-sm">
                           </a>
                        </div>
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Jansh Wells" data-bs-original-title="Jansh Wells">
                           <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="rounded-circle avatar-sm">
                           </a>
                        </div>
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Denny Silva" data-bs-original-title="Denny Silva">
                           <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="rounded-circle avatar-sm">
                           </a>
                        </div>
                     </div>
                     <!-- end avatar group -->
                  </div>
                  <div class="dropdown ms-2">
                     <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="mdi mdi-dots-horizontal"></i>
                     </a>
                     <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="javascript: void(0);">Edit</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger leave-team" data-id="2" data-bs-toggle="modal" data-bs-target=".bs-add-leave-team" href="javascript: void(0);">Leave
                        Team</a>
                     </div>
                  </div>
                  <!-- end dropdown -->
               </div>
               <div>
                  <h5 class="mb-1 font-size-17">Blog Template</h5>
                  <p class="text-muted  font-size-13 mb-0">5 Projects</p>
               </div>
            </div>
            <!-- end card-body -->
         </div>
         <!-- end card -->
      </div>
      <!-- end col -->
      <div class="col-xl-4 col-md-6" id="team-3">
         <div class="card">
            <div class="card-body">
               <div class="d-flex mb-4">
                  <div class="flex-grow-1 align-items-start">
                     <div class="avatar-group float-start flex-grow-1">
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Mark Burke" data-bs-original-title="Mark Burke">
                           <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="" class="rounded-circle avatar-sm">
                           </a>
                        </div>
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Julia Halsey" data-bs-original-title="Julia Halsey">
                           <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="rounded-circle avatar-sm">
                           </a>
                        </div>
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Ayaan Curry" data-bs-original-title="Ayaan Curry">
                           <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="rounded-circle avatar-sm">
                           </a>
                        </div>
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Ayaan Curry" data-bs-original-title="Ayaan Curry">
                           <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="rounded-circle avatar-sm">
                           </a>
                        </div>
                     </div>
                     <!-- end avatar group -->
                  </div>
                  <div class="dropdown ms-2">
                     <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="mdi mdi-dots-horizontal"></i>
                     </a>
                     <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="javascript: void(0);">Edit</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger leave-team" data-id="3" data-bs-toggle="modal" data-bs-target=".bs-add-leave-team" href="javascript: void(0);">Leave
                        Team</a>
                     </div>
                  </div>
                  <!-- end dropdown -->
               </div>
               <div>
                  <h5 class="mb-1 font-size-17">Multipurpose Landing</h5>
                  <p class="text-muted  font-size-13 mb-0">2 Projects</p>
               </div>
            </div>
            <!-- end card-body -->
         </div>
         <!-- end card -->
      </div>
      <!-- end col -->
      <div class="col-xl-4 col-md-6" id="team-4">
         <div class="card">
            <div class="card-body">
               <div class="d-flex mb-4">
                  <div class="flex-grow-1 align-items-start">
                     <div class="avatar-group float-start flex-grow-1">
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="William  Zawacki" data-bs-original-title="William  Zawacki">
                           <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="rounded-circle avatar-sm">
                           </a>
                        </div>
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Jansh Wells" data-bs-original-title="Jansh Wells">
                           <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="rounded-circle avatar-sm">
                           </a>
                        </div>
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Hattie Bustos" data-bs-original-title="Hattie Bustos">
                           <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="rounded-circle avatar-sm">
                           </a>
                        </div>
                     </div>
                     <!-- end avatar group -->
                  </div>
                  <div class="dropdown ms-2">
                     <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="mdi mdi-dots-horizontal"></i>
                     </a>
                     <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="javascript: void(0);">Edit</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger leave-team" data-id="4" data-bs-toggle="modal" data-bs-target=".bs-add-leave-team" href="javascript: void(0);">Leave
                        Team</a>
                     </div>
                  </div>
                  <!-- end dropdown -->
               </div>
               <div>
                  <h5 class="mb-1 font-size-17">Brand Logo Design</h5>
                  <p class="text-muted font-size-13 mb-0">5 Projects</p>
               </div>
            </div>
            <!-- end card-body -->
         </div>
         <!-- end card -->
      </div>
      <!-- end col -->
      <div class="col-xl-4 col-md-6" id="team-5">
         <div class="card">
            <div class="card-body">
               <div class="d-flex mb-4">
                  <div class="flex-grow-1 align-items-start">
                     <div class="avatar-group float-start flex-grow-1">
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="James Ross">
                              <div class="avatar-sm">
                                 <div class="avatar-title rounded-circle bg-purple">
                                    J
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Jansh Wells" data-bs-original-title="Jansh Wells">
                           <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="rounded-circle avatar-sm">
                           </a>
                        </div>
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Dan Gibson" data-bs-original-title="Dan Gibson">
                           <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="rounded-circle avatar-sm">
                           </a>
                        </div>
                     </div>
                     <!-- end avatar group -->
                  </div>
                  <div class="dropdown ms-2">
                     <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="mdi mdi-dots-horizontal"></i>
                     </a>
                     <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="javascript: void(0);">Edit</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger leave-team" data-id="5" data-bs-toggle="modal" data-bs-target=".bs-add-leave-team" href="javascript: void(0);">
                        Leave Team</a>
                     </div>
                  </div>
                  <!-- end dropdown -->
               </div>
               <div>
                  <h5 class="mb-1 font-size-17">Landing Page</h5>
                  <p class="text-muted  font-size-13 mb-0">3 Projects</p>
               </div>
            </div>
            <!-- end card-body -->
         </div>
         <!-- end card -->
      </div>
      <!-- end col -->
      <div class="col-xl-4 col-md-6" id="team-6">
         <div class="card">
            <div class="card-body">
               <div class="d-flex mb-4">
                  <div class="flex-grow-1 align-items-start">
                     <div class="avatar-group float-start flex-grow-1">
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Terrell Soto" data-bs-original-title="Terrell Soto">
                           <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="rounded-circle avatar-sm">
                           </a>
                        </div>
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Ruhi Shah" data-bs-original-title="Ruhi Shah">
                           <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="rounded-circle avatar-sm">
                           </a>
                        </div>
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Denny Silva">
                              <div class="avatar-sm">
                                 <div class="avatar-title rounded-circle bg-primary">
                                    D
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Jansh Wells" data-bs-original-title="Jansh Wells">
                           <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="rounded-circle avatar-sm">
                           </a>
                        </div>
                     </div>
                     <!-- end avatar group -->
                  </div>
                  <div class="dropdown ms-2">
                     <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="mdi mdi-dots-horizontal"></i>
                     </a>
                     <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger leave-team" data-id="6" data-bs-toggle="modal" data-bs-target=".bs-add-leave-team" href="javascript: void(0);">Leave
                        Team</a>
                     </div>
                  </div>
                  <!-- end dropdown -->
               </div>
               <div>
                  <h5 class="mb-1 font-size-17">New Create Admin UI</h5>
                  <p class="text-muted  font-size-13 mb-0">1 Projects</p>
               </div>
            </div>
            <!-- end card-body -->
         </div>
         <!-- end card -->
      </div>
      <!-- end col -->
      <div class="col-xl-4 col-md-6" id="team-7">
         <div class="card mb-0">
            <div class="card-body">
               <div class="d-flex mb-4">
                  <div class="flex-grow-1 align-items-start">
                     <div class="avatar-group float-start flex-grow-1">
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Abel Owen" data-bs-original-title="Abel Owen">
                           <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="rounded-circle avatar-sm">
                           </a>
                        </div>
                        <div class="avatar-group-item">
                           <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Jansh Wells" data-bs-original-title="Jansh Wells">
                           <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="rounded-circle avatar-sm">
                           </a>
                        </div>
                     </div>
                     <!-- end avatar group -->
                  </div>
                  <div class="dropdown ms-2">
                     <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="mdi mdi-dots-horizontal"></i>
                     </a>
                     <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="javascript: void(0);">Edit</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger leave-team" href="javascript: void(0);" data-id="7" data-bs-toggle="modal" data-bs-target=".bs-add-leave-team">Leave Team</a>
                     </div>
                  </div>
                  <!-- end dropdown -->
               </div>
               <div>
                  <h5 class="mb-1 font-size-17">Creating Dashboard UI Kit</h5>
                  <p class="text-muted  font-size-13 mb-0">6 Projects</p>
               </div>
            </div>
            <!-- end card-body -->
         </div>
         <!-- end card -->
      </div>
      <!-- end col -->
   </div>
   <!-- end row -->
</div>
</div>
<!-- end tab pane -->
@endsection