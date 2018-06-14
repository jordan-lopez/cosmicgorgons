var tbl_food_menu;
var add_form_validate;
var edit_form_validate;

$(document).ready(function(){
	tbl_food_menu = $('#tbl-food-menu').DataTable({
    'ajax': {
        url: 'manage-food-menu/show',
        type: 'GET'
    },
  });

	addFoodMenu();
	editFoodMenu();
	deleteFoodMenu();
})

function addFoodMenu() {
	$('#btn-add-food-menu').on('click', function(){
		$('#frm-add-food-menu')[0].reset();
		add_form_validate.resetForm();
		$('input').removeClass('my-error-class');
		$('select').removeClass('my-error-class');
	})
	
	add_form_validate = $("#frm-add-food-menu").validate({
		errorClass: "my-error-class",
   	validClass: "my-valid-class",

		rules: {
			txt_food_name: "required",
			txt_food_price: {
				required: true,
				number: true
			},
			slct_food_category: "required",
			txt_food_image: "required"
		},
		messages:{
			txt_food_name: "Please enter the food name.",
			txt_food_price: {
				required: "Please enter the food price.",
				number: "Please enter a valid number."
			},
			slct_food_category: "Please enter the food category.",
			txt_food_image: "Please enter the food image."
		},
		submitHandler: function(frm_add_food_menu, e){
		e.preventDefault();
		$('#btn-add').attr('disabled', 'disabled').html('<i class="icon icon-spinner icon-spin"></i> Saving');
		var form = $('#frm-add-food-menu');
		var data = new FormData($("#frm-add-food-menu")[0]);

		$.ajax({
				url: 'manage-food-menu/store',
				type: 'POST',
				data: data,
				dataType: 'json',
				processData: false,
				contentType: false,
				success:function(data)
				{
					// if (data.success == true) {
      			tbl_food_menu.ajax.reload(null, false);

						$('#frm-add-food-menu')[0].reset();
						// position_tbl.ajax.reload(null, false);
						$('#modal-add-food-menu').modal('hide');
						$('.modal-backdrop').hide();
						$('#btn-add').removeAttr('disabled').html('Save');

						// toast popup js
			    	$.toast({
			         heading: 'Success!',
			         text: 'Successfully added to the menu.',
			         position: 'top-right',
			         loaderBg: '#fff',
			         icon: 'success',
			         hideAfter: 3500,
			         stack: 6
			     	});

					// }else{
					// 	$('#frm-add-food-menu')[0].reset();
					// 	$('#modal-add-food-menu').modal('hide');
					// 	$('.modal-backdrop').hide();
					// 	$('#btn-add').removeAttr('disabled').html('Save');
					// 	// toast popup js
			  //   	// $.toast({
			  //    //    heading: 'Error!',
			  //    //    text: status.message,
			  //    //    position: 'top-right',
			  //    //    loaderBg: '#fff',
			  //    //    icon: 'error',
			  //    //    hideAfter: 3500,
			  //    //    stack: 6
			  //    // 	});
					// }
				}, error:function (xhr, error, ajaxOptions, thrownError){
					alert(xhr.responseText);
				}
			})
		}
	})
}

function editFoodMenu() {
	$(document).on('click', '#btn-edit-food-menu', function(){
		edit_form_validate.resetForm();
		$('input').removeClass('my-error-class');
		$('select').removeClass('my-error-class');

		var food_id = $(this).data('id');
		var food_name = $(this).data('name');
		var food_description = $(this).data('description');
		var food_price = $(this).data('price');
		var food_category = $(this).data('category');
		var food_image = $(this).data('image');

		$('#hdn-food-id').val(food_id);
		$('#txt-edit-food-name').val(food_name);
		$('#txt-edit-food-details').val(food_description);
		$('#txt-edit-food-price').val(food_price);
		$('#slct-edit-food-category').val(food_category);
		// $('#txt-edit-food-image').val(food_image);
	});

	edit_form_validate = $("#frm-edit-food-menu").validate({
		errorClass: "my-error-class",
   	validClass: "my-valid-class",
   	
   	rules: {
			txt_edit_food_name: "required",
			txt_edit_food_price: {
				required: true,
				number: true
			},
			slct_edit_food_category: "required",
			txt_edit_food_image: "required"
		},
		messages:{
			txt_edit_food_name: "Please enter the food name.",
			txt_edit_food_price: {
				required: "Please enter the food price.",
				number: "Please enter a valid number."
			},
			slct_edit_food_category: "Please enter the food category.",
			txt_edit_food_image: "Please enter the food image."
		},
		submitHandler: function(frm_edit_food_menu, e){
			e.preventDefault();
			$('#btn-edit').attr('disabled', 'disabled').html('<i class="icon icon-spinner icon-spin"></i> Editing');
			var form = $('#frm-edit-food-menu');
			var data = new FormData($("#frm-edit-food-menu")[0]);

			$.ajax({
					url: 'manage-food-menu/update',
					type: 'POST',
					data: data,
					dataType: 'json',
					processData: false,
					contentType: false,
					success:function(data)
					{
						// if (data.success == true) {
	      			tbl_food_menu.ajax.reload(null, false);
							$('#frm-edit-food-menu')[0].reset();
							// position_tbl.ajax.reload(null, false);
							$('#modal-edit-food-menu').modal('hide');
							$('.modal-backdrop').hide();
							$('#btn-edit').removeAttr('disabled').html('Edit');

							// toast popup js
				    	$.toast({
				         heading: 'Success!',
				         text: 'Menu has been successfully updated.',
				         position: 'top-right',
				         loaderBg: '#fff',
				         icon: 'success',
				         hideAfter: 3500,
				         stack: 6
				     	});

						// }else{
						// 	$('#frm-add-food-menu')[0].reset();
						// 	$('#modal-add-food-menu').modal('hide');
						// 	$('.modal-backdrop').hide();
						// 	$('#btn-add').removeAttr('disabled').html('Save');
						// 	// toast popup js
				  //   	// $.toast({
				  //    //    heading: 'Error!',
				  //    //    text: status.message,
				  //    //    position: 'top-right',
				  //    //    loaderBg: '#fff',
				  //    //    icon: 'error',
				  //    //    hideAfter: 3500,
				  //    //    stack: 6
				  //    // 	});
						// }
					}, error:function (xhr, error, ajaxOptions, thrownError){
						alert(xhr.responseText);
					}
			})
		}
	})
}

function deleteFoodMenu() {
	$(document).on('click', '#btn-delete-food-menu', function(){
		var food_id = $(this).data('id');
		var food_name = $(this).data('name');
		$('#food-menu-name').text(food_name);
		$('#hdn-delete-food-id').val(food_id);
	});

	$('#frm-delete-food-menu').on('submit').bind('submit', function(e){
		e.preventDefault();
		$('#btn-delete').attr('disabled', 'disabled').html('<i class="icon icon-spinner icon-spin"></i> Deleting');
		var form = $('#frm-delete-food-menu');
		var data = new FormData($("#frm-delete-food-menu")[0]);

		$.ajax({
				url: 'manage-food-menu/delete',
				type: 'POST',
				data: data,
				dataType: 'json',
				processData: false,
				contentType: false,
				success:function(data)
				{
					// if (data.success == true) {
      			tbl_food_menu.ajax.reload(null, false);
						$('#frm-delete-food-menu')[0].reset();
						// position_tbl.ajax.reload(null, false);
						$('#modal-delete-food-menu').modal('hide');
						$('.modal-backdrop').hide();
						$('#btn-delete').removeAttr('disabled').html('Delete');

						// toast popup js
			    	$.toast({
			         heading: 'Success!',
			         text: 'Successfully deleted from menu.',
			         position: 'top-right',
			         loaderBg: '#fff',
			         icon: 'success',
			         hideAfter: 3500,
			         stack: 6
			     	});

					// }else{
					// 	$('#frm-add-food-menu')[0].reset();
					// 	$('#modal-add-food-menu').modal('hide');
					// 	$('.modal-backdrop').hide();
					// 	$('#btn-add').removeAttr('disabled').html('Save');
					// 	// toast popup js
			  //   	// $.toast({
			  //    //    heading: 'Error!',
			  //    //    text: status.message,
			  //    //    position: 'top-right',
			  //    //    loaderBg: '#fff',
			  //    //    icon: 'error',
			  //    //    hideAfter: 3500,
			  //    //    stack: 6
			  //    // 	});
					// }
				}, error:function (xhr, error, ajaxOptions, thrownError){
					alert(xhr.responseText);
				}
		})
	})
}