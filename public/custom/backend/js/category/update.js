
    jQuery(document).ready(function($) {
        $('#edit-form').submit(function(e) {
            e.preventDefault();

            // this is for normal form data without files(images etc)
            // var formData = $(this).serialize();

            //with images form data
            var formData = new FormData(this);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
                },
                type: "POST",
                enctype: "multipart/form-data",
                url: categoryURL,
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    // console.log($('meta[name="csrf-token"]').attr('content'));

                    window.location.href = "/admin/category";
                },
                // error: function(error) {
                //     console.log(error);
                // }

            });
        });
    });