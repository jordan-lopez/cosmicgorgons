@extends('layout.master')

@section('stylesheets')
<link rel="stylesheet" href="{{ asset('/css/pages/the_gorgonauts.css') }}">
@endsection
@section('content')
	<!-- Banner -->
  <div class="page-banner">
    <div class="container">
      <div class="parallax-mask"></div>
      <div class="section-name">
        <h1 class="banner-title">The Gorgonauts</h1>
        <div class="short-text">
          <h5>The Gorgonauts<i class="fa fa-angle-double-right"></i>The Crew</h5>
        </div>
      </div>
    </div>
  </div>

  <!-- content wrapper -->
  <div class="p-wrapper" style="padding-top:30px;">
    <div class="p-content container">
      <div class="p-the-gorgonauts">
        <!-- the crew -->
        <h2 class="p-the-gorgonauts__heading">THE CREW</h2>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="content-box">
              <div class="img-wrapper">
                <div class="overlay"></div>
                <img class="img-responsive" src="{{ asset('img/default.png') }}" alt="default">
              </div>
              <div class="info-block">
                <h4 class="p-the-gorgonauts__paragraph--is-name">
                  <a href="#">Brian Maniquis</a>
                </h4>
                <p class="p-the-gorgonauts__paragraph--is-position"></p>
                <p class="p-the-gorgonauts__paragraph--is-ign">CG.Fat_Mamba</p>
                <ul class="p-the-gorgonauts__socials">
                  <li>
                    <a href="#" title="">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" title="">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="content-box">
              <div class="img-wrapper">
                <div class="overlay"></div>
                <img class="img-responsive" src="{{ asset('img/default.png') }}" alt="default">
              </div>
              <div class="info-block">
                <h4 class="p-the-gorgonauts__paragraph--is-name">
                  <a href="#">Kendrick Haw</a>
                </h4>
                <p class="p-the-gorgonauts__paragraph--is-position"></p>
                <p class="p-the-gorgonauts__paragraph--is-ign">CG.Ellura</p>
                <ul class="p-the-gorgonauts__socials">
                  <li>
                    <a href="#" title="">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" title="">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="content-box">
              <div class="img-wrapper">
                <div class="overlay"></div>
                <img class="img-responsive" src="{{ asset('img/default.png') }}" alt="default">
              </div>
              <div class="info-block">
                <h4 class="p-the-gorgonauts__paragraph--is-name">
                  <a href="#">Kirk Dychiao</a>
                </h4>
                <p class="p-the-gorgonauts__paragraph--is-position"></p>
                <p class="p-the-gorgonauts__paragraph--is-ign">CG.LemonTea</p>
                <ul class="p-the-gorgonauts__socials">
                  <li>
                    <a href="#" title="">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" title="">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="content-box">
              <div class="img-wrapper">
                <div class="overlay"></div>
                <img class="img-responsive" src="{{ asset('img/default.png') }}" alt="default">
              </div>
              <div class="info-block">
                <h4 class="p-the-gorgonauts__paragraph--is-name">
                  <a href="#">Juabe Inciong</a>
                </h4>
                <p class="p-the-gorgonauts__paragraph--is-position"></p>
                <p class="p-the-gorgonauts__paragraph--is-ign">CG.MisterJuaber</p>
                <ul class="p-the-gorgonauts__socials">
                  <li>
                    <a href="#" title="">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" title="">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="content-box">
              <div class="img-wrapper">
                <div class="overlay"></div>
                <img class="img-responsive" src="{{ asset('img/default.png') }}" alt="default">
              </div>
              <div class="info-block">
                <h4 class="p-the-gorgonauts__paragraph--is-name">
                  <a href="#">Jasper Sabigan</a>
                </h4>
                <p class="p-the-gorgonauts__paragraph--is-position"></p>
                <p class="p-the-gorgonauts__paragraph--is-ign">CG.Jase</p>
                <ul class="p-the-gorgonauts__socials">
                  <li>
                    <a href="#" title="">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" title="">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- /the crew -->
      </div>

    </div>
  </div>
  <!-- /content wrapper -->
@endsection

@section('scripts')
@endsection