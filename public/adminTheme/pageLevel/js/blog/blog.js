$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).on("change", ".category", function(){
    var value = $(this).val();
    var url = $(this).data('route');

    if(value != ''){
    	getSubcategory(value, url);
    }else{
    	$(".subcategory").html("<option value=''>Select Sub Category</option>");
    }
});


function getSubcategory(value, url){
	$.ajax({
        url: url,
        type: 'post',
        data: {
            category_id:value,
        },
        success: function(data) {
            $(".subcategory").html(data.view);
            if(subCategoryId != ''){
                $(".subcategory").val(subCategoryId).trigger('change');
            }
        },
    });
}


var blog = {
    success: function(response)
    {
        $('.error-text').text('');
        $(".save-blog-btn").attr("disabled", false);
        $(".save-blog-btn").html('Save');
        if($.isEmptyObject(response.error)){
            window.location.href = response.redirectUrl;
        }else{
            $.each( response.error, function( key, value ) {
                $.each( value, function( skey, svalue ) {
                    keyNew = key.replace(/\./g,'_');
                    $('.'+keyNew+'_err').text(svalue);
                    console.log('.'+keyNew+'_err');
                });
            });
        }
    }
};

$(document).on("click",".save-blog-btn",function(e){
    e.preventDefault();

    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
    }

    $(this).attr("disabled", true);
    $(this).html('<i class="fa fa-spinner fa-spin"></i> Save.');
    $(this).parents("form").ajaxSubmit(blog);
});

$(document).ready(function(){
    if($(".category").val() != ""){
        var value = $(".category").val();
        var url = $(".category").data('route');
        getSubcategory(value, url);
    }
});