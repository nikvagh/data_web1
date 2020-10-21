	

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
 @yield('css')
  <!-- =======================================================
  * Template Name: Mamba - v2.4.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
 <?php $settings = DB::table('settings')
          ->where('settings_id', '1')
          ->get()->first(); ?>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:{{$settings->Email}}">{{$settings->Email}}</a>
        <i class="icofont-phone"></i>  {{$settings->mobile_number}}
      </div>
      <div class="social-links float-right">
        <a href="{{ url($settings->twitter)  }}" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="{{ url($settings->facebook) }}" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="{{ url($settings->instagram) }}" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="{{ url($settings->skype) }}" class="skype"><i class="icofont-skype"></i></a>
        <a href="{{ url($settings->linkedin) }}" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span><img src="{{ url('back_asset/img/slide/au.png') }}"></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="{{ url('back_asset/img/logo.png') }}" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
         <li class="{{ (request()->segment(1) == 'home') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
          <li class="{{ (request()->segment(1) == 'About_us') ? 'active' : '' }}"><a href="{{URL('About_us')}}">About</a></li>
          <!--  <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li> -->

          <li class="{{ (request()->segment(1) == 'gallery') ? 'active' : '' }}"><a href="{{URL('gallery')}}">Gallery</a></li>
          <li class="{{ (request()->segment(1) == 'Product') ? 'active' : '' }}"><a href="{{URL('Product')}}">Product</a></li>
          <li class="{{ (request()->segment(1) == 'Charity') ? 'active' : '' }}"><a href="{{URL('Charity')}}">Charity</a></li>
           @if(Auth::user())
            @if(Auth::user()->role=="2")
	                            <li class="nav-item dropdown">
	                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown">console</a>
	                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	                                	 <a class="dropdown-item" href="{{url('admin')}}">Dashboard</a>
	                                    <a class="dropdown-item" href="{{url('admin/customer')}}">Customer</a>
	                                    <a class="dropdown-item" href="{{url('admin/agent')}}">Agents</a>
	                                    <a class="dropdown-item" href="{{url('admin/product')}}">Products</a>
	                                    <a class="dropdown-item" href="{{url('admin/package')}}">Packages</a>
	                                    <a class="dropdown-item" href="{{url('Gallery/Videos')}}">Trading Videos</a>
	                                    <a class="dropdown-item" href="{{url('Gallery/Trading_screenshots')}}">Trading Screenshots</a>
	                                    


	                                  
	                                </div>
	                            </li>
	                          

	                            @elseif(Auth::user()->role=="3")
	                            <li class="nav-item dropdown">
	                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown">console</a>
	                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	                                	 <a class="dropdown-item" href="{{url('agent')}}">Dashboard</a>
	                                    <a class="dropdown-item" href="{{url('customerlist')}}">Customer</a>
	                                    <a class="dropdown-item" href="{{url('taranjesonlist')}}">Commission</a>
	                                    <a class="dropdown-item" href="{{url('package')}}">Packages</a>
	                                    <a class="dropdown-item" href="{{url('withdraw')}}">withdraw</a>
	                                </div>
	                            </li>
	                           


	                            @elseif(Auth::user()->role=="4")
	                            <li class="nav-item dropdown">
	                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown">console</a>
	                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	                                	 <a class="dropdown-item" href="{{url('customer')}}">Dashboard</a>
	                                    <a class="dropdown-item" href="{{url('transaction')}}">Transaction</a>
	                                    <a class="dropdown-item" href="{{url('customers/packag')}}">Packages</a>
	                                    
	                                </div>
	                            </li>

	                         		@endif

	                                @if(Auth::user()->role=="2")
	                                 <li class="nav-item">
	                                 <a class="nav-link " href="{{url('admin/settings')}}">Settings</a>
	                             </li>
	                                @elseif(Auth::user()->role=="3")
	                                <li class="nav-item">
	                                 <a class="nav-link " href="{{url('agent/profile')}}">Profile</a>
	                             </li>
	                                @elseif(Auth::user()->role=="4")
	                                <li class="nav-item">
	                                 <a class="nav-link " href="{{url('profile')}}">Profile</a>
	                             </li>
	                              
	                                @endif
	                               
	                            	</li>
	                            
	                             <li class="nav-item dropdown"> <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a></li>
	                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf </form>
                                   @if(Auth::user()->role=="4")
                                <li><a href="{{url('getcart')}}"> <h5><i class="icofont-cart-alt caeticon"></i><span  class="badge badge-danger rounded-circle" style="padding: 3px;"> {{Cart::session(Auth::user()->id)->getContent()->count()}}</span></h5></a></li>
                               @endif
	                             @else
	                             <li><a class="nav-link" href="{{url('login')}}">Login</a></li>
	                            <li><a class="nav-link" href="{{url('customer_register')}}">Register </a></li>
                        	
	                            @endif
	                             

            
          
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
 @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Auto Unit</h3>
            <p>
             {{ $settings->address }}<br>	
              <strong>Phone:</strong>  {{ $settings->mobile_number }}<br>
              <strong>Email:</strong> {{ $settings->Email }}<br>
            </p>
            <div class="social-links mt-3">
 		<a href="{{ url($settings->twitter)  }}" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="{{ url($settings->facebook) }}" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="{{ url($settings->instagram) }}" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="{{ url($settings->skype) }}" class="skype"><i class="icofont-skype"></i></a>
        <a href="{{ url($settings->linkedin) }}" class="linkedin"><i class="icofont-linkedin"></i></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/About_us') }}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/gallery') }}">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/Charity') }}">Charity</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/Product') }}">Product</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Accounts</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/agent_register') }}">Agent Register</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/customer_register') }}">Customer Register</a></li>
             
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Auto Unit</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
        Designed by <a href="#">Igeekteam</a>
      </div>
    </div>
  </footer><!-- End Footer -->

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
	<script type="text/javascript">
	    setTimeout(function () {
	        $("#msg").fadeOut("fast");
	    }, 5000); // <-- time in milliseconds
	</script>
	  @yield('js')
</body>

</html>








