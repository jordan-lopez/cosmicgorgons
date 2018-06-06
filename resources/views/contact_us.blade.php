@extends('layout.master')

@section('stylesheets')

@endsection
@section('content')
	<!-- Banner -->
	<div class="page-banner">
		<div class="container">
			<div class="parallax-mask"></div>
			<div class="section-name">
				<h2>Contact Us</h2>
				<div class="short-text">
					<h5>Home<i class="fa fa-angle-double-right"></i>Contact Us</h5>
				</div>
			</div>
		</div>
	</div>
	
	<div class="contact-map-area">
		<div class="map-area" >
			<br><br>
			<div class="section-name"><h2>Cosmic Gorgons' Location</h2></div><br><br>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.595502749961!2d121.05469391541469!3d14.622103789788797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b79564bf08e1%3A0xa0d4ab449b3c012e!2sCosmic+Gorgons!5e0!3m2!1sen!2sus!4v1517843998841" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>

	<!-- contact wrapper -->
	<div class="contact-page-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-sm-4 widget">
							<h4>Address</h4>
							<i class="fa fa-map-marker"></i>
							<p>Unit #60 Cubao Expo</p>
							<p>General Romulo Avenue</p>
							<p>QC, Metro Manila Philippines</p>
						</div>
						<div class="col-sm-4 widget">
							<h4>Phone</h4>
							<i class="fa fa-phone"></i>
							<p>+639209032982</p>
						</div>
						<div class="col-sm-4 widget">
							<h4>E-mail</h4>
							<i class="fa fa-envelope"></i>
							<p>cosmicgorgons@mail.com</p>
							<p>alex@cosmicgorgons.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="comment-form-wrapper contact-from clearfix">
						<div class="widget-title ">
							<h4>CONTACT US</h4>
							<p>We would like to hear from you!</p>
						</div>
						<!-- Contact Form -->
						<form action="contact.php" method="POST" class="comment-form row altered">
							<div class="field col-sm-4">
								<h4>Name</h4>
								<input type="name" name="name" placeholder="name" required="">
							</div>
							<div class="field col-sm-4">
								<h4>E-mail</h4>
								<input type="email" name="email" placeholder="email address" required="">
							</div>
							<div class="field col-sm-4">
								<h4>Subject</h4>
								<input type="subject" name="subject" placeholder="subject" required="">
							</div>
							<div class="field col-sm-12">
								<h4>Message</h4>
								<textarea name="message" placeholder="Your Message"></textarea>
							</div>
							<div class="field col-sm-4">
								<button class="btn btn-big btn-solid" name="submit" type="submit">Send</button>
							</div>
						</form>
						<!-- Contact Form -->						
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
@endsection