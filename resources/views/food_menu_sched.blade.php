@extends('layout.master')

@section('stylesheets')
<link rel="stylesheet" href="{{ asset('/css/pages/menu_schedule.css') }}">
@endsection
@section('content')
	 <!-- Banner -->
	<div class="page-banner">
		<div class="container">
		  <div class="parallax-mask"></div>
		  <div class="section-name">
		    <h1 class="banner-title">Food Menu &nbsp;&nbsp; | &nbsp;&nbsp; Daily Schedule &nbsp;&nbsp; | &nbsp;&nbsp; Promos</h1>
		  </div>
		</div>
	</div>

	<!-- content wrapper -->
	<div class="p-wrapper" style="padding-top:30px;">
		<div class="p-content container">
		  <!-- menu schedule title -->
		  <div class="row ">
		    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		      <div class="p-title">
		        <h1 class="p-title__heading--is-large">Food Menu</h1>
		        <h3 class="p-title__heading--is-medium">The Gorgonauts' Favorites!</h3>
		      </div>
		    </div>
		  </div>
		  <!-- /menu schedule title -->

		  <div class="p-food-menu">
		    <!-- snacks content -->
		    <div class="row">
		      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		        <div class="p-food-menu-category">
		          <h2 class="p-food-menu__heading">SNACKS</h2>
		          <ul class="p-food-menu__list" id="snack-section">
		            {{-- <li>
		              <img src="{{ asset('/img/food menu icons/cheese-sticks.png') }}" class="p-food-menu-image">
		              <h2 class="p-food-menu__list--name">cheese sticks</h2>
		              <p class="p-food-menu__list--ingredients"></p>
		              <h2 class="p-food-menu__list--price">100.00php</h2>
		              <div class="clearfix"></div>
		            </li>
		            <li>
		              <img src="{{ asset('img/food menu icons/french-fries.png') }}" class="p-food-menu-image">
		              <h2 class="p-food-menu__list--name">french fries</h2>
		              <p class="p-food-menu__list--ingredients">bbq, cheese, sour cream</p>
		              <h2 class="p-food-menu__list--price">90.00php</h2>
		              <div class="clearfix"></div>
		            </li>
		            <li>
		              <img src="{{ asset('img/food menu icons/hashbrown.png') }}" class="p-food-menu-image">
		              <h2 class="p-food-menu__list--name">hashbrown</h2>
		              <p class="p-food-menu__list--ingredients"></p>
		              <h2 class="p-food-menu__list--price">35.00php</h2>
		              <div class="clearfix"></div>
		            </li>
		            <li>
		              <img src="{{ asset('img/food menu icons/hotpockets.png') }}" class="p-food-menu-image">
		              <h2 class="p-food-menu__list--name">hotpockets</h2>
		              <p class="p-food-menu__list--ingredients">ham &amp; cheese pizza</p>
		              <h2 class="p-food-menu__list--price">120.00php</h2>
		              <div class="clearfix"></div>
		            </li>
		            <li>
		              <img src="{{ asset('img/food menu icons/nachos.png') }}" class="p-food-menu-image">
		              <h2 class="p-food-menu__list--name">Nachos</h2>
		              <p class="p-food-menu__list--ingredients"></p>
		              <h2 class="p-food-menu__list--price">180.00php</h2>
		              <div class="clearfix"></div>
		            </li> --}}
		          </ul>
		        </div>
		      </div>
		    </div>
		    <!-- /snacks content -->

		    <!-- rice meals content -->
		    <div class="row">
		      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		        <div class="p-food-menu-category">
		          <h2 class="p-food-menu__heading">RICE MEALS</h2>
		          <ul class="p-food-menu__list" id="rice-meal-section">
		            {{-- <li>
		              <img src="{{ asset('img/food menu icons/cahmbow-meal.png') }}" class="p-food-menu-image">
		              <h2 class="p-food-menu__list--name">cahmbow meal</h2>
		              <p class="p-food-menu__list--ingredients">spam + nuggets + rice</p>
		              <h2 class="p-food-menu__list--price">160.00php</h2>
		              <div class="clearfix"></div>
		            </li>
		            <li>
		              <img src="{{ asset('img/food menu icons/space-jam.png') }}" class="p-food-menu-image">
		              <h2 class="p-food-menu__list--name">space jam</h2>
		              <p class="p-food-menu__list--ingredients">spam with rice</p>
		              <h2 class="p-food-menu__list--price">110.00php</h2>
		              <div class="clearfix"></div>
		            </li>
		            <li>
		              <img src="{{ asset('img/food menu icons/space-nuggets.png') }}" class="p-food-menu-image">
		              <h2 class="p-food-menu__list--name">space nuggets</h2>
		              <p class="p-food-menu__list--ingredients">nuggets with rice</p>
		              <h2 class="p-food-menu__list--price">110.00php</h2>
		              <div class="clearfix"></div>
		            </li>
		            <li>
		              <img src="{{ asset('img/food menu icons/you-bacon-me-crazy.png') }}" class="p-food-menu-image">
		              <h2 class="p-food-menu__list--name">you bacon me crazy</h2>
		              <p class="p-food-menu__list--ingredients">bacon with rice</p>
		              <h2 class="p-food-menu__list--price">135.00php</h2>
		              <div class="clearfix"></div>
		            </li> --}}
		          </ul>
		        </div>
		      </div>
		    </div>
		    <!-- /rice meals content -->

		    <!-- drinks content -->
		    <div class="row">
		      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		        <div class="p-food-menu-category">
		          <h2 class="p-food-menu__heading">DRINKS</h2>
		          <ul class="p-food-menu__list" id="drink-section">
		            {{-- <li>
		              <img src="{{ asset('img/food menu icons/float.png') }}" class="p-food-menu-image">
		              <h2 class="p-food-menu__list--name">float</h2>
		              <p class="p-food-menu__list--ingredients">coke, mtn dew, mug</p>
		              <h2 class="p-food-menu__list--price">65.00php</h2>
		              <div class="clearfix"></div>
		            </li>
		            <li>
		              <img src="{{ asset('img/food menu icons/unli-iced-tea.png') }}" class="p-food-menu-image">
		              <h2 class="p-food-menu__list--name">unli iced tea</h2>
		              <p class="p-food-menu__list--ingredients"></p>
		              <h2 class="p-food-menu__list--price">50.00php</h2>
		              <div class="clearfix"></div>
		            </li>
		            <li>
		              <img src="{{ asset('img/food menu icons/softdrinks.png') }}" class="p-food-menu-image">
		              <h2 class="p-food-menu__list--name">softdrinks</h2>
		              <p class="p-food-menu__list--ingredients">coke, mtn dew, mug</p>
		              <h2 class="p-food-menu__list--price">35.00php</h2>
		              <div class="clearfix"></div>
		            </li>
		          </ul> --}}
		        </div>
		      </div>
		    </div>
		    <!-- /drinks content -->
		  </div>

		  <!-- daily schedule title -->
		  <div class="row ">
		    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		      <div class="p-title">
		        <h1 class="p-title__heading--is-large">Daily Schedule</h1>
		        <h3 class="p-title__heading--is-medium">Fun and Exciting Time!</h3>
		      </div>
		    </div>
		  </div>
		  <!-- /daily schedule title -->

		  <!-- daily schedule content -->
		  <div class="p-food-menu">
		    <div class="row">
		      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		        <div class="p-daily-schedule">
		          <ul class="p-daily-schedule-rates">
		            <li class="p-daily-schedule__card">
		              <h2 class="p-daily-schedule__heading">tuesday/thursday</h2>
		              <hr>
		              <p class="p-daily-schedule_paragraph">Regular Rates</p>
		            </li>
		            <li class="p-daily-schedule__card">
		              <h2 class="p-daily-schedule__heading">wednesday</h2>
		              <hr>
		              <p class="p-daily-schedule_paragraph">2 + 1 Hour Promo</p>
		            </li>
		            <li class="p-daily-schedule__card">
		              <h2 class="p-daily-schedule__heading">friday</h2>
		              <hr>
		              <p class="p-daily-schedule_paragraph">FGC Promo</p>
		            </li>
		            <li class="p-daily-schedule__card">
		              <h2 class="p-daily-schedule__heading">saturday</h2>
		              <hr>
		              <p class="p-daily-schedule_paragraph">Cosmic Events</p>
		            </li>
		            <li class="p-daily-schedule__card">
		              <h2 class="p-daily-schedule__heading">sunday</h2>
		              <hr>
		              <p class="p-daily-schedule_paragraph">Cosmic Quest</p>
		            </li>
		          </ul>
		        </div>
		      </div>
		    </div>
		  </div>
		  <!-- /daily schedule content -->
		</div>
	</div>
	<!-- /content wrapper -->
@endsection

@section('scripts')
<script src="{{ asset('js/pages/food_menu_schedule.js') }}"></script>
@endsection