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
  <header class="site-navbar site-navbar-target" role="banner">
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
              <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="/home" class="nav-link">User's view</a></li>
              <li class="{{ Request::is('admin/users') ? 'active' : '' }}"><a href="/admin/users" class="nav-link">Users</a></li>
              <li class="{{ Request::is('admin/cars') ? 'active' : '' }}"><a href="/admin/cars" class="nav-link">Cars</a></li>
              <li class="{{ Request::is('admin/reserves') ? 'active' : '' }}"><a href="/admin/reserves" class="nav-link">Reserves</a></li>
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
      <script src="{{ asset('js/jquery-3.3.1.min.js') }}" type="0bc55061843315f39b994ed1-text/javascript"></script>
        <script src="{{ asset('js/popper.min.js') }}" type="0bc55061843315f39b994ed1-text/javascript"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" type="0bc55061843315f39b994ed1-text/javascript"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}" type="0bc55061843315f39b994ed1-text/javascript"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}" type="0bc55061843315f39b994ed1-text/javascript"></script>
        <script src="{{ asset('js/jquery.waypoints.min.js') }}" type="0bc55061843315f39b994ed1-text/javascript"></script>
        <script src="{{ asset('js/jquery.animateNumber.min.js') }}" type="0bc55061843315f39b994ed1-text/javascript"></script>
        <script src="{{ asset('js/jquery.fancybox.min.js') }}" type="0bc55061843315f39b994ed1-text/javascript"></script>
        <script src="{{ asset('js/jquery.easing.1.3.js') }}" type="0bc55061843315f39b994ed1-text/javascript"></script>
        <script src="{{ asset('js/bootstrap-datepicker.min.js') }}" type="0bc55061843315f39b994ed1-text/javascript"></script>
        <script src="{{ asset('js/aos.js') }}" type="0bc55061843315f39b994ed1-text/javascript"></script>
        <script src="{{ asset('js/main.js') }}" type="0bc55061843315f39b994ed1-text/javascript"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="0bc55061843315f39b994ed1-text/javascript"></script>
        <script type="0bc55061843315f39b994ed1-text/javascript">
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>
        <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="0bc55061843315f39b994ed1-|49" defer=""></script>
</body>
</html>
