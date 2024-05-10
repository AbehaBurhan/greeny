
        $(document).ready(function() {
            $('#create-form').submit(function(e) {
                e.preventDefault();

                var formData = new FormData(this);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: "/admin/product",
                    data: formData,
                    enctype: "multipart/form-data",
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // console.log('Data added successfully');
                        window.location.href = "/admin/product";
                    },
                });
            });
        });