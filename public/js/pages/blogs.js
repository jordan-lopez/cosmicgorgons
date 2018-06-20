$(document).ready(function() {

	$('#thumbnail_prewiew').hide();
	$('#thumbnail_edit').hide();

	function readUrlPreview(input) {

		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$("#frm-create-blog").find('#image_preview').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#frm-create-blog").find("#image").change(function() {
		readUrlPreview(this);
		$('#thumbnail_prewiew').show();
	});

	function readUrlEdit(input) {

		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$("#frm-edit-blog").find('#image_preview').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#frm-edit-blog").find("#image").change(function() {
		readUrlEdit(this);
		$('#thumbnail_edit').show();
	});

   $("#frm-create-blog").validate({
   		ignore: [],
   		debug: false,
		rules: {
			title: {
				required:true,
				remote:{
                    url:"/check-blog-title",
                    type:"get"
               }
			},
			image: "required",
			content: {
				required: function() {
					CKEDITOR.instances.content.updateElement();
				},
				minlength: 10
			}
		},
		messages:{
			title: {
				required: "The title field is required.",
                remote: "This title already exists."
          	},
			image: "The image field is required.",
			content: {
				required: "Please enter Text",
				minlength: "Please enter 10 characters"
			}
		},
		submitHandler: function(frm_create_blog, e){
	        event.preventDefault();

	        var data = new FormData($("#frm-create-blog")[0]);

	        $('#btn-add-blog').attr('disabled', 'disabled').html('<i class="icon icon-spinner icon-spin"></i>Publishing');

	        $.ajax({
	            url:'/blog/create',
	            type:'POST',
	            data:data,
	            dataType:'json',
	            processData: false,
	            contentType: false,
	            success: function(data){
	               	localStorage.setItem("Create",data.OperationStatus)
					window.location.href = '/blog';
	            }, error:function (xhr, error, ajaxOptions, thrownError){
					alert(xhr.responseText);
	            }
	        });
    	}
    })

   $("#frm-edit-blog").validate({
   		ignore: [],
   		debug: false,
		rules: {
			title: {
				required:true,
				remote:{
                    url:"/check-blog-title",
                    type:"get"
               }
			},
			content: {
				required: function() {
					CKEDITOR.instances.content.updateElement();
				},
				minlength: 10
			}
		},
		messages:{
			title: {
				required: "The title field is required.",
                remote: "This title already exists."
          	},
			content: {
				required: "Please enter Text",
				minlength: "Please enter 10 characters"
			}
		},
		submitHandler: function(frm_edit_blog, e){
	        event.preventDefault();

	        var data = new FormData($("#frm-edit-blog")[0]);

	        $('#btn-edit-blog').attr('disabled', 'disabled').html('<i class="icon icon-spinner icon-spin"></i>Updating');

	        $.ajax({
	            url:'/blog/edit/{slug}',
	            type:'POST',
	            data:data,
	            dataType:'json',
	            processData: false,
	            contentType: false,
	            success: function(data){
	               	localStorage.setItem("Update",data.OperationStatus)
					window.location.href = '/blog';
	            }, error:function (xhr, error, ajaxOptions, thrownError){
					alert(xhr.responseText);
	            }
	        });
    	}
    })

});