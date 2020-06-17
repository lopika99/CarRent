<!doctype html>
<html lang="en">
  <head>
    <title>{{ $title ?? '' }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
      .adsbox{
        display:none;
      }
    </style>
    <script>
            var msg = '{{Session::get('alert')}}';
            var exist = '{{Session::has('alert')}}';
            if(exist){
            alert(msg);
            }
        </script>
  </head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <div class="site-wrap" id="home-section">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
    <div class="site-mobile-menu-body"></div>
  </div>
  <header class="site-navbar page-header site-navbar-target" role="banner">
    <div class="container">
      <div class="row align-items-center position-relative">
        <div class="col-3 ">
          <div class="site-logo">
            <a href="/home">CarRent</a>
          </div>
        </div>
        <div class="col-9  text-right">
          <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>
          <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
            <ul class="site-menu main-menu js-clone-nav ml-auto ">
              @if(auth()->user()['isAdmin'] == 1)
              <li class="{{ Request::is('/admin/users') ? 'active' : '' }}"><a href="/admin/users" class="nav-link">Admin's view</a></li>
              @endif
              <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="/home" class="nav-link">Home</a></li>
              <li class="{{ Request::is('all_cars') ? 'active' : '' }}"><a href="/all_cars" class="nav-link">Cars</a></li>
              <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/about" class="nav-link">About</a></li>
              <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact" class="nav-link">Contact</a></li>
                @if (!(Auth::check()))
                  <li class="{{ Request::is('login') ? 'active' : '' }}">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  <li class="{{ Request::is('register') ? 'active' : '' }}">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
                @else
                  <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
                  </li>
                @endif
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  @yield('content')
  <footer class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <h2 class="footer-heading mb-4">About Us</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        </div>
                        <div class="col-lg-8 ml-auto">
                            <div class="row">
                                <div class="col-lg-3">
                                    <h2 class="footer-heading mb-4">Quick Links</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Testimonials</a></li>
                                        <li><a href="#">Terms of Service</a></li>
                                        <li><a href="#">Privacy</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <h2 class="footer-heading mb-4">Quick Links</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Testimonials</a></li>
                                        <li><a href="#">Terms of Service</a></li>
                                        <li><a href="#">Privacy</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Quick Links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Quick Links</h2>
                                    <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>Copyright &copy;<script >document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        </div>
                    </div>
                </div>
                </div>
            </footer>
        </div>
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
        <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

        <script >
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>
    </body>
    <br>
</html>