<!-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            {{-- @yield('content') --}}
        </main>
    </div>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Auto Unit</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('back_asset/img/favicon.png') }}" rel="icon">
  <link href="{{ url('back_asset/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('back_asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('back_asset/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ url('back_asset/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ url('back_asset/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ url('back_asset/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ url('back_asset/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ url('back_asset/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('back_asset/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v2.4.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 @yield('content')




  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('back_asset/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('back_asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('back_asset/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ url('back_asset/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ url('back_asset/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
  <script src="{{ url('back_asset/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ url('back_asset/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ url('back_asset/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ url('back_asset/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ url('back_asset/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('back_asset/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('back_asset/js/main.js') }}"></script>

</body>

</html>