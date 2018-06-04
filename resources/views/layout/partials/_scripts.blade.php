	<!-- Video Script -->
	
	<script>
	// Get the video
	var video = document.getElementById("videoback");

	// Get the button
	var btn = document.getElementById("vidBtn");

	// Pause and play the video, and change the button text
	function myFunction() {
		if (video.paused) {
			video.play();
			btn.innerHTML = "Pause";
		} else {
			video.pause();
			btn.innerHTML = "Play";
		}
	}
	</script>
	
	<!-- Scripts -->
	<script type="text/javascript" src="{{ asset('/js/jquery2.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/jquery.meanmenu.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/progress-bar-appear.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/nivo-lightbox.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/isotope.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/countdown.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBEypW1XtGLWpikFPcityAok8rhJzzWRw "></script>
	<script type="text/javascript" src="{{ asset('/js/gmaps.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/plugins.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/js.js') }}"></script>