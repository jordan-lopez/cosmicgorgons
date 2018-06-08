$(document).ready(function() {

    $("#frm-add-event").unbind('submit').on('submit', function(event) {
        event.preventDefault();

        $('#btn-add-news').attr('disabled', 'disabled').val('Saving...');
        $.ajax({
            url: 'featured-news/store',
            type: 'POST',
            data:new FormData($("#frm-add-event")[0]),
            dataType:'json',
            processData: false,
            contentType: false,
            success: function(data){
                $('#add_featured_news_modal').modal('hide');
                $('#frm-add-event').trigger('reset');
                $('#btn-add-news').removeAttr('disabled').val('Save');
            }, error:function (xhr, error, ajaxOptions, thrownError){
                alert(xhr.responseText);
                $('#btn-add-news').removeAttr('disabled').val('Save');
            }
        });
    });

});