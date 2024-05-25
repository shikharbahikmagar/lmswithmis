$(document).ready(function () {
    $('#current_pwd').keyup(function () {
        var current_pwd = $('#current_pwd').val();
        // alert (current_pwd);
        $.ajax({
            type: 'post',
            url: '/admin/check-current-pwd',
            data: { current_pwd: current_pwd },
            success: function (resp) {
                if (resp == "false") {
                    $("#chkCurrentPwd").html("<font color=red>password is incorrect</font>");
                } else {
                    $("#chkCurrentPwd").html("<font color=green>password is correct</font>");
                }
            }, error: function () {
                alert("error");
            }
        });
    });

    //category delete confirmation
    $(document).on("click", ".deleteCategory", function () {
        var record = $(this).attr("record");
        var recordId = $(this).attr("recordId");
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                window.location.href = "/admin/delete-" + record + "/" + recordId;

            }
        });

    });

    //category image delete confirmation
        $(document).on("click", ".deleteCategoryImage", function () {
            var record = $(this).attr("record");
            var recordId = $(this).attr("recordId");
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    window.location.href = "/admin/delete-" + record + "/" + recordId;

                }
            });

        });

    //update category status
    $(document).on("click", ".updateCategoryStatus", function (){
        var status = $(this).children("i").attr("status");
        var category_id = $(this).attr("category_id");
        $.ajax({
            type: 'post',
            url: '/admin/update-category-status',
            data: {status:status, category_id:category_id},

            success:function(resp)
            {
                if(resp['status'] == 0)
                   {
                    $("#category-" + category_id).html("<i style='font-size: 20px;' class='mdi mdi-checkbox-blank-circle-outline' status='InActive'></i>");
                } else if (resp['status'] == 1)
                   {
                    $("#category-" + category_id).html(" <i style='font-size: 20px;' class='mdi mdi-check-circle-outline' status='Active'></i> ");
                   }
            },error:function(error)
            {
                alert(error);
            }
        })
    });

    //update book status
    $(document).on("click", ".updateBookStatus", function () {
        var status = $(this).children("i").attr("status");
        var book_id = $(this).attr("book_id");
        $.ajax({
            type: 'post',
            url: '/admin/update-book-status',
            data: { status: status, book_id: book_id },

            success: function (resp) {
                if (resp['status'] == 0) {
                    $("#book-" + book_id).html("<i style='font-size: 20px;' class='mdi mdi-checkbox-blank-circle-outline' status='InActive'></i>");
                } else if (resp['status'] == 1) {
                    $("#book-" + book_id).html("<i style='font-size: 20px;' class='mdi mdi-check-circle-outline' status='Active'></i> ");
                }
            }, error: function (error) {
                alert(error);
            }
        })
    });
    
    //book delete confirmation sweet alert
    $(document).on("click", ".deleteBook", function () {
        var record = $(this).attr("record");
        var recordId = $(this).attr("recordId");
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                window.location.href = "/admin/delete-" + record + "/" + recordId;

            }
        });

    });

    //category image delete confirmation
    $(document).on("click", ".imageConfirmDelete", function () {
        var record = $(this).attr("record");
        var recordId = $(this).attr("recordId");
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                window.location.href = "/admin/delete-" + record + "/" + recordId;

            }
        });

    });

    //update grade status
    $(document).on("click", ".updateGradeStatus", function () {
        var status = $(this).children("i").attr("status");
        var grade_id = $(this).attr("grade_id");
        $.ajax({
            type: 'post',
            url: '/admin/update-grade-status',
            data: { status: status, grade_id: grade_id },

            success: function (resp) {
                if (resp['status'] == 0) {
                    $("#grade-" + grade_id).html("<i style='font-size: 20px;' class='mdi mdi-checkbox-blank-circle-outline' status='InActive'></i>");
                } else if (resp['status'] == 1) {
                    $("#grade-" + grade_id).html("<i style='font-size: 20px;' class='mdi mdi-check-circle-outline' status='Active'></i> ");
                }
            }, error: function (error) {
                alert(error);
            }
        })
    });

    //delete grade
    $(document).on("click", ".deleteGrade", function () {
        var record = $(this).attr("record");
        var recordId = $(this).attr("recordId");
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                window.location.href = "/admin/delete-" + record + "/" + recordId;

            }
        });

    });
    
    //dynamic subjects according to selected class
    $('.selectClass').on('change', function () {
        var class_id = $(this).val(); //or alert($(this).val());
        if(class_id === 'all' || class_id === '') {
                $('#addSubject').removeAttr('href').css('color', 'gray').addClass('disabled-link');
            
            // You can add more styling or effects to visually indicate that the link is disabled
        } else {
            $('#addSubject').attr('href', '/admin/add-subject/'+class_id).css('color', '').removeClass('disabled-link');
            // Resetting href attribute and any applied styles if the condition is not met
        }
        // alert(class_id);
        $.ajax({
            url: '/admin/subjects',
            method: "post",
            data: { class_id: class_id },
            success: function (data) {
                $('.table_contents').html(data);
            }
        });
    });

    //delete subject
    $(document).on("click", ".deleteSubject", function () {
        var record = $(this).attr("record");
        var recordId = $(this).attr("recordId");
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                window.location.href = "/admin/delete-" + record + "/" + recordId;

            }
        });

    });

    //update subjects status
    $(document).on("click", ".updateSubjectStatus", function () {
        var status = $(this).children("i").attr("status");
        var subject_id = $(this).attr("subject_id");
        $.ajax({
            type: 'post',
            url: '/admin/update-subject-status',
            data: { status: status, subject_id: subject_id },

            success: function (resp) {
                if (resp['status'] == 0) {
                    $("#subject-" + subject_id).html("<i style='font-size: 20px;' class='mdi mdi-checkbox-blank-circle-outline' status='InActive'></i>");
                } else if (resp['status'] == 1) {
                    $("#subject-" + subject_id).html("<i style='font-size: 20px;' class='mdi mdi-check-circle-outline' status='Active'></i> ");
                }
            }, error: function (error) {
                alert(error);
            }
        })
    });

    //update teacher status
    $(document).on("click", ".updateTeacherStatus", function () {
        var status = $(this).children("i").attr("status");
        var teacher_id = $(this).attr("teacher_id");
        $.ajax({
            type: 'post',
            url: '/admin/update-teacher-status',
            data: { status: status, teacher_id: teacher_id },

            success: function (resp) {
                if (resp['status'] == 0) {
                    $("#teacher-" + teacher_id).html("<i style='font-size: 20px;' class='mdi mdi-checkbox-blank-circle-outline' status='InActive'></i>");
                } else if (resp['status'] == 1) {
                    $("#teacher-" + teacher_id).html("<i style='font-size: 20px;' class='mdi mdi-check-circle-outline' status='Active'></i> ");
                }
            }, error: function (error) {
                alert(error);
            }
        })
    });
    //delete teacher
    $(document).on("click", ".deleteTeacher", function () {
        var record = $(this).attr("record");
        var recordId = $(this).attr("recordId");
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                window.location.href = "/admin/delete-" + record + "/" + recordId;

            }
        });

    });

    //check teacher current pwd
    $('#teacher_current_pwd').keyup(function () {
        var teacher_current_pwd = $('#teacher_current_pwd').val();
        var teacher_id = $(this).attr("teacher_id");
        // alert (teacher_id);
        $.ajax({
            type: 'post',
            url: '/admin/check-teacher-current-pwd',
            data: { teacher_current_pwd: teacher_current_pwd, teacher_id: teacher_id },
            success: function (resp) {
                if (resp == "false") {
                    $("#chkTeacherCurrentPwd").html("<font color=red>password is incorrect</font>");
                } else {
                    $("#chkTeacherCurrentPwd").html("<font color=green>password is correct</font>");
                }
            }, error: function () {
                alert("error");
            }
        });
    });

    //schedules according to selected teacher
        $('.teacherSchedule').on('change', function () {
        var teacher_id = $(this).val(); //or alert($(this).val());
        //alert(teacher_id);
        if(teacher_id === 'all' || teacher_id === '') {
                $('#addTeacherSchedule').removeAttr('href').css('color', 'gray').addClass('disabled-link');
            
            // You can add more styling or effects to visually indicate that the link is disabled
        } else {
            $('#addTeacherSchedule').attr('href', '/admin/add-teacher-schedule/'+teacher_id).css('color', '').removeClass('disabled-link');
            // Resetting href attribute and any applied styles if the condition is not met
        }
        // alert(class_id);
        $.ajax({
            url: '/admin/teacher-schedules',
            method: "post",
            data: { teacher_id: teacher_id },
            success: function (data) {
                $('.teacher_schedule_table').html(data);
            }
        });
    });

    //for displaying subjects dynamically according to selected class
      $('.selectClass').on('change', function () {
        var class_id = $(this).val(); //or alert($(this).val());
        //  alert(class_id);
        $.ajax({
            url: '/admin/show-subjects',
            method: "post",
            data: { class_id: class_id },
            success: function (data) {
                $('.subject_options').html(data);
            }
        });
    });

});


