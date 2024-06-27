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

});