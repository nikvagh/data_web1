

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ config('app.name', 'Laravel') }}</title>

  <link rel="shortcut icon" type="image/png" href="{{ url('new_front_asset/images/favicon.png') }}"/>

  <link rel="stylesheet" href="{{ url('new_front_asset/css/fontawesome.min.css') }}">

  <link rel="stylesheet" href="{{ url('new_front_asset/css/icofont.css') }}">

  <link rel="stylesheet" href="{{ url('new_front_asset/css/bootstrap.min.css') }}">

  <link rel="stylesheet" href="{{ url('new_front_asset/css/lightcase.css') }}">

  <link rel="stylesheet" href="{{ url('new_front_asset/css/owl.carousel.min.css') }}">

  <link rel="stylesheet" href="{{ url('new_front_asset/css/jquery-ui.min.css') }}">

  <link rel="stylesheet" href="{{ url('new_front_asset/css/nice-select.css') }}">

  <link rel="stylesheet" href="{{ url('new_front_asset/css/animate.css') }}">

  <link rel="stylesheet" href="{{ url('new_front_asset/css/style.css') }}">

  <link rel="stylesheet" href="{{ url('new_front_asset/css/responsive.css') }}">
   

  <!-- =======================================================
  * Template Name: Mamba - v2.4.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 @yield('content')





  <script src="{{ url('new_front_asset//js/jquery-3.3.1.min.js') }}"></script>

  <script src="{{ url('new_front_asset/js/bootstrap.min.js') }}"></script>

  <script src="{{ url('new_front_asset/js/jquery.nice-select.js') }}"></script>

  <script src="{{ url('new_front_asset/js/lightcase.js') }}"></script>

  <script src="{{ url('new_front_asset/js/owl.carousel.min.js') }}"></script>

  <script src="{{ url('new_front_asset/js/jquery-ui.min.js') }}"></script>

  <script src="{{ url('new_front_asset/js/wow.min.js') }}"></script>

  <script src="{{ url('new_front_asset/js/jquery.waypoints.min.js') }}"></script>

  <script src="{{ url('new_front_asset/js/jquery.countup.min.js') }}"></script>

  <script src="{{ url('new_front_asset/js/jquery.paroller.min.js') }}"></script>

  <script src="{{ url('new_front_asset/js/main.js') }}"></script>

</body>

</html>