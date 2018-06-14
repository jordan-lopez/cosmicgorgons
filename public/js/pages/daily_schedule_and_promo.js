var tbl_daily_schedule_and_promo;
var add_form_validate;
var edit_form_validate;

$(document).ready(function(){
	tbl_daily_schedule_and_promo = $('#tbl-daily-sched-promo').DataTable({
    'ajax': {
        url: 'manage-daily-schedule-and-promo/show',
        type: 'GET'
    },
  });

	addDailyScheduleAndPromo();
	editDailyScheduleAndPromo();
	deleteDailyScheduleAndPromo();
})

function addDailyScheduleAndPromo() {
	$('#btn-add-schedule').on('click', function(){
		$('#frm-add-schedule-promo')[0].reset();
		add_form_validate.resetForm();
		$('input').removeClass('my-error-class');
		$('select').removeClass('my-error-class');
	})
	
	add_form_validate = $("#frm-add-schedule-promo").validate({
		errorClass: "my-error-class",
   	validClass: "my-valid-class",

		rules: {
			txt_schedule_day: "required",
			txt_event_promo: "required"
		},
		messages:{
			txt_schedule_day: "Please input the day of schedule.",
			txt_event_promo: "Please input the event or promo."
		},
		submitHandler: function(frm_add_schedule_promo, e){
			e.preventDefault();
			$('#btn-add').attr('disabled', 'disabled').html('<i class="icon icon-spinner icon-spin"></i> Save');
			var form = $('#frm-add-schedule-promo');
			var data = new FormData($("#frm-add-schedule-promo")[0]);

			$.ajax({
				url: 'manage-daily-schedule-and-promo/store',
				type: 'POST',
				data: data,
				dataType: 'json',
				processData: false,
				contentType: false,
				success:function(data)
				{
    			tbl_daily_schedule_and_promo.ajax.reload(null, false);
					$('#frm-add-schedule-promo')[0].reset();
					$('#modal-add-schedule-promo').modal('hide');
					$('.modal-backdrop').hide();
					$('#btn-add').removeAttr('disabled').html('Save');

					// toast popup js
		    	$.toast({
		         heading: 'Success!',
		         text: 'Successfully added to the Daily Schedule.',
		         position: 'top-right',
		         loaderBg: '#fff',
		         icon: 'success',
		         hideAfter: 3500,
		         stack: 6
		     	});
				}, error:function (xhr, error, ajaxOptions, thrownError){
					alert(xhr.responseText);
				}
			})
		}
	})
}

function editDailyScheduleAndPromo() {
	$(document).on('click', '#btn-edit-schedule-and-promo', function(){
		edit_form_validate.resetForm();
		$('input').removeClass('my-error-class');
		$('select').removeClass('my-error-class');

		var schedule_promo_id = $(this).data('id');
		var schedule_promo_day = $(this).data('day');
		var schedule_promo_event = $(this).data('event-promo');

		$('#hdn-schedule-promo-id').val(schedule_promo_id);
		$('#txt-edit-schedule-day').val(schedule_promo_day);
		$('#txt-edit-event-promo').val(schedule_promo_event);
	});

	edit_form_validate = $("#frm-edit-schedule-promo").validate({
		errorClass: "my-error-class",
   	validClass: "my-valid-class",
   	
   	rules: {
			txt_edit_schedule_day: "required",
			txt_edit_event_promo: "required"
		},
		messages:{
			txt_edit_schedule_day: "Please input the day of schedule.",
			txt_edit_event_promo: "Please input the event or promo."
		},
		submitHandler: function(frm_edit_schedule_promo, e){
			e.preventDefault();
			$('#btn-edit').attr('disabled', 'disabled').html('<i class="icon icon-spinner icon-spin"></i> Edit');
			var form = $('#frm-edit-schedule-promo');
			var data = new FormData($("#frm-edit-schedule-promo")[0]);

			$.ajax({
					url: 'manage-daily-schedule-and-promo/update',
					type: 'POST',
					data: data,
					dataType: 'json',
					processData: false,
					contentType: false,
					success:function(data)
					{
      			tbl_daily_schedule_and_promo.ajax.reload(null, false);
						$('#frm-edit-schedule-promo')[0].reset();
						// position_tbl.ajax.reload(null, false);
						$('#modal-edit-schedule-promo').modal('hide');
						$('.modal-backdrop').hide();
						$('#btn-edit').removeAttr('disabled').html('Edit');

						// toast popup js
			    	$.toast({
			         heading: 'Success!',
			         text: 'Schedule and Promo has been successfully updated.',
			         position: 'top-right',
			         loaderBg: '#fff',
			         icon: 'success',
			         hideAfter: 3500,
			         stack: 6
			     	});
					}, error:function (xhr, error, ajaxOptions, thrownError){
						alert(xhr.responseText);
					}
			})
		}
	})
}

function deleteDailyScheduleAndPromo() {
	$(document).on('click', '#btn-delete-schedule-and-promo', function(){
		var schedule_promo_id = $(this).data('id');
		var schedule_promo_day = $(this).data('day');
		$('#hdn-delete-schedule-promo-id').val(schedule_promo_id);
		$('#schedule-promo-day').text(schedule_promo_day);
	});

	$('#frm-delete-schedule-promo').on('submit').bind('submit', function(e){
		e.preventDefault();
		$('#btn-delete').attr('disabled', 'disabled').html('<i class="icon icon-spinner icon-spin"></i> Delete');
		var form = $('#frm-delete-schedule-promo');
		var data = new FormData($("#frm-delete-schedule-promo")[0]);

		$.ajax({
				url: 'manage-daily-schedule-and-promo/delete',
				type: 'POST',
				data: data,
				dataType: 'json',
				processData: false,
				contentType: false,
				success:function(data)
				{
    			tbl_daily_schedule_and_promo.ajax.reload(null, false);
					$('#frm-delete-schedule-promo')[0].reset();
					$('#modal-delete-schedule-promo').modal('hide');
					$('.modal-backdrop').hide();
					$('#btn-delete').removeAttr('disabled').html('Delete');

					// toast popup js
		    	$.toast({
		         heading: 'Success!',
		         text: 'Successfully deleted from Daily Schedule.',
		         position: 'top-right',
		         loaderBg: '#fff',
		         icon: 'success',
		         hideAfter: 3500,
		         stack: 6
		     	});
				}, error:function (xhr, error, ajaxOptions, thrownError){
					alert(xhr.responseText);
				}
		})
	})
}