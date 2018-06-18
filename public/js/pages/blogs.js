$(document).ready(function() {

   $("#frm-create-blog").validate({
   		ignore: [],
   		debug: false,
		rules: {
			title: "required",
			image: "required",
			content: {
				required: function() {
					CKEDITOR.instances.content.updateElement();
				},
				minlength: 10
			}
		},
		messages:{
			title: "The title field is required.",
			image: "The image field is required.",
			content: {
				required: "Please enter Text",
				minlength: "Please enter 10 characters"
			}
		},
		submitHandler: function(frm_create_blog, e){
	        event.preventDefault();

	        var data = new FormData($("#frm-create-blog")[0]);

	        $('#btn-add-blog span').attr('disabled', 'disabled').text(' Publishing');
	        $('#add-spinner').addClass('icon-spinner');

	        $.ajax({
	            url:'create-blog',
	            type:'POST',
	            data:data,
	            dataType:'json',
	            processData: false,
	            contentType: false,
	            success: function(data){
	               	localStorage.setItem("Status",data.OperationStatus)
					window.location.href = '/blog';
	            }, error:function (xhr, error, ajaxOptions, thrownError){
					alert(xhr.responseText);
	            }
	        });
    	}
    })
});