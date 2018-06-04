@extends('layout.master')

@section('stylesheets')

@endsection
@section('content')
	<!-- Banner -->
	<div class="page-banner">
		<div class="container">
			<div class="parallax-mask"></div>
			<div class="section-name">
				<h2>Leaderboards & Rankings</h2>
				<div class="short-text">
					<h5>Store<i class="fa fa-angle-double-right"></i>Leaderboards & Rankings</h5>
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-wrapper">
		<div class="container">
			<h4 style="text-align:center">Cosmic Gorgons Marvel Week 1</h4>
			<p style="text-align:center">Weekly Tournament</p>
			</br>
			<!-- First Tournament -->
			<div align="middle" style="width: 100%; overflow-y: hidden;">
				<iframe src="https://cosmicgorgons.challonge.com/CGmarvelweek1" width="100%" height="500" frameborder="0" scrolling="auto" allowtransparency="true"></iframe>
			</div>
			</br>
			<h4 style="text-align:center">Cosmic Gorgons Marvel Week 2</h4>
			<p style="text-align:center">Weekly Tournament</p>
			</br>
			<!-- Second Tournament -->
			<div align="middle" style="width: 100%; overflow-y: hidden;">
				<iframe src="https://cosmicgorgons.challonge.com/CGmarvelweek1" width="100%" height="500" frameborder="0" scrolling="auto" allowtransparency="true"></iframe>
			</div>
			
		</div>
	</div>
@endsection

@section('scripts')
@endsection