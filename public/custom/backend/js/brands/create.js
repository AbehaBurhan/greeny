$(document).ready(function(){
    let table = new DataTable('#myTable');

});
    $(document).ready(function() {
        $('#create-form').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
                },
                type: "POST",
                enctype: "multipart/form-data",
                url: "/admin/brand",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    // console.log("data entered successfully");
                    window.location.href = "/admin/brand";
                }
            });
        });
    });
