$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).on("click", ".bi-bell", function(){
	$('.badge-number').hide();

	var url = $(this).data('route');

	$.ajax({
        url: url,
        type: 'get',
        success: function() {},
    });
});

$(document).on("change", ".notification-status", function(){

    var id = $(this).data('id');
    var value = $(this).val();
    var url = $(this).data('route');

    $.ajax({
        url: url,
        type: 'post',
        data: {
            user_id:id,
            notification_status:value
        },
        success: function(data) {
            Swal.fire(
                'Notification status!',
                'Item has been updated.',
                'success'
            ).then(() => {
                
            });
        },
    });
});