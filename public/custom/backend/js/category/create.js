$(document).ready(function() {
let table = new DataTable('#myTable');
});


$(document).ready(function() {
    $('#create-form').submit(function(e) {
        e.preventDefault();

        // var formData = $(this).serialize();
        //if we have image then we need to use the below 1
        var formData = new FormData(this);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
            },
            type: "POST",
            url: "/admin/category",
            data: formData,
            enctype: "multipart/form-data",
            contentType: false,
            processData: false,
            success: function(response) {
                window.location.href = "/admin/category";
            }
        });
    });
});