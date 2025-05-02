$(document).on('click', '.save-btn', function() {
    const $form = $(this).closest('form');
    $(this).html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i> Saving...').prop('disabled', true);
    $form.submit();
});
