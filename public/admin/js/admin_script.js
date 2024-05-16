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



});


