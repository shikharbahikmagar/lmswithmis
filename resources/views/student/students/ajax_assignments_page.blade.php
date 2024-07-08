@extends('student.dashboard')
@section('ajax_page')
<div class="tab-content p-4">
   <div class="tab-pane active show" id="tasks-tab" role="tabpanel">
      <h4 class="card-title mb-4">Tasks</h4>
      <div class="row">
         <div class="col-xl-12">
            <div class="task-list-box" id="landing-task">
               <div id="task-item-1">
                  <div class="card task-box rounded-3">
                     <div class="card-body">
                        <div class="row align-items-center">
                           <div class="col-xl-6 col-sm-5">
                              <div class="checklist form-check font-size-15">
                                 <input type="checkbox" class="form-check-input" id="customCheck1">
                                 <label class="form-check-label ms-1 task-title" for="customCheck1">Create a New
                                 Landing</label>
                              </div>
                           </div>
                           <!-- end col -->
                           <div class="col-xl-6 col-sm-7">
                              <div class="row align-items-center">
                                 <div class="col-xl-5 col-md-6 col-sm-5">
                                    <div class="avatar-group mt-3 mt-xl-0 task-assigne">
                                       <div class="avatar-group-item">
                                          <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" value="member-2" data-bs-placement="top" aria-label="Mark Powell" data-bs-original-title="Mark Powell">
                                          <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="rounded-circle avatar-sm">
                                          </a>
                                       </div>
                                       <div class="avatar-group-item">
                                          <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" value="member-4" data-bs-placement="top" aria-label="Craig Hall" data-bs-original-title="Craig Hall">
                                          <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" class="rounded-circle avatar-sm">
                                          </a>
                                       </div>
                                       <div class="avatar-group-item">
                                          <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" value="member-11" data-bs-placement="top" data-bs-original-title="Sarah Kerns">
                                             <div class="avatar-sm">
                                                <div class="avatar-title rounded-circle bg-info">
                                                   S
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                    <!-- end avatar group -->
                                 </div>
                                 <!-- end col -->
                                 <div class="col-xl-7 col-md-6 col-sm-7">
                                    <div class="d-flex flex-wrap gap-3 mt-3 mt-xl-0 justify-content-md-end">
                                       <div>
                                          <span class="badge rounded-pill badge-soft-warning font-size-11 task-status">Progress</span>
                                       </div>
                                       <div>
                                          <a href="#" class="mb-0 text-muted fw-medium"><i class="mdi mdi-checkbox-marked-circle-outline me-1"></i>4/8
                                          </a>
                                       </div>
                                       <div>
                                          <a href="#" class="mb-0 text-muted fw-medium" data-bs-toggle="modal" data-bs-target=".bs-example-new-task"><i class="mdi mdi-square-edit-outline font-size-16 align-middle" onclick="editTask('task-item-1')"></i></a>
                                       </div>
                                       <div>
                                          <a href="#" class="delete-item" onclick="deleteProjects('task-item-1')">
                                          <i class="mdi mdi-trash-can-outline align-middle font-size-16 text-danger"></i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- end col -->
                              </div>
                              <!-- end row -->
                           </div>
                           <!-- end col -->
                        </div>
                        <!-- end row -->
                     </div>
                     <!-- end cardbody -->
                  </div>
                  <!-- end card -->
               </div>
            </div>
            <!-- end -->
            <div class="task-list-box" id="design-task">
               <div id="task-item-2">
                  <div class="card task-box rounded-3">
                     <div class="card-body">
                        <div class="row align-items-center">
                           <div class="col-xl-6 col-sm-5">
                              <div class="checklist form-check font-size-15">
                                 <input type="checkbox" class="form-check-input" id="customCheck2">
                                 <label class="form-check-label ms-1 task-title" for="customCheck2">Create a Layout
                                 Design</label>
                              </div>
                           </div>
                           <!-- end col -->
                           <div class="col-xl-6 col-sm-7">
                              <div class="row align-items-center">
                                 <div class="col-xl-5 col-md-6 col-sm-5">
                                    <div class="avatar-group mt-3 mt-xl-0 task-assigne">
                                       <div class="avatar-group-item">
                                          <a href="javascript: void(0);" class="d-inline-block" value="member-3" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Terrell Soto" data-bs-original-title="Terrell Soto">
                                          <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="rounded-circle avatar-sm">
                                          </a>
                                       </div>
                                       <div class="avatar-group-item">
                                          <a href="javascript: void(0);" class="d-inline-block" value="member-2" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Ruhi Shah" data-bs-original-title="Ruhi Shah">
                                          <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="rounded-circle avatar-sm">
                                          </a>
                                       </div>
                                       <div class="avatar-group-item">
                                          <a href="javascript: void(0);" class="d-inline-block" value="member-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Ruhi Shah" data-bs-original-title="Ruhi Shah">
                                          <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="rounded-circle avatar-sm">
                                          </a>
                                       </div>
                                    </div>
                                    <!-- end avatar group -->
                                 </div>
                                 <!-- end col -->
                                 <div class="col-xl-7 col-md-6 col-sm-7">
                                    <div class="d-flex flex-wrap gap-3 mt-3 mt-xl-0 justify-content-md-end">
                                       <div>
                                          <span class="badge rounded-pill badge-soft-warning font-size-11 task-status">Progress</span>
                                       </div>
                                       <div>
                                          <a href="#" class="mb-0 text-muted fw-medium"><i class="mdi mdi-checkbox-marked-circle-outline me-1"></i>8/12
                                          </a>
                                       </div>
                                       <div>
                                          <a href="#" class="mb-0 text-muted fw-medium" data-bs-toggle="modal" data-bs-target=".bs-example-new-task"><i class="mdi mdi-square-edit-outline font-size-16 align-middle" onclick="editTask('task-item-2')"></i></a>
                                       </div>
                                       <div>
                                          <a href="#" class="delete-item" onclick="deleteProjects('task-item-2')">
                                          <i class="mdi mdi-trash-can-outline font-size-16 text-danger align-middle"></i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- end col -->
                              </div>
                              <!-- end row -->
                           </div>
                           <!-- end col -->
                        </div>
                        <!-- end row -->
                     </div>
                     <!-- end cardbody -->
                  </div>
                  <!-- end card -->
               </div>
            </div>
            <!-- end -->
            <div class="task-list-box" id="blog-task">
               <div id="task-item-3">
                  <div class="card task-box rounded-3">
                     <div class="card-body">
                        <div class="row align-items-center">
                           <div class="col-xl-6 col-sm-5">
                              <div class="checklist form-check font-size-15">
                                 <input type="checkbox" class="form-check-input" id="customCheck3">
                                 <label class="form-check-label ms-1 task-title" for="customCheck3">Create a Blog Template
                                 UI</label>
                              </div>
                           </div>
                           <!-- end col -->
                           <div class="col-xl-6 col-sm-7">
                              <div class="row align-items-center">
                                 <div class="col-xl-5 col-md-6 col-sm-5">
                                    <div class="avatar-group mt-3 mt-xl-0 task-assigne">
                                       <div class="avatar-group-item">
                                          <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" value="member-6" aria-label="Scott Edward" data-bs-original-title="Scott Edward">
                                          <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="rounded-circle avatar-sm">
                                          </a>
                                       </div>
                                       <div class="avatar-group-item">
                                          <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" value="member-12" data-bs-placement="top" data-bs-original-title="Denny Silva">
                                             <div class="avatar-sm">
                                                <div class="avatar-title rounded-circle bg-primary">
                                                   D
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="avatar-group-item">
                                          <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" value="member-10" aria-label="Betty Cooney" data-bs-original-title="Betty Cooney">
                                          <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="rounded-circle avatar-sm">
                                          </a>
                                       </div>
                                       <div class="avatar-group-item">
                                          <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" value="member-5" aria-label="Michael Jackson" data-bs-original-title="Michael Jackson">
                                          <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="rounded-circle avatar-sm">
                                          </a>
                                       </div>
                                    </div>
                                    <!-- end avatar group -->
                                 </div>
                                 <!-- end col -->
                                 <div class="col-xl-7 col-md-6 col-sm-7">
                                    <div class="d-flex flex-wrap gap-3 mt-3 mt-xl-0 justify-content-md-end">
                                       <div>
                                          <span class="badge rounded-pill badge-soft-danger font-size-11 task-status">Pending</span>
                                       </div>
                                       <div>
                                          <a href="#" class="mb-0 text-muted fw-medium"><i class="mdi mdi-checkbox-marked-circle-outline me-1"></i>0/6
                                          </a>
                                       </div>
                                       <div>
                                          <a href="#" class="mb-0 text-muted fw-medium" data-bs-toggle="modal" data-bs-target=".bs-example-new-task"><i class="mdi mdi-square-edit-outline font-size-16 align-middle" onclick="editTask('task-item-3')"></i></a>
                                       </div>
                                       <div>
                                          <a href="#" class="delete-item" onclick="deleteProjects('task-item-3')">
                                          <i class="mdi mdi-trash-can-outline font-size-16 align-middle text-danger"></i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- end col -->
                              </div>
                              <!-- end row -->
                           </div>
                           <!-- end col -->
                        </div>
                        <!-- end row -->
                     </div>
                     <!-- end cardbody -->
                  </div>
                  <!-- end card -->
               </div>
            </div>
            <!-- end -->
            <div class="task-list-box" id="comp-task">
               <div id="task-item-4">
                  <div class="card task-box rounded-3">
                     <div class="card-body">
                        <div class="row align-items-center">
                           <div class="col-xl-6 col-sm-5">
                              <div class="checklist form-check font-size-15">
                                 <input type="checkbox" class="form-check-input" id="customChat" checked="">
                                 <label class="form-check-label ms-1 task-title" for="customChat">Chat App Pages</label>
                              </div>
                           </div>
                           <!-- end col -->
                           <div class="col-xl-6 col-sm-7">
                              <div class="row align-items-center">
                                 <div class="col-xl-5 col-md-6 col-sm-5">
                                    <div class="avatar-group mt-3 mt-xl-0 task-assigne">
                                       <div class="avatar-group-item">
                                          <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" value="member-3" aria-label="Annmarie Paul" data-bs-original-title="Annmarie Paul">
                                          <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="rounded-circle avatar-sm">
                                          </a>
                                       </div>
                                    </div>
                                    <!-- end avatar group -->
                                 </div>
                                 <!-- end col -->
                                 <div class="col-xl-7 col-md-6 col-sm-7">
                                    <div class="d-flex flex-wrap gap-3 mt-3 mt-xl-0 justify-content-md-end">
                                       <div>
                                          <span class="badge rounded-pill badge-soft-success font-size-11 task-status">Completed</span>
                                       </div>
                                       <div>
                                          <a href="#" class="mb-0 text-muted fw-medium"><i class="mdi mdi-checkbox-marked-circle-outline me-1"></i>3/3
                                          </a>
                                       </div>
                                       <div>
                                          <a href="#" class="mb-0 text-muted fw-medium" data-bs-toggle="modal" data-bs-target=".bs-example-new-task"><i class="mdi mdi-square-edit-outline font-size-16 align-middle" onclick="editTask('task-item-4')"></i></a>
                                       </div>
                                       <div>
                                          <a href="#" class="delete-item" onclick="deleteProjects('task-item-4')">
                                          <i class="mdi mdi-trash-can-outline font-size-16 align-middle text-danger"></i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- end col -->
                              </div>
                              <!-- end row -->
                           </div>
                           <!-- end col -->
                        </div>
                        <!-- end row -->
                     </div>
                     <!-- end cardbody -->
                  </div>
                  <!-- end card -->
               </div>
            </div>
            <!-- end -->
            <div class="task-list-box" id="app-task">
               <div id="task-item-5">
                  <div class="card task-box rounded-3">
                     <div class="card-body">
                        <div class="row align-items-center">
                           <div class="col-xl-6 col-sm-5">
                              <div class="checklist form-check font-size-15">
                                 <input type="checkbox" class="form-check-input" id="customComponents">
                                 <label class="form-check-label ms-1 task-title" for="customComponents">Components
                                 Pages</label>
                              </div>
                           </div>
                           <!-- end col -->
                           <div class="col-xl-6 col-sm-7">
                              <div class="row align-items-center">
                                 <div class="col-xl-5 col-md-6 col-sm-5">
                                    <div class="avatar-group mt-3 mt-xl-0 task-assigne">
                                       <div class="avatar-group-item">
                                          <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" value="member-7" data-bs-placement="top" aria-label="Eric Williams" data-bs-original-title="Eric Williams">
                                          <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="rounded-circle avatar-sm">
                                          </a>
                                       </div>
                                       <div class="avatar-group-item">
                                          <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" value="member-9" data-bs-placement="top" aria-label="Richard Millar" data-bs-original-title="Richard Millar">
                                          <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="" class="rounded-circle avatar-sm">
                                          </a>
                                       </div>
                                       <div class="avatar-group-item">
                                          <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" value="member-8" data-bs-placement="top" aria-label="Tama Turner" data-bs-original-title="Tama Turner">
                                          <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="" class="rounded-circle avatar-sm">
                                          </a>
                                       </div>
                                    </div>
                                    <!-- end avatar group -->
                                 </div>
                                 <!-- end col -->
                                 <div class="col-xl-7 col-md-6 col-sm-7">
                                    <div class="d-flex flex-wrap gap-3 mt-3 mt-xl-0 justify-content-md-end">
                                       <div>
                                          <span class="badge rounded-pill badge-soft-danger font-size-11 task-status">Pending</span>
                                       </div>
                                       <div>
                                          <a href="#" class="mb-0 text-muted fw-medium"><i class="mdi mdi-checkbox-marked-circle-outline me-1"></i>7/17
                                          </a>
                                       </div>
                                       <div>
                                          <a href="#" class="mb-0 text-muted fw-medium" data-bs-toggle="modal" data-bs-target=".bs-example-new-task"><i class="mdi mdi-square-edit-outline font-size-16 align-middle" onclick="editTask('task-item-5')"></i></a>
                                       </div>
                                       <div>
                                          <a href="#" class="delete-item" onclick="deleteProjects('task-item-5')">
                                          <i class="mdi mdi-trash-can-outline font-size-16 align-middle text-danger"></i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- end col -->
                              </div>
                              <!-- end row -->
                           </div>
                           <!-- end col -->
                        </div>
                        <!-- end row -->
                     </div>
                     <!-- end cardbody -->
                  </div>
                  <!-- end card -->
               </div>
            </div>
            <!-- end -->
            <div class="task-list-box" id="gallery-task">
               <div id="task-item-6">
                  <div class="card task-box rounded-3">
                     <div class="card-body">
                        <div class="row align-items-center">
                           <div class="col-xl-6 col-sm-5">
                              <div class="checklist form-check font-size-15">
                                 <input type="checkbox" class="form-check-input" id="customGallry" checked="">
                                 <label class="form-check-label ms-1 task-title" for="customGallry">Create a Gallery
                                 Pages</label>
                              </div>
                           </div>
                           <!-- end col -->
                           <div class="col-xl-6 col-sm-7">
                              <div class="row align-items-center">
                                 <div class="col-xl-5 col-md-6 col-sm-5">
                                    <div class="avatar-group mt-3 mt-xl-0 task-assigne">
                                       <div class="avatar-group-item">
                                          <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" value="member-5" data-bs-placement="top" aria-label="John Walker" data-bs-original-title="John Walker">
                                          <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="rounded-circle avatar-sm">
                                          </a>
                                       </div>
                                       <div class="avatar-group-item">
                                          <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" value="member-4" aria-label="Willie Garcia" data-bs-original-title="Willie Garcia">
                                          <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" class="rounded-circle avatar-sm">
                                          </a>
                                       </div>
                                    </div>
                                    <!-- end avatar group -->
                                 </div>
                                 <!-- end col -->
                                 <div class="col-xl-7 col-md-6 col-sm-7">
                                    <div class="d-flex flex-wrap gap-3 mt-3 mt-xl-0 justify-content-md-end">
                                       <div>
                                          <span class="badge rounded-pill badge-soft-success font-size-11 task-status">Completed</span>
                                       </div>
                                       <div>
                                          <a href="#" class="mb-0 text-muted fw-medium"><i class="mdi mdi-checkbox-marked-circle-outline me-1"></i>5/5
                                          </a>
                                       </div>
                                       <div>
                                          <a href="#" class="mb-0 text-muted fw-medium" data-bs-toggle="modal" data-bs-target=".bs-example-new-task"><i class="mdi mdi-square-edit-outline font-size-16 align-middle" onclick="editTask('task-item-6')"></i></a>
                                       </div>
                                       <div>
                                          <a href="#" class="delete-item" onclick="deleteProjects('task-item-6')">
                                          <i class="mdi mdi-trash-can-outline font-size-16 align-middle text-danger"></i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- end col -->
                              </div>
                              <!-- end row -->
                           </div>
                           <!-- end col -->
                        </div>
                        <!-- end row -->
                     </div>
                     <!-- end cardbody -->
                  </div>
                  <!-- end card -->
               </div>
            </div>
            <!-- end -->
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
   </div>
   <!-- end tab pane -->
</div>
@endsection