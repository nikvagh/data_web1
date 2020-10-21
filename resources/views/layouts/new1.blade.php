	<!DOCTYPE html>
	<html>
	    <head>
	         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
	        


	   <!-- <link rel="stylesheet" href="{{ asset('back_asset/bootstrap/css/bootstrap.min.css') }}"> -->

	   
	        <link rel="stylesheet" href="{{ asset('back_asset/css/style.css') }}">
	          @yield('css')
	    </head>
	    <body>
	        <!-- start header -->
	        <header>
	            <div class="container">
	                <nav class="navbar navbar-expand-lg navbar-light ">
	                    <a class="navbar-brand" href="#">Data Web</a>
	                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	                        <span class="navbar-toggler-icon"></span>
	                    </button>

	                    <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
	                    <div class="right-meny">
	                        <ul class="navbar-nav mr-auto">
	                            <li class="nav-item ">
	                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	                            </li>
	                            <li class="nav-item">
	                                <a class="nav-link" href="#">Link</a>
	                            </li>
	                            <li class="nav-item dropdown">
	                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown">
	                                    Dropdown
	                                </a>
	                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	                                    <a class="dropdown-item" href="#">Action</a>

	                                   
	                                    <a class="dropdown-item" href="#">Another action</a>
	                                    
	                                    <a class="dropdown-item" href="#">Something else here</a>
	                                </div>
	                            </li>
	                            <li class="nav-item">
	                                <a class="nav-link " href="#">Disabled</a>
	                            </li>
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
	                             @if(Auth::user())
	                             <li class="nav-item dropdown"> <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a></li>
	                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf </form>
	                             @else
	                             <li><a class="nav-link" href="{{url('login')}}">Login</a></li>
	                            <li><a class="nav-link" href="{{url('customer_register')}}">Register</a></li>

	                            @endif

	                        </ul>
	                    </div>
	                </nav>
	            </div>
	        </header>
	        <!-- end header -->
	        
	        <!-- start breadcrumb -->
	@if(isset($title))
	        <div>
	            <nav aria-label="breadcrumb" class="breadcrumb">
	                <div class="container">
	              <ol class="d-flex">
	                <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
	                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
	              </div>
	              </ol>
	          </div>
	      </nav></div>
	 @endif       
	        <!-- end breadcrumb -->
	        <div class="body_min_with">
	  @yield('content')
	            </div>
	  

	 <!-- start footer -->
	<footer>
	    <div class="footer_light">
	        <div class="container d-flex">
	            <div class="col-md-3 subfootr">
	                <h6>PRO HYIP SCRIPT</h6>
	                <p>
	                    We have developed the top quality hyip script using all the latest and advanced technology to cater your HYIPbusiness needs. Pro HYIP Software providing the best HYIP templates at affordable prices. HYIP templates suits
	                    your business requirements
	                </p>
	            </div>
	            <div class="col-md-3 subfootr">
	                <h6>HYIP WORDPRESS TEMPLATES</h6>
	                <p>
	                    In hyipsoftware, we use the Wordpress CMS to power your webmaster to manage the site effectively and make it fresh and SEO Friendly. If you are looking for any developing Custom Wordpress themes for HYIP, please contact
	                    us.
	                </p>
	            </div>
	            <div class="col-md-3 subfootr">
	                <h6>QUICK LINKS</h6>
	                <p>
	                    QUICK LINKS<br />
	                    Pro HYIP Script<br />
	                    HYIP Script Features<br />
	                    Bitcoin Mining Script<br />
	                    Peer to Peer Donation Script<br />
	                    ICO Script
	                </p>
	            </div>
	            <div class="col-md-3 subfootr">
	                <h6>QUICK LINKS</h6>
	                <p>
	                    HYIP Script Demo<br />
	                    Ultimate Package<br />
	                    HYIP Templates<br />
	                    System Requirements<br />
	                    Affiliate Program
	                </p>
	            </div>
	        </div>
	    </div>
	    <div class="footer-bottom">
	        <div class="container ">
	            <div>
	                <p>© 2020. HYIPSoftware. All Rights Reserved.</p>
	            </div>
	            
	        </div>
	    </div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	        
	        <!-- end footer -->
	        <script src="{{ asset('back_asset/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
	  <!-- jQuery UI 1.11.4 -->
	  <!-- <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js'"></script> -->

	  <!-- Bootstrap 3.3.6 -->
	  <script src="{{ asset('back_asset/bootstrap/js/bootstrap.min.js') }}"></script>

	  <!-- <script src="{{ asset('back_asset/plugins/sparkline/jquery.sparkline.min.js') }}"></script> -->
	  <!-- jvectormap -->
	  <!-- <script src="{{ asset('back_asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
	<script src="{{ asset('back_asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script> -->
	  <!-- Slimscroll -->
	  <script src="{{ asset('back_asset/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
	  <!-- FastClick -->
	  <script src="{{ asset('back_asset/plugins/fastclick/fastclick.js') }}"></script>
	  <!-- AdminLTE App -->
	  <script src="{{ asset('back_asset/dist/js/app.min.js') }}"></script>
	  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	  <!-- <script src="{{ asset('back_asset/dist/js/pages/dashboard.js') }}"></script> -->
	  <!-- AdminLTE for demo purposes -->
	  <!-- <script src="{{ asset('back_asset/dist/js/demo.js') }}"></script> -->
	<script type="text/javascript">
	    setTimeout(function () {
	        $("#msg").fadeOut("fast");
	    }, 5000); // <-- time in milliseconds
	</script>
	  @yield('js')
	    </body>
	</html>
