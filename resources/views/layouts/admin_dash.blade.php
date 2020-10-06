<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('back_asset/bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('back_asset/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('back_asset/dist/css/skins/_all-skins.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('back_asset/plugins/iCheck/flat/blue.css') }}">

  @yield('css')
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
 
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('back_asset/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                <span class="hidden-xs">Admin</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="{{ asset('back_asset/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                  <p>
                    Admin
                    <!-- <small>Member since Nov. 2012</small> -->
                  </p>
                </li>
             
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">

                    <a class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>

                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="{{url('admin/settings')}}" ><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{ asset('back_asset/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Admin</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

    

     <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ (request()->segment(1) == 'admin') ? 'active' : '' }} treeview">
          <a href="{{url('admin')}}">
         <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>

          <li class="{{ (request()->segment(2) == 'customer') ? 'active' : '' }}">
            <a href="{{ route('admin_customer') }}">
              <!-- <i class="fa fa-users"></i>  -->
              <span>Customers</span>
            </a>
          </li>

          <li class="{{ (request()->segment(2) == 'agent') ? 'active' : '' }}">
            <a href="{{ route('agent') }}">
              <!-- <i class="fa fa-users"></i>  -->
              <span>Agent</span>
            </a>
          </li>

     <!--      <li class="{{ (request()->segment(2) == 'deposite') ? 'active' : '' }}">
            <a href="{{ route('deposite') }}"> -->
              <!-- <i class="fa fa-users"></i>  -->
    <!--           <span>Deposite</span>
            </a>
          </li> -->

        <!--   <li class="{{ (request()->segment(2) == 'withdraw') ? 'active' : '' }}">
            <a href="{{ route('withdraw') }}"> -->
              <!-- <i class="fa fa-users"></i>  -->
           <!--    <span>Withdraw</span>
            </a>
          </li> -->

          <li class="{{ (request()->segment(2) == 'product') ? 'active' : '' }}">
            <a href="{{ route('product') }}">
              <!-- <i class="fa fa-users"></i>  -->
              <span>Products</span>
            </a>
          </li>
          
           <li class="{{ (request()->segment(2) == 'package') ? 'active' : '' }}">
            <a href="{{ route('admin_packag_list') }}">
              <!-- <i class="fa fa-users"></i>  -->
              <span>Packages</span>
            </a>
          </li>
           <li class="{{ (request()->segment(1) == 'Gallery') ? 'active' : '' }}">
            <a href="#">
            
              <span>Gallery </span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('Gallery/Videos') }}"></i> Videos </a></li>
            <li><a href="{{ route('Gallery/Trading_screenshots') }}"></i> Trading screenshots</a></li>
           
          </ul>
        </li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.6
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </footer>

    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 2.2.3 -->
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