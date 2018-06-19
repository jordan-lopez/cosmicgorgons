@extends('layout.master')

@section('stylesheets')

@endsection
@section('content')
	<!-- Banner -->
	<div class="page-banner">
		<div class="container">
			<div class="parallax-mask"></div>
			<div class="section-name">
				<h2>Blog List</h2>
				<div class="short-text">
					<h5>Blog<i class="fa fa-angle-double-right"></i>Blog List</h5>
				</div>
			</div>
		</div>
	</div>

	<!-- Blog-Wrapper -->
	<div class="blog-page-wrapper">
		<div class="container">
			<div class="row">
				<div class="blog-posts col-md-8">
					@foreach ($blogs as $blog)
	                <div class="blog-box">
						<div class="blog-top-desc">
							<div class="blog-date">
								{{ date('d M Y', $blog->created_at->timestamp) }}
							</div>
							<h4>{{ $blog->title }}</h4>
							<i class="fa fa-user-o"></i> <strong>Admin</strong>
							<i class="fa fa-commenting-o"></i> <strong>10 Comments</strong>
						</div>
						<img class="img-responsive" src="{{ $blog->image }}" alt="">
						<div class="blog-btm-desc">
							{!! $blog->content !!}
							<a href="/blog/{{ $blog->slug }}" class="btn btn-min btn-solid"> Read More  <i class="fa fa-arrow-right"></i> </a>
						</div>
					</div>
					@endforeach
	                
					{{ $blogs->links() }}
				</div>	
				<!-- sidebar -->
				<div class="sidebar-wrapper col-md-4">
					<div class="sidebar">
						<div class="search-bar">
							<form action="#" >
								<div class="field">
									<input type="text" name="search" placeholder="Type and Hit Enter">
									<button><i class="fa fa-search"></i></button>
								</div>
							</form>
						</div>
						<div class="widget">
							<div class="widget-title">
								<h4>Categories</h4>
								<div class="sep">
									<div class="sep-inside"></div>
								</div>
							</div>
							<div class="categories">
								<a href="#">Charity<span>120</span></a>
								<a href="#">Donations <span>45</span></a>
								<a href="#">Volunteers <span>69</span></a>
								<a href="#">Travel <span>18</span></a>
								<a href="#">Events <span>103</span></a>
								<a href="#">Health <span>58</span></a>
								<a href="#">Medicine <span>12</span></a>
								<a href="#">Education <span>36</span></a>
							</div>
						</div>
						<div class="widget">
							<div class="widget-title">
								<h4>Recent Posts</h4>
								<div class="sep">
									<div class="sep-inside"></div>
								</div>
							</div>
							<div class="recent-posts clearfix">
								<div class="post clearfix">
									<div class="image-wrapper">
										<div class="mask"><a href="#"><i class="fa fa-link"></i></a></div>
										<img src="{{ asset('/img/mini/img-1.jpg') }}" alt="">
									</div>
									<div class="info-block">
										<a href="#"><h4>Help Them, Let’s Buy Them a Place To Live</h4></a>
										<div class="meta">
											<p><i class="fa fa-user"></i>lovelytheme</p>
											<span>&#x7C;</span>
											<p><i class="fa fa-clock-o"></i>21  jan, 2017</p>
										</div>
									</div>
								</div>
								<div class="post clearfix">
									<div class="image-wrapper">
										<div class="mask"><a href="#"><i class="fa fa-link"></i></a></div>
										<img src="{{ asset('/img/mini/img-2.jpg') }}" alt="">
									</div>
									<div class="info-block">
										<a href="#"><h4>Let's Build Them a New School</h4></a>
										<div class="meta">
											<p><i class="fa fa-user"></i>lovelytheme</p>
											<span>&#x7C;</span>
											<p><i class="fa fa-clock-o"></i>21  jan, 2017</p>
										</div>
									</div>
								</div>
								<div class="post clearfix">
									<div class="image-wrapper">
										<div class="mask"><a href="#"><i class="fa fa-link"></i></a></div>
										<img src="{{ asset('/img/mini/img-3.jpg') }}" alt="">
									</div>
									<div class="info-block">
										<a href="#"><h4>Let's Build Them a New School</h4></a>
										<div class="meta">
											<p><i class="fa fa-user"></i>lovelytheme</p>
											<span>&#x7C;</span>
											<p><i class="fa fa-clock-o"></i>21  jan, 2017</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="widget">
							<div class="widget-title">
								<h4>Tags</h4>
								<div class="sep">
									<div class="sep-inside"></div>
								</div>
							</div>
							<div class="tags">
								<a href="#"><span>Cause</span></a>
								<a href="#"><span>Lipsum</span></a>
								<a href="#"><span>Donation</span></a>
								<a href="#"><span>Charitable</span></a>
								<a href="#"><span>Homeless</span></a>
								<a href="#"><span>Blog</span></a>
								<a href="#"><span>Minimal</span></a>
								<a href="#"><span>Health</span></a>
								<a href="#"><span>Education</span></a>
								<a href="#"><span>LifStyle</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
@endsection