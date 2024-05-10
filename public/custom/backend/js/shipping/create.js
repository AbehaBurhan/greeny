$(document).ready(function(){
let table = new DataTable('#myTable');
});


$(document).ready(function() {

    $('#create-form').submit(function(e) {

        e.preventDefault();

        var data = $(this).serialize();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
            },
            type: "POST",
            url: "/admin/shipping",
            data: data,
            success: function(response) {
                // console.log("records");
                window.location.href = "/admin/shipping";
            }
        });
    });
});