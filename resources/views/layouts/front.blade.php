<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @yield('css')
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="{{asset('front_asset/assets/img/favicon.png')}}" rel="icon"> -->
  <!-- <link href="{{asset('front_asset/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('front_asset/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('front_asset/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('front_asset/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <!-- C:\wamp64\www\data_web1\public\front_asset\assets\vendor\owl.carousel\assets -->
  <link href="{{asset('front_asset/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('front_asset/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('front_asset/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('front_asset/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v1.1.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <?php $settings = DB::table('settings')
          ->where('settings_id', '1')
          ->get()->first(); ?>
        <label class="displaynone">

        </label>
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com"> {{ $settings->Email }}</a>
        <i class="icofont-phone"></i> {{ $settings->mobile_number }}
      </div>
      <div class="social-links">
        <a href="{{ url($settings->twitter)  }}" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="{{ url($settings->facebook) }}" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="{{ url($settings->instagram) }}" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="{{ url($settings->skype) }}" class="skype"><i class="icofont-skype"></i></a>
        <a href="{{ url($settings->linkedin) }}" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{url('/')}}">{{$settings->company_name}}<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="{{asset('front_asset/assets/img/logo.png')}}" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ (request()->segment(1) == 'home') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
          <li class="{{ (request()->segment(1) == 'About_us') ? 'active' : '' }}"><a href="{{URL('About_us')}}">About</a></li>
          <!--  <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li> -->

          <li class="{{ (request()->segment(1) == 'gallery') ? 'active' : '' }}"><a href="{{URL('gallery')}}">Gallery</a></li>
          <li class="{{ (request()->segment(1) == 'Product') ? 'active' : '' }}"><a href="{{URL('Product')}}">Product</a></li>
          <li class="{{ (request()->segment(1) == 'Charity') ? 'active' : '' }}"><a href="{{URL('Charity')}}">Charity</a></li>

          <!--  <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li class="{{ (request()->segment(1) == 'contact_us') ? 'active' : '' }}"><a href="{{URL('contact_us')}}">Contact</a></li>
          @if (isset(Auth::user()->id))
          <li><a href="{{url('getcart')}}"> <i class="icofont-cart-alt caeticon"><span style="border-radius: 50%;" class="badge badge-danger"> {{Cart::session(Auth::user()->id)->getContent()->count()}}</span></i></a></li>
          <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>
          @else
          <li><a href="{{url('login')}}">Login</a></li>
          <li><a href="{{url('customer_register')}}">Register</a></li>
          @endif
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <!-- ======= Breadcrumbs ======= -->
  @yield('Breadcrumbs')
  @if(session()->get('cart'))
  <div class="container-fluid section-bg" id="msg">
    <div class="alert-warning padding10">{{ session()->get('cart') }} </div>
  </div>



  @endif

  @yield('content')
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>{{$settings->company_name}}<span>.</span></h3>
            <p>{{$settings->address}}</p><br>
            <strong>Phone:</strong>{{$settings->Email}}<br>
            <strong>Email:</strong> {{$settings->mobile_number}}<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Accounts</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('agent_register')}}">Agent Register</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('customer_register')}}">Customer Register</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="{{ url($settings->twitter)  }}" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="{{ url($settings->facebook)  }}" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="{{ url($settings->instagram)  }}" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="{{ url($settings->skype)  }}" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="{{ url($settings->linkedin)  }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>{{$settings->company_name}}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
   <!--      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('front_asset/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('front_asset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('front_asset/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('front_asset/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('front_asset/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('front_asset/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('front_asset/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('front_asset/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('front_asset/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('front_asset/assets/vendor/aos/aos.js')}}"></script>
  <script type="text/javascript">
    setTimeout(function() {
      $("#msg").fadeOut("fast");
    }, 3000); // <-- time in milliseconds
  </script>
  <!-- Template Main JS File -->
  <script src="{{asset('front_asset/assets/js/main.js')}}"></script>
  @yield('js')
</body>

</html>