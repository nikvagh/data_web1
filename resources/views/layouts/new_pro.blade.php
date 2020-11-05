<!DOCTYPE html>

<html lang="en">



<!-- Mirrored from pixner.net/behoof/demo/home-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Mar 2020 14:57:32 GMT -->

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Auto Unit</title>

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
   
 @yield('css')
</head>

<body>



  <!-- preloader start -->

  <div class="preloader">

    <div class="preloader-box">

      <div>L</div>

      <div>O</div>

      <div>A</div>

      <div>D</div>

      <div>I</div>

      <div>N</div>

      <div>G</div>

    </div>

  </div>

  <!-- preloader end -->
 <?php $settings = DB::table('settings')
          ->where('settings_id', '1')
          ->get()->first(); ?>
    <!-- signin-area start -->

    <div class="modal fade" id="signInModal" tabindex="-1" role="dialog"  aria-hidden="true">

      <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content bdr-radius">

          <div class="signin-wrapper">

            <div class="signin-wrapper-header text-center">

              <div class="logo"><img src="{{ url('new_front_asset/images/au.png') }}" alt="image"></div>

              <h3 class="title">Login with</h3>

              <p>Welcome back, please sign in below</p>

            </div>

            <form class="signin-form">

              <div class="form-group">

                <label for="signinEmail">Email*</label>

                <input type="email" class="form-control" id="signinEmail" placeholder="Enter your Email">

              </div>

              <div class="form-group">

                <label for="signinPass">Password*</label>

                <input type="password" class="form-control" id="signinPass" placeholder="Password">

              </div>

              <div class="form-group">

                <div class="custom-checkbox">

                  <input type="checkbox" name="id-1" id="id-1" checked>

                  <label for="id-1">Remember Password</label>

                  <span class="checkbox"></span>

                </div>

              </div>

              <button type="submit" class="btn btn-primary btn-hover">Log In</button>

            </form>

            <div class="signin-wrapper-footer" id="#footer">

              <p class="bottom-text">Don’t have an account? <a href="#0" data-toggle="modal" data-target="#signUpModal" data-dismiss="modal" aria-label="Close">Sign Up Now</a></p>

              <div class="divider"><span>or</span></div>

              <ul class="social-list">

                <li><a href="#0"><i class="fa fa-facebook-f"></i></a></li>

                <li><a href="#0"><i class="fa fa-twitter"></i></a></li>

                <li><a href="#0"><i class="fa fa-linkedin"></i></a></li>

              </ul>

            </div>

          </div>

        </div>

      </div>

    </div>

    <!-- signin-area end -->

    

    <!-- signup-area start -->

    <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog"  aria-hidden="true">

      <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content bdr-radius">

          <div class="signin-wrapper">

            <div class="signin-wrapper-header text-center">

              <div class="logo"><img src="{{ url('new_front_asset/images/elements/auto.png') }}" alt="image"></div>

              <h3 class="title">Login with</h3>

              <p>Welcome back, please sign in below</p>

            </div>

            <form class="signin-form">

              <div class="form-group">

                <label for="signinEmail">Email*</label>

                <input type="email" class="form-control" id="signupEmail" placeholder="Enter your Email">

              </div>

              <div class="form-group">

                <label for="signinPass">Password*</label>

                <input type="password" class="form-control" id="signupPass" placeholder="Password">

              </div>

              <div class="form-group">

                <label for="signinPass">Confirm Password*</label>

                <input type="password" class="form-control" id="signupRePass" placeholder="Password">

              </div>

              <div class="form-group">

                <div class="custom-checkbox">

                  <input type="checkbox" name="id-2" id="id-2" checked>

                  <label for="id-2">I do not want to be kept up to date about relevant investment opportunities, features, and events</label>

                  <span class="checkbox"></span>

                </div>

              </div>

              <button type="submit" class="btn btn-primary btn-hover">Log In</button>

            </form>

            <div class="signin-wrapper-footer">

              <p class="bottom-text">Already have an account?<a href="#0" data-toggle="modal" data-target="#signInModal" data-dismiss="modal" aria-label="Close">Login</a></p>

              <div class="divider"><span>or</span></div>

              <ul class="social-list">

                <li><a href="#0"><i class="fa fa-facebook-f"></i></a></li>

                <li><a href="#0"><i class="fa fa-twitter"></i></a></li>

                <li><a href="#0"><i class="fa fa-linkedin"></i></a></li>

              </ul>

            </div>

          </div>

        </div>

      </div>

    </div>

    <!-- signup-area end -->



  <!--  header-section start  -->

  <header class="header-section {{ (!request()->segment(1) == '') ? 'transparent--header' : '' }} ">

    <div class="header-top">

      <div class="container">

        <div class="row justify-content-between">

          <div class="col-lg-6 col-md-6 col-sm-6">

            <div class="header-top-left d-flex">

              <div class="support-part">

                  <a href="tel:+1234567890123"><i class="fa fa-phone"></i>{{ $settings->mobile_number }}</a>

              </div>

              <div class="email-part">

                  <a href="mailto:info@autounit.com"><i class="fa fa-envelope"></i>{{ $settings->Email }}</a>

              </div>

            </div>

          </div>

          <div class="col-lg-4 col-md-4 col-sm-6">

              <div class="header-top-right d-flex align-items-center justify-content-end">

                <!--   <div class="language-part">

                    <i class="fa fa-globe"></i>

                    <select>

                        <option>Eng</option>

                        <option>Ban</option>

                        <option>Rus</option>

                        <option>Arb</option>

                    </select>

                  </div> -->
 @if(Auth::user() && Auth::user()->role=="4")
                  <div class="header-cart-count">

                      <a href="{{url('getcart')}}">

                        <i class="fa fa-shopping-cart"></i>

                        <span>My cart ({{Cart::session(Auth::user()->id)->getContent()->count()}})</span>

                      </a>

                  </div>
@endif
              </div>

          </div>

        </div>

      </div>

    </div>

    <div class="header-bottom">

      <div class="container">

        <nav class="navbar navbar-expand-xl">

          <a class="site-logo site-title" href="home-one.html"><img src="{{ url('new_front_asset/images/au.png') }}" alt="site-logo"></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <span class="menu-toggle"></span>

          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav main-menu ml-auto">

              <li class="{{ (request()->segment(1) == 'home') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>

              <li class="{{ (request()->segment(1) == 'About_us') ? 'active' : '' }}"><a href="{{URL('About_us')}}">About</a></li>

            

             <li class="{{ (request()->segment(1) == 'gallery') ? 'active' : '' }}"><a href="{{URL('gallery')}}">Gallery</a></li>
          <li class="{{ (request()->segment(1) == 'product') ? 'active' : '' }}"><a href="{{URL('product')}}">Product</a></li>
          <li class="{{ (request()->segment(1) == 'Charity') ? 'active' : '' }}"><a href="{{URL('Charity')}}">Charity</a></li>
          <li class="{{ (request()->segment(1) == 'contact_us') ? 'active' : '' }}"><a href="{{URL('contact_us')}}">Contact</a></li>

              

             
              @if(Auth::user())
            @if(Auth::user()->role=="2")
                              <li class="menu_has_children">
                                  <a  href="#" data-toggle="dropdown" data-hover="dropdown">console</a>
                                 <ul class="sub-menu">
                                     <li><a  href="{{url('admin')}}">Dashboard</a>
                                      <li><a  href="{{url('admin/customer')}}">Customer</a></li>
                                      <li><a  href="{{url('admin/agent')}}">Agents</a></li>
                                      <li><a  href="{{url('admin/product')}}">Products</a></li>
                                      <li><a  href="{{url('admin/package')}}">Packages</a></li>
                                      <li><a  href="{{url('Gallery/Videos')}}">Trading Videos</a></li>
                                      <li><a  href="{{url('Gallery/Trading_screenshots')}}">Trading Screenshots</a></li>
                                      <li><a  href="{{url('admin/agent_commission_rules')}}">New Rules</a></li>
                                       <li><a  href="{{url('admin/settings')}}">Settings</a> </li>

                                  </ul>
                              </li>
                            

                              @elseif(Auth::user()->role=="3")
                              <li class="menu_has_children">
                                  <a  href="#" data-toggle="dropdown" data-hover="dropdown">console</a>
                                 <ul class="sub-menu">
                                     <li><a  href="{{url('agent')}}">Dashboard</a></li>
                                     <li> <a  href="{{url('customerlist')}}">Customer</a></li>
                                      <li><a  href="{{url('taranjesonlist')}}">Transaction Customer</a></li>
                                      <!-- <a  href="{{url('/agent/commission')}}">Commission</a> -->
                                     <li> <a  href="{{url('package')}}">Packages</a></li>
                                      <li><a  href="{{url('withdraw')}}">withdraw</a></li>
                                      <li ><a href="{{url('agent/profile')}}">Profile</a></li>
                                  </ul>
                              </li>
                             


                              @elseif(Auth::user()->role=="4")
                              <li class="menu_has_children">
                                  <a  href="#" data-toggle="dropdown" data-hover="dropdown">console</a>
                                 <ul class="sub-menu">
                                    <li> <a  href="{{url('customer')}}">Dashboard</a></li>
                                     <li> <a  href="{{url('transaction')}}">Transaction</a></li>
                                      <li><a  href="{{url('customers/packag')}}">Packages</a></li>
                                      <li ><a href="{{url('profile')}}">Profile</a></li>
                                  </ul>
                              </li>

                              @endif
                                
                                 
                                 
                                </li>
                              
                               <li > <a class="" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a></li>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf </form>
                                   
                               @else
                               <li><a  href="{{url('login')}}">Login</a></li>
                              <li><a  href="{{url('customer_register')}}">Register </a></li>
                          
                              @endif

                                   

          </ul>

            

          </div>

        </nav>

      </div>

    </div><!-- header-bottom end -->

  </header>



 @yield('content')




  <!-- footer-section start -->

  <footer class="footer-section">

    <div class="footer-top bg_img" data-background="{{ url('new_front_asset/images/footer-bg.png') }}">

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-8">

            <div class="section-header text-white text-center">

              <span class="section-subtitle">Subscribe us</span>

              <h2 class="section-title">For Newsletter</h2>

              <p>Join 14,000+ satisfied Fast Invest customers! <a href="{{ URL('customer_register') }}">Register</a> and Subscribe to our newsletter to receive all the latest news and updates. </p>

            </div>

          </div>

        </div>

        <div class="row">
          <div class="col-lg-12">



            <div class="subscribe-wrapper">
              <span class="icon wow zoomIn" data-wow-duration="0.3s" data-wow-delay="0.5s"><img src="{{ url('new_front_asset/images/icons/subscribe.png') }}" alt="icon"></span>

              <form class="subscribe-form" id="contactForm"  method="post" >@csrf

                <input type="text" name="subs_name" id="email" placeholder="Your Email Address">
                  @error('subs_name')
                    <small class="form-text text-danger" > {{ $message }}</small>
                  @enderror
                <button type="submit" id="submit" class="subs-btn">subscribe<span class="btn-icon"><img src="{{ url('new_front_asset/images/icons/paper-plane.png') }}" alt="icon"></span></button>

              </form>
              <div id="sub_success" class="text-success"></div>
              <div id="sub_error" class="text-danger"></div>


            </div>

          </div>

        </div>

        <div class="row mb-none-30">

          <div class="col-lg-4 col-sm-6">

            <div class="footer-widget mb-30">

              <h3 class="widget-title">About Behoof</h3>

            
               <p class="widget-title">
             {{ $settings->address }}<br> 
              <strong>Phone:</strong>  {{ $settings->mobile_number }}<br>
              <strong>Email:</strong> {{ $settings->Email }}<br>
            </p>
             <div class=" d-flex sociyal">
        <h3><a href="{{ url($settings->twitter)  }}" class="twitter text-light"><i class="icofont-twitter"></i></a></h3>
        <h3><a href="{{ url($settings->facebook) }}" class="facebook text-light"><i class="icofont-facebook"></i></a></h3>
        <h3><a href="{{ url($settings->instagram) }}" class="instagram text-light"><i class="icofont-instagram"></i></a></h3>
        <h3><a href="{{ url($settings->skype) }}" class="skype text-light"><i class="icofont-skype"></i></a></h3>
        <h3><a href="{{ url($settings->linkedin) }}" class="linkedin text-light"><i class="icofont-linkedin"></i></i></a></h3>
            <h3>   <a href="#" class="linkedin"><i class="bx bxl-linkedin text-light"></i></a></h3>
            </div>
            </div>

          </div><!-- footer-widget end -->

          <div class="col-lg-4 col-sm-6">

            <div class="footer-widget mb-30">

              <h3 class="widget-title">help center</h3>

              <ul class="footer-menu-list">

               <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/About_us') }}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/gallery') }}">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/Charity') }}">Charity</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/Product') }}">Product</a></li>

               

              </ul>

            </div>

          </div><!-- footer-widget end -->


          <div class="col-lg-4 col-sm-6">

            <div class="footer-widget mb-30">

              <h3 class="widget-title">My Account</h3>

              <ul class="footer-menu-list">

                 <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/agent_register') }}">Agent Register</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/customer_register') }}">Customer Register</a></li>

              </ul>

            </div>

          </div><!-- footer-widget end -->


        </div>

        <div class="row">

          <div class="col-lg-12">

            <div class="btn-area text-center">

              <a href="#0" class="wow zoomIn" data-wow-duration="0.3s" data-wow-delay="0.5s"><img src="{{ url('new_front_asset/images/buttons/google.png') }}" alt="button"></a>

              <a href="#0" class="wow zoomIn" data-wow-duration="0.7s" data-wow-delay="0.5s"><img src="{{ url('new_front_asset/images/buttons/apple.png') }}" alt="button"></a>

            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="footer-bottom">

      <div class="container">

        <div class="row align-items-center">

          <div class="col-md-6">

            <p class="copy-right-text text-md-left text-center mb-md-0 mb-3">{{ $settings->copyright }} </p>

          </div>

          <div class="col-md-6">

          <!--   <div class="card-list text-md-right text-center">

              <a href="#0"><img src="{{ url('new_front_asset/images/icons/card-options/americanexpress.png') }}" alt="image"></a>

              <a href="#0"><img src="{{ url('new_front_asset/images/icons/card-options/maestro.png') }}" alt="image"></a>

              <a href="#0"><img src="{{ url('new_front_asset/images/icons/card-options/visa.png') }}" alt="image"></a>

              <a href="#0"><img src="{{ url('new_front_asset/images/icons/card-options/paypal.png') }}" alt="image"></a>

              <a href="#0"><img src="{{ url('new_front_asset/images/icons/card-options/mastercard.png') }}" alt="image"></a>

            </div> -->

          </div>

        </div>

      </div>

    </div>

  </footer>

  <!-- footer-section end -->



  <!-- scroll-to-top start -->

  <div class="scroll-to-top">

    <span class="scroll-icon">

      <i class="fa fa-rocket"></i>

    </span>

  </div>

  <!-- scroll-to-top end --> 



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
   <script type="text/javascript">
      setTimeout(function () {
          $("#msg").fadeOut("fast");
      }, 5000); // <-- time in milliseconds
  </script>


 <script type="text/javascript">

    $('#contactForm').on('submit',function(event){
        event.preventDefault();

        $("#sub_error").html('');
        $("#sub_success").html('');

        email = $('#email').val();
        $.ajax({
          url: '/subscribe_uesr',
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            email:email,
          },
           dataType: "json",
          success:function(response){

            if(response.status == 310){
              $("#sub_error").html(response.message);
            }
            if(response.status == 320){
              $("#sub_error").html(response.message);
            }
            if(response.status == 200){
              $("#sub_success").html(response.message);
            }

          },
         });
        });
      </script>


 @yield('js')
</body>



<!-- Mirrored from pixner.net/behoof/demo/home-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Mar 2020 14:59:34 GMT -->

</html>