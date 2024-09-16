$(document).ready(function () {

    $(document).on("click", ".notice_filter", function() {

        var cat_id = $(this).attr("notice_cat_id");
        //alert(cat_id);

        $.ajax({

            type: "post",
            url: "/show-filtered-notices",
            data: {notice_cat_id: cat_id},

            success:function(data){
                $('.filtered_notices').html(data);
            },
            error:function(error)
            {
                alert(error);
            }
        })

    })

    $('#current_password').keyup(function () {
        var current_password = $('#current_password').val();
         //alert (current_password);
        $.ajax({
            type: 'post',
            url: '/student/check-current-pwd',
            data: { current_password: current_password },
            success: function (resp) {
                if (resp == "false") {
                    $("#chkCurrentPwdStd").html("<font color=red>password is incorrect</font>");
                } else {
                    $("#chkCurrentPwdStd").html("<font color=green>password is correct</font>");
                }
            }, error: function () {
                alert("error");
            }
        });
    });

    $(document).on("click", ".filter_library_book", function() {

        var book_category_id = $(this).attr("book_category_id");
        //alert(book_category_id);

        $.ajax({

            type: "post",
            url: "/library",
            data: {book_category_id: book_category_id},

            success:function(data){

                $('.filtered_books').html(data);
            },
            error:function(error)
            {
                alert(error);
            }
        })

    })




});