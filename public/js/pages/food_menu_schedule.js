$(document).ready(function(){
	showFoodMenu();
	showDailySchedule()
})

function showFoodMenu() {
	var description;

	$.ajax({
		url: 'food-menu-sched/show',
		method: 'GET',
		dataType: "json",
		success:function(data){
			for (var i = 0, len = data.length; i < len; i++) {
				if(data[i].description == null){
					description = '';
				} else {
					description = data[i].description;
				}
			  if(data[i].category == "Snack") {
			  	$('#snack-section').append('<li>'
		              +'<img src="'+ data[i].image +'" class="p-food-menu-image">'
		              +'<h2 class="p-food-menu__list--name">'+ data[i].name +'</h2>'
		              +'<p class="p-food-menu__list--ingredients">'+ description +'</p>'
		              +'<h2 class="p-food-menu__list--price">'+ parseFloat(data[i].price).toFixed(2) +'php</h2>'
		              +'<div class="clearfix"></div>'
		            	+'</li>');
			  }
			  else if (data[i].category == "Rice Meal") {
			  	$('#rice-meal-section').append('<li>'
		              +'<img src="'+ data[i].image +'" class="p-food-menu-image">'
		              +'<h2 class="p-food-menu__list--name">'+ data[i].name +'</h2>'
		              +'<p class="p-food-menu__list--ingredients">'+ description +'</p>'
		              +'<h2 class="p-food-menu__list--price">'+ parseFloat(data[i].price).toFixed(2) +'php</h2>'
		              +'<div class="clearfix"></div>'
		            	+'</li>');
			  }
			  else if (data[i].category == "Drink") {
			  	$('#drink-section').append('<li>'
		              +'<img src="'+ data[i].image +'" class="p-food-menu-image">'
		              +'<h2 class="p-food-menu__list--name">'+ data[i].name +'</h2>'
		              +'<p class="p-food-menu__list--ingredients">'+ description +'</p>'
		              +'<h2 class="p-food-menu__list--price">'+ parseFloat(data[i].price).toFixed(2) +'php</h2>'
		              +'<div class="clearfix"></div>'
		            	+'</li>');
			  }
			  else{

			  }
			}
		}
	})
}

function showDailySchedule() {
	$.ajax({
		url: 'food-menu-sched/show-daily-sched-promo',
		method: 'GET',
		dataType: "json",
		success:function(data){
			for (var i = 0, len = data.length; i < len; i++) {
			  $('#daily-schedule-section').append('<li class="p-daily-schedule__card">'
		              + '<h2 class="p-daily-schedule__heading">'+ data[i].day +'</h2>'
		              + '<hr>'
		              + '<p class="p-daily-schedule_paragraph">'+ data[i].event_promo +'</p>'
		            + '</li>');
			}
		}
	})
}