@extends('layout.master')

@section('stylesheets')

@endsection
@section('content')
	<!-- Banner -->
	<div class="page-banner">
		<div class="container">
			<div class="parallax-mask"></div>
			<div class="section-name">
				<h2>About Us</h2>
				<div class="short-text">
					<h5>About Us</h5>
				</div>
			</div>
		</div>
	</div>

	<div class="about-page-wrapper">
		<div class="description container">
			<div class="row ">
				<div class="col-md-6 ">
					<div class="image-wrapper">
						<img class="img-responsive" src="{{ asset('/img/company560x650.png') }}" alt="">
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="about-right-text">
						<div class="widget-title">
							<h4 align="middle">Our Company</h4>
						</div>
						<p class="first">Cosmic Gorgons is a local business and brand promoting the art and culture of video games and gaming. Inspired by the arcades of the late 80’s as well as the nostalgia of local couch games, Cosmic Gorgons is proud to promote a society of like-minded individuals, fun-loving enthusiasts, and driven competitive players.</p>
						<p class="second">Fostering a community where we can call ourselves family, Cosmic Gorgons is establishing and renewing an atmosphere of camaraderie through gaming. The establishment has and will continue where the Rumpus Room had left off, servicing a grander experience for both the casual and hardcore crowd.</p>
						<!-- <a href="#" class="btn btn-min btn-secondary"><span>Learn More</span></a> -->
					</div>
					<div class="about-right-text">
						<div class="widget-title">
							<h4 align="middle">Mission</h4>
						</div>
						<p class="first">Cosmic Gorgons seeks to share and spread the culture, art, and love of all forms of gaming. Primarily a brand, Cosmic Gorgons strives to deliver the love, camaraderie, and bond that gaming has brought us to everyone.</p>
						<p class="second">With our loyal competitive players, our fun and loving customers, and our team of astounding individuals, Cosmic Gorgons will keep on pushing an important value many gamers have forgotten; love.</p>
					</div>
					<div class="about-right-text">
						<div class="widget-title">
							<h4 align="middle">Vision</h4>
						</div>
						<p class="first">Cosmic Gorgons will continue to push towards a future where gaming is accepted all around, and it’s perfectly alright to be a gamer.</p>
						<p class="second">Gaming has amazing qualities that can bring the best in people, and most of all, get people to talk about things they love. Cosmic Gorgons envisions a world where acceptance, healthy competitiveness, and all people can bond over games.</p>
					</div>
						</br></br>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
@endsection