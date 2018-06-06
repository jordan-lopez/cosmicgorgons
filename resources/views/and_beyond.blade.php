@extends('layout.master')

@section('stylesheets')

@endsection
@section('content')
	<!-- Banner -->
	<div class="page-banner">
		<div class="container">
			<div class="parallax-mask"></div>
			<div class="section-name">
				<h2>And Beyond</h2>
				<div class="short-text">
					<h5>Mothership<i class="fa fa-angle-double-right"></i>And Beyond</h5>
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-wrapper">
		<div class="container">
			<div class="row cause">
				<div class="col-md-10 col-md-offset-1">
					<div class="image-wrapper">
						<img class="img-responsive" src="{{ asset('/img/underconstruction.png') }}" alt="Under Construction">
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
@endsection