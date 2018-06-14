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
		          <ul class="p-daily-schedule-rates" id="daily-schedule-section">
		            
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