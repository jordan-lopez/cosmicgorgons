$(document).ready(function() {

    $('#tbl-category').DataTable({
        "ajax": {
            url: "category-show",
            type: 'GET'
        },
    });
    
    $("#frm-add-category").validate({
        ignore: [],
        debug: false,
        rules: {
            name: {
                required:true,
                remote:{
                    url:"/check-name",
                    type:"get"
               }
            }
        },
        messages: {
            name: {
                required: "The name field is required.",
                remote: "This name already exists."
            }
        },
        submitHandler: function(frm_add_category, e) {
            event.preventDefault();

            var data = new FormData($("#frm-add-category")[0]);
            $('#btn-add-category').attr('disabled', 'disabled').html('<i class="icon icon-spinner icon-spin"></i>Saving');

            $.ajax({
                url: 'category-store',
                type: 'POST',
                data: data,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function(data) {
                    $('#add_category_modal').modal('hide');
                    $('#tbl-category').DataTable().ajax.reload(null, false);
                    $('#frm-add-category').trigger('reset');
                    $('#btn-add-category').removeAttr('disabled').html('Save');

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

    $("#frm-edit-category").validate({
        ignore: [],
        debug: false,
        rules: {
            name: {
                required:true,
                remote:{
                    url:"/check-name",
                    type:"get"
               }
            }
        },
        messages: {
            name: {
                required: "The name field is required.",
                remote: "This name already exists."
            }
        },
        submitHandler: function(frm_edit_category, e) {
            event.preventDefault();

            var data = new FormData($("#frm-edit-category")[0]);

            $('#btn-edit-category').attr('disabled', 'disabled').html('<i class="icon icon-spinner icon-spin"></i>Updating');

            $.ajax({
                url: 'category-update',
                type: 'POST',
                data: data,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function(data) {
                    $('#edit_category_modal').modal('hide');
                    $('#tbl-category').DataTable().ajax.reload(null, false);
                    $('#frm-edit-category').trigger('reset');
                    $('#btn-edit-category').removeAttr('disabled').html('Update');
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

    $("#frm-delete-category").unbind('submit').on('submit', function(event) {
        event.preventDefault();

        var data = new FormData($("#frm-delete-category")[0]);

        $('#btn-delete-category').attr('disabled', 'disabled').html('<i class="icon icon-spinner icon-spin"></i>Deleting');

        $.ajax({
            url:'category-delete',
            type:'POST',
            data:data,
            dataType:'json',
            processData: false,
            contentType: false,
            success: function(data){
                $('#delete_category_modal').modal('hide');
                $('#tbl-category').DataTable().ajax.reload(null, false);
                $('#frm-delete-category').trigger('reset');
                $('#btn-delete-category').removeAttr('disabled').html('Delete');
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
            }
        });
    });

    $('#edit_category_modal').on('show.bs.modal', function(e) {
        var id = $(e.relatedTarget).data('id');
        var name = $(e.relatedTarget).data('name');
        $('#frm-edit-category').find('#hdn_edit_category_id').val(id);
        $('#frm-edit-category').find('#edit_txt_category_name').val(name);
    });

    $('#delete_category_modal').on('show.bs.modal', function(e) {
        var id = $(e.relatedTarget).data('id');
        var name = $(e.relatedTarget).data('name');
        $('#frm-delete-category').find('#hdn_delete_category_id').val(id);
        $('#frm-delete-category').find('#category_name').html('Are you sure you want to delete \"'+ name +'\"?');
    });
});