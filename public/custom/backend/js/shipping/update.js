$(document).ready(function(){

    $('#edit-form').submit(function(e){
        e.preventDefult();

        var data = $(this).serialize();
        $.ajax({
            Headers:{
                'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
            },
            type: "POST",
            url: shippingURL,
            data: data,

            success:function(response){
                window.location.href = "/admin/shipping";
            }
        });
    });
});