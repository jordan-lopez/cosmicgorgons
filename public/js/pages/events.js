$(document).ready(function() {

    $('#tbl-featured-news').DataTable({
        "ajax": {
            url: "featured-news/show",
            type: 'GET'
        },
    });

    $('#thumbnail-preview').hide();

    function readUrlPreview(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $("#frm-add-event").find('#image_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#frm-add-event").find("#txt_news_image").change(function() {
        readUrlPreview(this);
        $('#thumbnail-preview').show();
    });

    function readUrlEdit(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $("#frm-edit-event").find('#image_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#frm-edit-event").find("#edit_txt_news_image").change(function() {
        readUrlEdit(this);
        $('#thumbnail-edit').show();
    });

    $('#add-spinner').removeClass('icon-spinner');
    $('#edit-spinner').removeClass('icon-spinner');
    $('#delete-spinner').removeClass('icon-spinner');
    
    $("#frm-add-event").validate({
        ignore: [],
        debug: false,
        rules: {
            title: {
                required:true,
                remote:{
                    url:"/check-news-title",
                    type:"get"
               }
            },
            description: "required",
            image: "required"
        },
        messages: {
            title: {
                required: "The title field is required.",
                remote: "This title already exists."
            },
            description: "The description field is required.",
            image: "The image field is required."
        },
        submitHandler: function(frm_add_event, e) {
            event.preventDefault();

            var data = new FormData($("#frm-add-event")[0]);
            $('#btn-add-news').attr('disabled', 'disabled').html('<i class="icon icon-spinner icon-spin"></i>Saving');

            $.ajax({
                url: 'featured-news/store',
                type: 'POST',
                data: data,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function(data) {
                    $('#add_featured_news_modal').modal('hide');
                    $('#tbl-featured-news').DataTable().ajax.reload(null, false);
                    $('#frm-add-event').trigger('reset');
                    $('#btn-add-news span').removeAttr('disabled').text('Save');
                    $('#add-spinner').removeClass('icon-spinner');

                    $.toast({
                        heading: 'Success',
                        text: data.success,
                        position: 'top-right',
                        loaderBg: '#ff6849',
                        icon: 'success',
                        hideAfter: 3500
                    });
                },
                error: function(xhr, error, ajaxOptions, thrownError) {
                    alert(xhr.responseText);
                }
            });
        }
    });

    $("#frm-edit-event").validate({
        ignore: [],
        debug: false,
        rules: {
            title: {
                required:true,
                remote:{
                    url:"/check-news-title",
                    type:"get"
               }
            },
            description: "required"
        },
        messages: {
            title: {
                required: "The title field is required.",
                remote: "This title already exists."
            },
            description: "The description field is required."
        },
        submitHandler: function(frm_add_event, e) {
            event.preventDefault();

            var data = new FormData($("#frm-edit-event")[0]);

            $('#btn-edit-news').attr('disabled', 'disabled').html('<i class="icon icon-spinner icon-spin"></i>Updating');

            $.ajax({
                url: 'featured-news/update',
                type: 'POST',
                data: data,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function(data) {
                    $('#edit_featured_news_modal').modal('hide');
                    $('#tbl-featured-news').DataTable().ajax.reload(null, false);
                    $('#frm-edit-event').trigger('reset');
                    $('#btn-edit-news span').removeAttr('disabled').text('Update');
                    $('#edit-spinner').removeClass('icon-spinner');
                    $.toast({
                        heading: 'Success',
                        text: data.success,
                        position: 'top-right',
                        loaderBg: '#ff6849',
                        icon: 'success',
                        hideAfter: 3500
                    });
                },
                error: function(xhr, error, ajaxOptions, thrownError) {
                    alert(xhr.responseText);

                }
            });
        }
    });

    $("#frm-delete-event").unbind('submit').on('submit', function(event) {
        event.preventDefault();

        var data = new FormData($("#frm-delete-event")[0]);

        $('#btn-delete-news').attr('disabled', 'disabled').html('<i class="icon icon-spinner icon-spin"></i>Deleting');

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
        var edit_txt_news_yt_link = $(e.relatedTarget).data('youtube-link');
        var edit_txt_news_title = $(e.relatedTarget).data('title');
        var edit_txt_news_option = $(e.relatedTarget).data('option');
        $('#frm-edit-event').find('#hdn_edit_featured_news_id').val(edit_txt_news_id);
        $('#frm-edit-event').find('#edit_txt_news_name').val(edit_txt_news_title);
        $('#frm-edit-event').find('#edit_txt_news_details').val(edit_txt_news_details);
        $('#frm-edit-event').find('#hdn_edit_image').val(edit_txt_news_image);
        $('#frm-edit-event').find('#hdn_edit_featured_news_yt').val(edit_txt_news_yt_link);
        $('#frm-edit-event').find('#thumbnail-edit').html('<img src='+edit_txt_news_image+' id="image_preview" alt="user">');
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