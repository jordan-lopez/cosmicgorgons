$(document).ready(function() {

    $('#tbl-featured-news').DataTable({
        "ajax": {
            url: "featured-news/show",
            type: 'GET'
        },
    });

    $('#add-spinner').removeClass('icon-spinner');
    $('#edit-spinner').removeClass('icon-spinner');
    $('#delete-spinner').removeClass('icon-spinner');

    $("#frm-add-event").unbind('submit').on('submit', function(event) {
        event.preventDefault();

        var data = new FormData($("#frm-add-event")[0]);

        $('#btn-add-news span').attr('disabled', 'disabled').text(' Saving');
        $('#add-spinner').addClass('icon-spinner');
        $.ajax({
            url:'featured-news/store',
            type:'POST',
            data:data,
            dataType:'json',
            processData: false,
            contentType: false,
            success: function(image){
                var event_title = $('#txt_news_name').val();
                var event_detail = $('#txt_news_details').val();
                var event_option = $('form input[type=radio]:checked').val();

                $('#add_featured_news_modal').modal('hide');
                $('#tbl-featured-news').DataTable().ajax.reload(null, false);
                $('#frm-add-event').trigger('reset');
                $('#btn-add-news span').removeAttr('disabled').text('Save');
                $('#add-spinner').removeClass('icon-spinner');

                $.toast({
                    heading: 'Success',
                    text: 'Added successfully.',
                    position: 'top-right',
                    loaderBg: '#ff6849',
                    icon: 'success',
                    hideAfter: 3500
                });
            }, error:function (xhr, error, ajaxOptions, thrownError){
                alert(xhr.responseText);
                $('#btn-add-news span').removeAttr('disabled').text('Save');
            }
        });
    });

    $("#frm-edit-event").unbind('submit').on('submit', function(event) {
        event.preventDefault();

        var data = new FormData($("#frm-edit-event")[0]);

        $('#btn-edit-news span').attr('disabled', 'disabled').text(' Updating');
        $('#edit-spinner').addClass('icon-spinner');
        $.ajax({
            url:'featured-news/update',
            type:'POST',
            data:data,
            dataType:'json',
            processData: false,
            contentType: false,
            success: function(data){

                $('#edit_featured_news_modal').modal('hide');
                $('#tbl-featured-news').DataTable().ajax.reload(null, false);
                $('#frm-edit-event').trigger('reset');
                $('#btn-edit-news span').removeAttr('disabled').text('Update');
                $('#edit-spinner').removeClass('icon-spinner');

                $.toast({
                    heading: 'Success',
                    text: 'Updated successfully.',
                    position: 'top-right',
                    loaderBg: '#ff6849',
                    icon: 'success',
                    hideAfter: 3500
                });
            }, error:function (xhr, error, ajaxOptions, thrownError){
                alert(xhr.responseText);
                $('#btn-edit-news span').removeAttr('disabled').text('Update');
            }
        });
    });

    $("#frm-delete-event").unbind('submit').on('submit', function(event) {
        event.preventDefault();

        var data = new FormData($("#frm-delete-event")[0]);

        $('#btn-delete-news span').attr('disabled', 'disabled').text(' Deleting');
        $('#delete-spinner').addClass('icon-spinner');
        $.ajax({
            url:'featured-news/delete',
            type:'POST',
            data:data,
            dataType:'json',
            processData: false,
            contentType: false,
            success: function(data){

                $('#delete_featured_news_modal').modal('hide');
                $('#tbl-featured-news').DataTable().ajax.reload(null, false);
                $('#frm-delete-event').trigger('reset');
                $('#btn-delete-news span').removeAttr('disabled').text('Delete');
                $('#delete-spinner').removeClass('icon-spinner');

                $.toast({
                    heading: 'Success',
                    text: 'Deleted successfully.',
                    position: 'top-right',
                    loaderBg: '#ff6849',
                    icon: 'success',
                    hideAfter: 3500
                });
            }, error:function (xhr, error, ajaxOptions, thrownError){
                alert(xhr.responseText);
                $('#btn-delete-news span').removeAttr('disabled').text('Delete');
            }
        });
    });

    $('#edit_featured_news_modal').on('show.bs.modal', function(e) {
        var edit_txt_news_id = $(e.relatedTarget).data('id');
        var edit_txt_news_details = $(e.relatedTarget).data('description');
        var edit_txt_news_image = $(e.relatedTarget).data('image');
        var edit_txt_news_title = $(e.relatedTarget).data('title');
        var edit_txt_news_option = $(e.relatedTarget).data('option');
        $('#frm-edit-event').find('#hdn_edit_featured_news_id').val(edit_txt_news_id);
        $('#frm-edit-event').find('#edit_txt_news_name').val(edit_txt_news_title);
        $('#frm-edit-event').find('#edit_txt_news_details').val(edit_txt_news_details);
        $('#frm-edit-event').find('#hdn_edit_image').val(edit_txt_news_image);
        $('#frm-edit-event').find('#image').html('<img src='+edit_txt_news_image+' alt="user">');
        $('input[name=edit_txt_news_options]').val([edit_txt_news_option]);
    });

    $('#delete_featured_news_modal').on('show.bs.modal', function(e) {
        var delete_txt_news_id = $(e.relatedTarget).data('id');
        var delete_txt_news_title = $(e.relatedTarget).data('title');
        $('#frm-delete-event').find('#hdn_delete_featured_news_id').val(delete_txt_news_id);
        $('#frm-delete-event').find('#event_title').html('Are you sure you want to delete \"'+ delete_txt_news_title +'\"?');
    });
});