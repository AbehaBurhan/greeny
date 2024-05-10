
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
                    url: brandURL,
                    enctype: "multipart/form-data",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        window.location.href = "/admin/brand";
                        // console.log('data updated successfully');
                    }
                });
            });
        });