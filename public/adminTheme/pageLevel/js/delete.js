// Setup CSRF token globally for all AJAX requests
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).on("click", ".delete-btn", function(e) {
    e.preventDefault();

    var url = $(this).data('route');

    if (confirm("Are you sure you want to delete this item?")) {
        $.ajax({
            url: url,
            type: 'DELETE',
            success: function(response) {
                alert('Item deleted successfully');
                location.reload(); // or remove element dynamically
            },
            error: function(xhr) {
                alert("Something went wrong! Status: " + xhr.status);
                console.error(xhr.responseText);
            }
        });
    }
});
