
$(document).ready(function() {
    $('.brand-delete').click(function() {
        var brandID = $(this).data('brand-id');
        // var button = $(this);

        $('#confirm-delete').click(function() {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "post",
                url: "/admin/brand/" + brandID,
                data: {
                    _method: "DELETE"
                },
                success: function(response) {
                    $(this).parents('tr').remove();
                    location.reload(true);
                    // console.log('data deleted successfully');
                }
            });
        });
    });
});