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
    $(document).on("click", ".confirmDelete", function () {
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
                    $("#category-" + category_id).html(" <i class='fas fa-toggle-off' aria-hidden='true' status='In-Active'></i>");
                } else if (resp['status'] == 1)
                   {
                    $("#category-" + category_id).html(" <i class='fas fa-toggle-on' aria-hidden='true' status='Active'></i>");
                   }
            },error:function()
            {
                alert(error);
            }
        })
    });


});


