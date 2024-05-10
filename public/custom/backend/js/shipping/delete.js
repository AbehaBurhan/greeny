$(document).ready(function(){
    $('.shipping-delete').click(function(){
        var shippingId = $(this).data('shipping-id');
        var button = $(this);
        $('#confirm-delete').click(function(){

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "/admin/shipping/" + shippingId,
                data: {
                    _method: 'DELETE' // Simulate a DELETE request with a POST request
                },
                success:function(response){
                    button.closest('tr').remove();
                    location.reload(true);
                    // $('#delete-confirmation-modal').modal('hide');
                }
            });
        });
    });
});