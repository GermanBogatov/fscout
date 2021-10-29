$(document).ready(function () {
    
$(document).ready(function () {
    $('#form_new_product').submit(function (event) {
        event.preventDefault();
       var data = new FormData(this);
       
        $.ajax({
            url: "/bogatov/fscout/mynewsscout/addNews/",
            data: data,
            processData: false,
            contentType: false,
            dataType: "json",
            type: "POST",
            success: function ( json ) {
                if (json.error > 0) {
                    $("#new_product_modal .error_danger").show();
                } else {
                    location.reload();
                }
            }
        })
    })

})
    
})