
var language = $(".languageSelect").val();
if(language != ''){
    setLanguage(language, 'first');
}

$(document).on("change", ".languageSelect", function(){
    var language = $(this).val();
    setLanguage(language, 'change');
});

function setLanguage(language, type){
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/setLanguage',
        type: 'POST',
        data: {
            language: language,
        },
        success: function() {
            if(type == 'change'){
                location.reload();
            }
        },
        error: function(xhr) {
            console.error(xhr.responseText);
        }
    });
};