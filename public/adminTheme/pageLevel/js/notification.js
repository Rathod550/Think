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