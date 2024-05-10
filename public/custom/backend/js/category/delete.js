
        $(document).ready(function() {
            $('.category-delete').on('click', function() {
                var categoryID = $(this).data('category-id');
                // alert(categoryID);
                var button = $(this);
                $('#confirm-delete').on('click', function() {

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
                        },
                        data: {
                            '_method': 'DELETE'
                        },
                        type: 'POST',
                        url: '/admin/category/' + categoryID,
                        success: function(response) {
                            button.parents("tr").remove();
                            location.reload(true);
                            $('#delete-confirmation-modal').css({
                                'display': 'none',
                                'opacity': '0',
                            });

                            // $('#delete-confirmation-modal').modal('hide');
                            // window.location.reload(true);
                            // setTimeout(function() { // wait for 2 secs(2)
                            //     location.reload(); // then reload the page.(3)
                            // }, 500);
                        }
                    });
                });
            });
        });