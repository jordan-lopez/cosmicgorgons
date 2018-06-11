$(document).ready(function(){
	addFoodMenu();
	editFoodMenu();
	deleteFoodMenu();
})

function addFoodMenu() {
	$('#btn-add-food-menu').on('click', function(){
		$('#frm-add-food-menu')[0].reset();
	})

	$('#frm-add-food-menu').bind('submit').on('submit', function(e){
		e.preventDefault();
		$('#btn-add').attr('disabled', 'disabled').html('<i class="icon icon-spinner icon-spin"></i> Save');
		var form = $('#frm-add-food-menu');
		var data = new FormData($("#frm-add-food-menu")[0]);

		$.ajax({
				url: 'create-food-menu',
				type: 'POST',
				data: data,
				dataType: 'json',
				processData: false,
				contentType: false,
				success:function(data)
				{
					// if (data.success == true) {
						$('#tbl-food-menu').find('tbody').append('<tr>'
                                            + '<td class="w-10"><span class="round">'
                                            + '<img src="'+ data.image +'"></span>'
                                            + '</td>'
                                            + '<td>'
                                            + '<h6>'+ data.name +'</h6>'
                                            + '</td>'
                                            + '<td>'+ data.description +'</td>'
                                            + '<td>&#8369;'+ data.price +'</td>'
                                            + '<td>'+ data.category +'</td>'
                                            + '<td>'
                                            + '<a id="btn-edit-food-menu" class="btn-fab btn-success r5 white-text" data-toggle="modal" data-target="#modal-edit-food-menu" data-id="'+ data.id +'" data-name="'+ data.name +'" data-description="'+ data.description +'" data-price="'+ data.price +'" data-image="'+ data.image +'">'
                                            + '<i class="icon-edit"></i>'
                                            + '</a>&nbsp'
                                            + '<a id="btn-delete-food-menu" class="btn-fab btn-danger r5 white-text" data-toggle="modal" data-target="#modal-delete-food-menu" data-id="'+ data.id +'" data-name="'+ data.name +'">'
                                            + '<i class="icon-trash"></i>'
                                            + '</a>'
                                            + '</td>'
                                        		+ '</tr>');

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
	})
}

function editFoodMenu() {
	$(document).on('click', '#btn-edit-food-menu', function(){
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
	});

	$('#frm-edit-food-menu').on('submit').bind('submit', function(e){
		e.preventDefault();
		$('#btn-edit').attr('disabled', 'disabled').html('<i class="icon icon-spinner icon-spin"></i> Edit');
		var form = $('#frm-edit-food-menu');
		var data = new FormData($("#frm-edit-food-menu")[0]);

		$.ajax({
				url: 'update-food-menu',
				type: 'POST',
				data: data,
				dataType: 'json',
				processData: false,
				contentType: false,
				success:function(data)
				{
					// if (data.success == true) {
						$('#tbl-food-menu').find('tbody').append('<tr>'
                                            + '<td class="w-10"><span class="round">'
                                            + '<img src="'+ data.image +'"></span>'
                                            + '</td>'
                                            + '<td>'
                                            + '<h6>'+ data.name +'</h6>'
                                            + '</td>'
                                            + '<td>'+ data.description +'</td>'
                                            + '<td>&#8369;'+ data.price +'</td>'
                                            + '<td>'+ data.category +'</td>'
                                            + '<td>'
                                            + '<a id="btn-edit-food-menu" class="btn-fab btn-success r5 white-text" data-toggle="modal" data-target="#modal-edit-food-menu" data-id="'+ data.id +'" data-name="'+ data.name +'" data-description="'+ data.description +'" data-price="'+ data.price +'" data-image="'+ data.image +'">'
                                            + '<i class="icon-edit"></i>'
                                            + '</a>&nbsp'
                                          	+ '<a id="btn-delete-food-menu" class="btn-fab btn-danger r5 white-text" data-toggle="modal" data-target="#modal-delete-food-menu" data-id="'+ data.id +'" data-name="'+ data.name +'">'
                                            + '<i class="icon-trash"></i>'
                                            + '</a>'
                                            + '</td>'
                                        		+ '</tr>');

						$('#frm-edit-food-menu')[0].reset();
						// position_tbl.ajax.reload(null, false);
						$('#modal-edit-food-menu').modal('hide');
						$('.modal-backdrop').hide();
						$('#btn-edit').removeAttr('disabled').html('Edit');

						// toast popup js
			    	$.toast({
			         heading: 'Success!',
			         text: 'Menu has successfully updated.',
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

function deleteFoodMenu() {
	$(document).on('click', '#btn-delete-food-menu', function(){
		var food_id = $(this).data('id');
		var food_name = $(this).data('name');
		$('#food-menu-name').text(food_name);
		$('#hdn-delete-food-id').val(food_id);
	});

	$('#frm-delete-food-menu').on('submit').bind('submit', function(e){
		e.preventDefault();
		$('#btn-delete').attr('disabled', 'disabled').html('<i class="icon icon-spinner icon-spin"></i> Delete');
		var form = $('#frm-delete-food-menu');
		var data = new FormData($("#frm-delete-food-menu")[0]);

		$.ajax({
				url: 'delete-food-menu',
				type: 'POST',
				data: data,
				dataType: 'json',
				processData: false,
				contentType: false,
				success:function(data)
				{
					// if (data.success == true) {
						$('#tbl-food-menu').find('tbody').append('<tr>'
                                            + '<td class="w-10"><span class="round">'
                                            + '<img src="'+ data.image +'"></span>'
                                            + '</td>'
                                            + '<td>'
                                            + '<h6>'+ data.name +'</h6>'
                                            + '</td>'
                                            + '<td>'+ data.description +'</td>'
                                            + '<td>&#8369;'+ data.price +'</td>'
                                            + '<td>'
                                            + '<a id="btn-edit-food-menu" class="btn-fab btn-success r5 white-text" data-toggle="modal" data-target="#modal-edit-food-menu" data-id="'+ data.id +'" data-name="'+ data.name +'" data-description="'+ data.description +'" data-price="'+ data.price +'" data-image="'+ data.image +'">'
                                            + '<i class="icon-edit"></i>'
                                            + '</a>&nbsp'
                                          	+ '<a id="btn-delete-food-menu" class="btn-fab btn-danger r5 white-text" data-toggle="modal" data-target="#modal-delete-food-menu" data-id="'+ data.id +'" data-name="'+ data.name +'">'
                                            + '<i class="icon-trash"></i>'
                                            + '</a>'
                                            + '</td>'
                                        		+ '</tr>');

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