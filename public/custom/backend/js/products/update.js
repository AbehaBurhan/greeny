
$(document).ready(function() {
    $('#edit-form').submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append('_method', 'PUT');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
            },
            type: "POST",
            data: formData,
            url: productURL,
            enctype: "multipart/form-data",
            contentType: false,
            processData: false,
            success: function(response) {
                // console.log('updated successfully');
                window.location.href = "/admin/product";
            }
        });
    });
});