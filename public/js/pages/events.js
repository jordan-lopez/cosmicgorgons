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
            success: function(data){
                if($.isEmptyObject(data.error)){
                    $('#add_featured_news_modal').modal('hide');
                    $('#tbl-featured-news').DataTable().ajax.reload(null, false);
                    $('#frm-add-event').trigger('reset');
                    $('#btn-add-news span').removeAttr('disabled').text('Save');
                    $('#add-spinner').removeClass('icon-spinner');
                    $('#txt_news_name').removeClass('border border-danger');
                    $('#txt_news_details').removeClass('border border-danger');
                    $('#txt_news_yt_link').removeClass('border border-danger');
                    $('#txt_news_image').removeClass('border border-danger');
                    $('.text-danger').text('');

                    $.toast({
                        heading: 'Success',
                        text: data.success,
                        position: 'top-right',
                        loaderBg: '#ff6849',
                        icon: 'success',
                        hideAfter: 3500
                    });
                }else{
                    $('#btn-add-news span').removeAttr('disabled').text('Save');
                    $('#add-spinner').removeClass('icon-spinner');
                    $('#txt_news_name').removeClass('border border-danger');
                    $('#txt_news_details').removeClass('border border-danger');
                    $('#txt_news_yt_link').removeClass('border border-danger');
                    $('#txt_news_image').removeClass('border border-danger');
                    $('.error_title').prop('hidden', true);
                    $('.error_details').prop('hidden', true);
                    $('.error_image').prop('hidden', true);

                    if (data.error.title) {
                        document.getElementsByClassName("error_title")[0].removeAttribute("hidden");
                        $('.error_title').text(data.error.title);
                        $('#txt_news_name').addClass('border border-danger');
                    }
                    if (data.error.description) {
                        document.getElementsByClassName("error_details")[0].removeAttribute("hidden");
                        $('.error_details').text(data.error.description);
                        $('#txt_news_details').addClass('border border-danger');
                    }
                    if (data.error.youtube_link) {
                        document.getElementsByClassName("error_yt_link")[0].removeAttribute("hidden");
                        $('.error_yt_link').text(data.error.youtube_link);
                        $('#txt_news_yt_link').addClass('border border-danger');
                    }
                    if (data.error.image) {
                        document.getElementsByClassName("error_image")[0].removeAttribute("hidden");
                        $('.error_image').text(data.error.image);
                        $('#txt_news_image').addClass('border border-danger');
                    }
                }
            }, error:function (xhr, error, ajaxOptions, thrownError){
                alert(xhr.responseText);
                $('#add-spinner').removeClass('icon-spinner');
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
                if($.isEmptyObject(data.error)){
                    $('#edit_featured_news_modal').modal('hide');
                    $('#tbl-featured-news').DataTable().ajax.reload(null, false);
                    $('#frm-edit-event').trigger('reset');
                    $('#btn-edit-news span').removeAttr('disabled').text('Update');
                    $('#edit-spinner').removeClass('icon-spinner');
                    $('#edit_txt_news_name').removeClass('border border-danger');
                    $('#edit_txt_news_details').removeClass('border border-danger');
                    $('.text-danger').text('');

                    $.toast({
                        heading: 'Success',
                        text: data.success,
                        position: 'top-right',
                        loaderBg: '#ff6849',
                        icon: 'success',
                        hideAfter: 3500
                    });
                }else{
                    $('#edit-spinner').removeClass('icon-spinner');
                    $('#edit_txt_news_name').removeClass('border border-danger');
                    $('#edit_txt_news_details').removeClass('border border-danger');
                    $('#btn-edit-news span').removeAttr('disabled').text('Update');
                    $('.error_edit_title').prop('hidden', true);
                    $('.error_edit_details').prop('hidden', true);

                    if (data.error.title) {
                        document.getElementsByClassName("error_edit_title")[0].removeAttribute("hidden");
                        $('.error_edit_title').text(data.error.title);
                        $('#edit_txt_news_name').addClass('border border-danger');
                    }
                    if (data.error.description) {
                        document.getElementsByClassName("error_edit_details")[0].removeAttribute("hidden");
                        $('.error_edit_details').text(data.error.description);
                        $('#edit_txt_news_details').addClass('border border-danger');
                    }
                }
            }, error:function (xhr, error, ajaxOptions, thrownError){
                $('#edit-spinner').removeClass('icon-spinner');
                $('#btn-edit-news span').removeAttr('disabled').text('Update');
                $('.error_edit_title').prop('hidden', true);
                $('.error_edit_details').prop('hidden', true);
                document.getElementsByClassName("error_edit_title")[0].removeAttribute("hidden");
                $('.error_edit_title').text('The title has already been taken.');
                $('#edit_txt_news_name').addClass('border border-danger');
                    
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
        $('.error_edit_title').prop('hidden', true);
        $('.error_edit_details').prop('hidden', true);
        var edit_txt_news_id = $(e.relatedTarget).data('id');
        var edit_txt_news_details = $(e.relatedTarget).data('description');
        var edit_txt_news_image = $(e.relatedTarget).data('image');
        var edit_txt_news_yt_link = $(e.relatedTarget).data('youtube-link');
        var edit_txt_news_title = $(e.relatedTarget).data('title');
        var edit_txt_news_option = $(e.relatedTarget).data('option');
        $('#edit_txt_news_name').removeClass('border border-danger');
        $('#edit_txt_news_details').removeClass('border border-danger');
        $('#frm-edit-event').find('#hdn_edit_featured_news_id').val(edit_txt_news_id);
        $('#frm-edit-event').find('#edit_txt_news_name').val(edit_txt_news_title);
        $('#frm-edit-event').find('#edit_txt_news_details').val(edit_txt_news_details);
        $('#frm-edit-event').find('#hdn_edit_image').val(edit_txt_news_image);
        $('#frm-edit-event').find('#hdn_edit_featured_news_yt').val(edit_txt_news_yt_link);
        $('#frm-edit-event').find('#image').html('<img src='+edit_txt_news_image+' alt="user">');
        if (edit_txt_news_yt_link !== '') {
            $('#frm-edit-event').find('#edit_txt_news_yt_link').val('https://www.youtube.com/watch?v='+edit_txt_news_yt_link);
        } else {
            $('#frm-edit-event').find('#edit_txt_news_yt_link').val('');
        }
        $('input[name=edit_txt_news_options]').val([edit_txt_news_option]);
    });

    $('#delete_featured_news_modal').on('show.bs.modal', function(e) {
        var delete_txt_news_id = $(e.relatedTarget).data('id');
        var delete_txt_news_title = $(e.relatedTarget).data('title');
        $('#frm-delete-event').find('#hdn_delete_featured_news_id').val(delete_txt_news_id);
        $('#frm-delete-event').find('#event_title').html('Are you sure you want to delete \"'+ delete_txt_news_title +'\"?');
    });
});