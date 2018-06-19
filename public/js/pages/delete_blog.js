$(document).ready(function() {

    $('#delete_blog_modal').on('show.bs.modal', function(e) {
        var id = $(e.relatedTarget).data('id');
        var title = $(e.relatedTarget).data('title');
        $('#frm-delete-blog').find('#hdn_delete_blog_id').val(id);
        $('#frm-delete-blog').find('#blog_title').html('Are you sure you want to delete \"' + title + '\" post?');
    });
    
    $("#frm-delete-blog").unbind('submit').on('submit', function(event) {
        event.preventDefault();

        var data = new FormData($("#frm-delete-blog")[0]);

        $('#btn-delete-blog').attr('disabled', 'disabled').html('<i class="icon icon-spinner icon-spin"></i>Deleting');

        $.ajax({
            url: 'blog/delete',
            type: 'POST',
            data: data,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function(data) {
                $('#delete_blog_modal').modal('hide');
                $('#tbl-blog').DataTable().ajax.reload(null, false);
                $('#frm-delete-blog').trigger('reset');
                $('#btn-delete-blog span').removeAttr('disabled').text('Delete');
                $('#delete-spinner').removeClass('icon-spinner');
                $.toast({
                    heading: 'Success',
                    text: 'Deleted successfully.',
                    position: 'top-right',
                    loaderBg: '#ff6849',
                    icon: 'success',
                    hideAfter: 3500
                });
            },
            error: function(xhr, error, ajaxOptions, thrownError) {
                alert(xhr.responseText);
                $('#btn-delete-blog span').removeAttr('disabled').text('Delete');
            }
        });
    });

});