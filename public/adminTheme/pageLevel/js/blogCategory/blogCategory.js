$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).on("change", ".blog-category-status", function(){

    var id = $(this).data('id');
    var value = $(this).val();
    var url = $(this).data('route');

    $.ajax({
        url: url,
        type: 'post',
        data: {
            id:id,
            status:value
        },
        success: function(data) {
            Swal.fire(
                'Blog Category status!',
                'Item has been updated.',
                'success'
            ).then(() => {
                
            });
        },
    });
});