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
      </div>
    </div>
  </div>

  <!-- content wrapper -->
  <div class="p-wrapper" style="padding-top:30px;">
    <div class="p-content container">
      <div class="p-the-gorgonauts">
        <!-- bridge command -->
        <h2 class="p-the-gorgonauts__heading">BRIDGE COMMAND</h2>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="content-box">
              <div class="img-wrapper">
                <div class="overlay"></div>
                <img class="img-responsive" src="assets/img/default.png" alt="default">
              </div>
              <div class="info-block">
                <h4 class="p-the-gorgonauts__paragraph--is-name">
                  <a href="#">David Cayuca</a>
                </h4>
                <em>
                  <p class="p-the-gorgonauts__paragraph--is-position">Space Commander</p>
                </em>
                <p class="p-the-gorgonauts__paragraph--is-ign">CG.SpicyD</p>
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
                <img class="img-responsive" src="assets/img/default.png" alt="default">
              </div>
              <div class="info-block">
                <h4 class="p-the-gorgonauts__paragraph--is-name">
                  <a href="#">Alex van Schoonhoven</a>
                </h4>
                <em>
                  <p class="p-the-gorgonauts__paragraph--is-position">Intel and Communications Officer</p>
                </em>
                <p class="p-the-gorgonauts__paragraph--is-ign">CG.Destimo</p>
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
                <img class="img-responsive" src="assets/img/default.png" alt="default">
              </div>
              <div class="info-block">
                <h4 class="p-the-gorgonauts__paragraph--is-name">
                  <a href="#">Edrian Chua</a>
                </h4>
                <em>
                  <p class="p-the-gorgonauts__paragraph--is-position">Finances and Logistics Officer</p>
                </em>
                <p class="p-the-gorgonauts__paragraph--is-ign">CG.Mandla</p>
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
                <img class="img-responsive" src="assets/img/default.png" alt="default">
              </div>
              <div class="info-block">
                <h4 class="p-the-gorgonauts__paragraph--is-name">
                  <a href="#">Luis Clarin</a>
                </h4>
                <em>
                  <p class="p-the-gorgonauts__paragraph--is-position">Finances and Crew Officer</p>
                </em>
                <p class="p-the-gorgonauts__paragraph--is-ign">CG.Rawr</p>
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
        <!-- /bridge command -->

        <!-- the crew -->
        <h2 class="p-the-gorgonauts__heading">THE CREW</h2>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="content-box">
              <div class="img-wrapper">
                <div class="overlay"></div>
                <img class="img-responsive" src="assets/img/default.png" alt="default">
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
                <img class="img-responsive" src="assets/img/default.png" alt="default">
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
                <img class="img-responsive" src="assets/img/default.png" alt="default">
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
                <img class="img-responsive" src="assets/img/default.png" alt="default">
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
                <img class="img-responsive" src="assets/img/default.png" alt="default">
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

        <!-- esports team -->
        <h2 class="p-the-gorgonauts__heading">ESPORTS TEAM</h2>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="content-box">
              <div class="img-wrapper">
                <div class="overlay"></div>
                <img class="img-responsive" src="assets/img/default.png" alt="default">
              </div>
              <div class="info-block">
                <h4 class="p-the-gorgonauts__paragraph--is-name">
                  <a href="#">Juan Miguel Champo</a>
                </h4>
                <p class="p-the-gorgonauts__paragraph--is-position"></p>
                <p class="p-the-gorgonauts__paragraph--is-ign">CG.Champo</p>
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
                <img class="img-responsive" src="assets/img/default.png" alt="default">
              </div>
              <div class="info-block">
                <h4 class="p-the-gorgonauts__paragraph--is-name">
                  <a href="#">Ninno Rodriguez</a>
                </h4>
                <p class="p-the-gorgonauts__paragraph--is-position"></p>
                <p class="p-the-gorgonauts__paragraph--is-ign">CG.Hollywood Haiku</p>
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
                <img class="img-responsive" src="assets/img/default.png" alt="default">
              </div>
              <div class="info-block">
                <h4 class="p-the-gorgonauts__paragraph--is-name">
                  <a href="#">Ivan Thought</a>
                </h4>
                <p class="p-the-gorgonauts__paragraph--is-position"></p>
                <p class="p-the-gorgonauts__paragraph--is-ign">CG.IvanThought</p>
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
                <img class="img-responsive" src="assets/img/default.png" alt="default">
              </div>
              <div class="info-block">
                <h4 class="p-the-gorgonauts__paragraph--is-name">
                  <a href="#">Michael Anthony Reynoso</a>
                </h4>
                <p class="p-the-gorgonauts__paragraph--is-position"></p>
                <p class="p-the-gorgonauts__paragraph--is-ign">CG.NTR.MicMic</p>
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
                <img class="img-responsive" src="assets/img/default.png" alt="default">
              </div>
              <div class="info-block">
                <h4 class="p-the-gorgonauts__paragraph--is-name">
                  <a href="#">Rykee Rodriguez</a>
                </h4>
                <p class="p-the-gorgonauts__paragraph--is-position"></p>
                <p class="p-the-gorgonauts__paragraph--is-ign">CG.</p>
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
        <!-- /esports team -->
      </div>

    </div>
  </div>
  <!-- /content wrapper -->
@endsection

@section('scripts')
@endsection