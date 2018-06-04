@extends('layout.master')

@section('stylesheets')
<link rel="stylesheet" href="{{ asset('/css/pricetable.css') }}">
@endsection
@section('content')
	<!-- Banner -->
	<div class="page-banner">
		<div class="container">
			<div class="parallax-mask"></div>
			<div class="section-name">
				<h2>Food Menu, Daily Schedule, & Promos</h2>
			</div>
		</div>
	</div>
	
<!-- Price Table Snacks Start -->
	<div class="contact-page-wrapper">
		<div class="container">
			<h4 style="text-align:center">FOOD MENU</h4>
			<p style="text-align:center">The Gorgonauts Favorites</p>
			</br>
			<!-- Snacks Photo -->
			<img src="{{ asset('/img/store/cgsnacks.png') }}" alt="snacks" style="width:200px;">
			<!-- Snacks Photo -->
			</br>
			<div class="snacks">
			  <ul class="price">
				<li class="header" style="background-color:#33CCCC">French Fries</li>
				<li class="grey">P 90.00</li>
				<li>BBQ Cheese Sour Cream</li>
			  </ul>
			</div>

			<div class="snacks">
			  <ul class="price">
				<li class="header" style="background-color:#33CCCC">Cheese Sticks</li>
				<li class="grey">P 100.00</li>
				<li>&nbsp;</li>
			  </ul>
			</div>

			<div class="snacks">
			  <ul class="price">
				<li class="header" style="background-color:#33CCCC">Hashbrown</li>
				<li class="grey">P 35.00</li>
				<li>&nbsp;</li>
			  </ul>
			</div>
			
				<div class="snacks">
			  <ul class="price">
				<li class="header" style="background-color:#33CCCC">Hotpockets</li>
				<li class="grey">P 120.00</li>
				<li>Ham & Cheese Pizza</li>
			  </ul>
			</div>
			
				<div class="snacks">
			  <ul class="price">
				<li class="header" style="background-color:#33CCCC">Nachos</li>
				<li class="grey">P 180.00</li>
				<li>&nbsp;</li>
			  </ul>
			</div>
			
		</div>
	</div>
<!-- Price Table Snacks End -->

<!-- Price Table Rice Meals Start -->
	<div class="contact-page-wrapper">
		<div class="container">		
		<!-- Snacks Photo -->
		<img src="{{ asset('/img/store/cgricemeals.png') }}" alt="rice meals" style="width:200px;">
		<!-- Snacks Photo -->
		</br>
			<div class="ricemeals">
			  <ul class="price">
				<li class="header" style="background-color:#33CCCC">Space Nuggets</li>
				<li class="grey">P 110.00</li>
				<li>Nuggets + Rice</li>
			  </ul>
			</div>

			<div class="ricemeals">
			  <ul class="price">
				<li class="header" style="background-color:#33CCCC">Space Jam</li>
				<li class="grey">P 110.00</li>
				<li>Space + Rice</li>
			  </ul>
			</div>

			<div class="ricemeals">
			  <ul class="price">
				<li class="header" style="background-color:#33CCCC">You Bacon Me Crazy</li>
				<li class="grey">P 135.00</li>
				<li>Bacon + Rice</li>
			  </ul>
			</div>			
			
			<div class="ricemeals">
			  <ul class="price">
				<li class="header" style="background-color:#33CCCC">Cahmbow Meal</li>
				<li class="grey">P 160.00</li>
				<li>Nuggets + Spam + Rice</li>
			  </ul>
			</div>
		</div>
	</div>
<!-- Price Table Rice Meals End -->

<!-- Price Table Drinks Start -->
	<div class="contact-page-wrapper">
		<div class="container">
		<!-- Snacks Photo -->
		<img src="{{ asset('/img/store/cgdrinks.png') }}" alt="drinks" style="width:200px;">
		<!-- Snacks Photo -->
		</br>
			<div class="drinks">
			  <ul class="price">
				<li class="header" style="background-color:#33CCCC">Softdrinks</li>
				<li class="grey">P 35.00</li>
				<li>Coke, Mountain Dew, MUG</li>
			  </ul>
			</div>

			<div class="drinks">
			  <ul class="price">
				<li class="header" style="background-color:#33CCCC">Unli Iced Tea</li>
				<li class="grey">P 50.00</li>
				<li>&nbsp;</li>
			  </ul>
			</div>

			<div class="drinks">
			  <ul class="price">
				<li class="header" style="background-color:#33CCCC">Float</li>
				<li class="grey">P 65.00</li>
				<li>Coke, Mountain Dew, MUG</li>
			  </ul>
			</div>			
		</div>
	</div>
<!-- Price Table Drinks End -->

<!-- Schedule Start -->
	<div class="contact-page-wrapper">
		<div class="container">
			</br>
				<h4 style="text-align:center">DAILY SCHEDULE</h4>
				<p style="text-align:center">Fun & Exciting Time</p>

			<!-- Scheduled Description -->
			<div class="schedule">
			  <ul class="price">
				<li class="header" style="background-color:#33CCCC">Tuesday/Thursday</li>
				<li class="schedesc">Regular Rates</li>
			  </ul>
			</div>

			<div class="schedule">
			  <ul class="price">
				<li class="header" style="background-color:#33CCCC">Wednesday</li>
				<li class="schedesc">2 + 1 Hour Promo</li>
			  </ul>
			</div>

			<div class="schedule">
			  <ul class="price">
				<li class="header" style="background-color:#33CCCC">Friday</li>
				<li class="schedesc">FGC Promo</li>
			  </ul>
			</div>
			
			<div class="schedule">
			  <ul class="price">
				<li class="header" style="background-color:#33CCCC">Saturday</li>
				<li class="schedesc">Cosmic Events</li>
			  </ul>
			</div>
			
			<div class="schedule">
			  <ul class="price">
				<li class="header" style="background-color:#33CCCC">Sunday</li>
				<li class="schedesc">Cosmic Quest</li>
			  </ul>
			</div>
		</div>
	</div>
<!-- Schedule End -->
@endsection

@section('scripts')
@endsection