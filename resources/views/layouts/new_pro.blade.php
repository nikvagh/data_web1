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

            <div class="signin-wrapper-footer">

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

  <header class="header-section">

    <div class="header-top">

      <div class="container">

        <div class="row justify-content-between">

          <div class="col-lg-6 col-md-6 col-sm-6">

            <div class="header-top-left d-flex">

              <div class="support-part">

                  <a href="tel:+1234567890123"><i class="fa fa-headphones"></i>Support</a>

              </div>

              <div class="email-part">

                  <a href="mailto:info@autounit.com"><i class="fa fa-envelope"></i>info@autounit.com</a>

              </div>

            </div>

          </div>

          <div class="col-lg-4 col-md-4 col-sm-6">

              <div class="header-top-right d-flex align-items-center justify-content-end">

                  <div class="language-part">

                    <i class="fa fa-globe"></i>

                    <select>

                        <option>Eng</option>

                        <option>Ban</option>

                        <option>Rus</option>

                        <option>Arb</option>

                    </select>

                  </div>

                  <div class="header-cart-count">

                      <a href="checkout.html">

                        <i class="fa fa-shopping-cart"></i>

                        <span>My cart (0)</span>

                      </a>

                  </div>

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

              <li class="active menu_has_children"><a href="#0">Home</a>

              <ul class="sub-menu">

                  <li><a href="home-one.html">Home One</a></li>

                  <li><a href="home-two.html">Home Two</a></li>

                  <li><a href="home-three.html">Home Three</a></li>

                  <li><a href="home-four.html">Home Four</a></li>

                  <li><a href="home-five.html">Home Five</a></li>

              </ul>

              </li>

              <li><a href="about.html">about</a></li>

            

              <li class="menu_has_children"><a href="#0">Investment</a>

                <ul class="sub-menu">

                    <li><a href="product.html">Products</a></li>

                    <li><a href="investment.html">Investment Plan $5000</a></li>

                    <li><a href="investment-two.html">Investment Plan $10000</a></li>

                    <li><a href="investment-three.html">Investment Plan $20000</a></li>

                    <li><a href="investment-four.html">Investment Plan $50000</a></li>

                    <li><a href="investment-five.html">Investment Plan $100000</a></li>

                    <li><a href="investment-six.html">Investment Plan $200000</a></li>

                    <li><a href="investment-seven.html">Investment Plan $500000</a></li>

                    <li><a href="investment-eight.html">Investment Plan $1000000</a></li>

                </ul>

              </li>

              <li class="menu_has_children"><a href="#0">Pages</a>

                <ul class="sub-menu">

                    <li><a href="gallery.html">Gallery</a></li>

                    <li><a href="product.html">Product</a></li>

                    <li><a href="charity.html">Charity</a></li>

                    <li><a href="portfolio.html">Portfolio</a></li>

                    <li><a href="about.html">About us</a></li>

                    <li><a href="login.html">Login</a></li>

                    <li><a href="register.html">Register</a></li>

                    <li><a href="contact.html">Contact us</a></li>

                </ul>

              </li>

              <li class="menu_has_children"><a href="#0">blog</a>

                <ul class="sub-menu">

                    <li><a href="blog-grid.html">Blog Grid</a></li>

                    <li><a href="blog-list.html">Blog List</a></li>

                    <li><a href="blog-single.html">Blog Single</a></li>

                </ul>

              </li>

              <li><a href="contact.html">contact us</a></li>

              <li><a href="register.html">Register</a></li>

              <li><a href="login.html">Login</a></li>

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

              <p>Join 14,000+ satisfied Fast Invest customers! <a href="#0">Register</a> and Subscribe to our newsletter to receive all the latest news and updates. </p>

            </div>

          </div>

        </div>

        <div class="row">

          <div class="col-lg-12">

            <div class="subscribe-wrapper">

              <span class="icon wow zoomIn" data-wow-duration="0.3s" data-wow-delay="0.5s"><img src="{{ url('new_front_asset/images/icons/subscribe.png') }}" alt="icon"></span>

              <form class="subscribe-form">

                <input type="text" name="subs_name" id="subs_name" placeholder="Your Email Address">

                <button type="submit" class="subs-btn">subscribe<span class="btn-icon"><img src="{{ url('new_front_asset/images/icons/paper-plane.png') }}" alt="icon"></span></button>

              </form>

            </div>

          </div>

        </div>

        <div class="row mb-none-30">

          <div class="col-lg-3 col-sm-6">

            <div class="footer-widget mb-30">

              <h3 class="widget-title">About Behoof</h3>

              <ul class="footer-menu-list">

                <li><a href="#0">About us</a></li>

                <li><a href="#0">Contact Us</a></li>

                <li><a href="#0">Latest Blog</a></li>

                <li><a href="#0">Authenticity Guarantee</a></li>

                <li><a href="#0">Customer Reviews</a></li>

                <li><a href="#0">Privacy Policy</a></li>

                <li><a href="#0">Business License</a></li>

              </ul>

            </div>

          </div><!-- footer-widget end -->

          <div class="col-lg-3 col-sm-6">

            <div class="footer-widget mb-30">

              <h3 class="widget-title">My Account</h3>

              <ul class="footer-menu-list">

                <li><a href="#0">Manage Your Account</a></li>

                <li><a href="#0">How to Deposit</a></li>

                <li><a href="#0">How to Withdraw</a></li>

                <li><a href="#0">Account Varification</a></li>

                <li><a href="#0">Safety & Security</a></li>

                <li><a href="#0">Investments</a></li>

                <li><a href="#0">Membership Level</a></li>

              </ul>

            </div>

          </div><!-- footer-widget end -->

          <div class="col-lg-3 col-sm-6">

            <div class="footer-widget mb-30">

              <h3 class="widget-title">help center</h3>

              <ul class="footer-menu-list">

                <li><a href="#0">Investor help centre</a></li>

                <li><a href="#0">Entrepreneur help centre</a></li>

                <li><a href="#0">FAQ</a></li>

                <li><a href="#0">Quick Start Guide</a></li>

                <li><a href="#0">Associate Blog</a></li>

                <li><a href="#0">Tutorials</a></li>

                <li><a href="#0">Returns & Claims</a></li>

              </ul>

            </div>

          </div><!-- footer-widget end -->

          <div class="col-lg-3 col-sm-6">

            <div class="footer-widget mb-30">

              <h3 class="widget-title">legal info</h3>

              <ul class="footer-menu-list">

                <li><a href="#0">Risk Warnings</a></li>

                <li><a href="#0">Privacy Notice</a></li>

                <li><a href="#0">Security</a></li>

                <li><a href="#0">Terms of Service</a></li>

                <li><a href="#0">Become Affiliate</a></li>

                <li><a href="#0">Complaints Policy</a></li>

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

            <p class="copy-right-text text-md-left text-center mb-md-0 mb-3">Copyright © 2020.All Rights Reserved By <a href="home-one.html">Auto Unit</a></p>

          </div>

          <div class="col-md-6">

            <div class="card-list text-md-right text-center">

              <a href="#0"><img src="{{ url('new_front_asset/images/icons/card-options/americanexpress.png') }}" alt="image"></a>

              <a href="#0"><img src="{{ url('new_front_asset/images/icons/card-options/maestro.png') }}" alt="image"></a>

              <a href="#0"><img src="{{ url('new_front_asset/images/icons/card-options/visa.png') }}" alt="image"></a>

              <a href="#0"><img src="{{ url('new_front_asset/images/icons/card-options/paypal.png') }}" alt="image"></a>

              <a href="#0"><img src="{{ url('new_front_asset/images/icons/card-options/mastercard.png') }}" alt="image"></a>

            </div>

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
 @yield('js')
</body>



<!-- Mirrored from pixner.net/behoof/demo/home-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Mar 2020 14:59:34 GMT -->

</html>