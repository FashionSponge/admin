<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
<title>Widgets</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- Google Font: Open Sans -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,800,800italic">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,300,700">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{asset('public/bower_components/fontawesome/css/font-awesome.min.css')}}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('public/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- App CSS -->
  <link rel="stylesheet" href="{{asset('public/css/mvpready-admin.css')}}">
  <!-- <link rel="stylesheet" href="./css/custom.css"> -->
  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<div id="wrapper">

  @if(Auth::check())
      <header class="navbar" role="banner">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <i class="fa fa-cog"></i>
            </button>

                <a href="dashboard" class="navbar-brand navbar-brand-img"  >
                      <img src="{{asset('public/img/logo.png')}}" alt="Ad Portal Logo">
                </a>
          </div> <!-- /.navbar-header -->
          <nav class="collapse navbar-collapse" role="navigation">


            <ul class="nav navbar-nav navbar-left">

             <li class="dropdown navbar-notification">
                  <a href="{{Route('route_manage')}}" >
                      <i class="fa fa-bell navbar-notification-icon"></i>
                      <span class="visible-xs-inline">&nbsp;</span>
                      <span style="font-size:12px;" >Manage</span>
                  </a>
              </li>


              <li class="dropdown navbar-notification">
                   <a href="{{Route('route_belling')}}" >
                      <i class="fa fa-dollar navbar-notification-icon"></i>
                      <span class="visible-xs-inline">&nbsp;</span>
                      <span style="font-size:12px;" >Billing</span>
                  </a>
              </li>

              <li class="dropdown navbar-notification">
                    <a href="{{Route('route_settings')}}" >
                        <i class="fa fa-cogs navbar-notification-icon"></i>
                        <span class="visible-xs-inline">&nbsp;</span>
                        <span style="font-size:12px;" >Settings</span>
                    </a>
                </li>

              <li class="dropdown navbar-notification">
                    <a href="{{Route('route_help')}}" >
                        <i class="fa glyphicon glyphicon-plus navbar-notification-icon"></i>
                        <span class="visible-xs-inline">&nbsp;</span>
                        <span style="font-size:12px;" >Help</span>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="{{Route('route_manage')}}"> {{ucfirst(Auth::user()->name)}} </a>
              </li>
              <li class="dropdown navbar-profile">
                <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
                  <img src="{{asset('public/global/img/avatars/avatar-4-sm.jpg')}}" class="navbar-profile-avatar" alt="">
                  <span class="visible-xs-inline">@peterlandt &nbsp;</span>
                  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="{{Route('route_manage')}}">
                      <i class="fa fa-user"></i>
                      &nbsp;&nbsp;My Profile
                    </a>
                  </li>
                  <li>
                    <a href="{{Route('route_belling')}}">
                      <i class="fa fa-dollar"></i>
                      &nbsp;&nbsp;Plans & Billing
                    </a>
                  </li>
                  <li>
                    <a href="{{Route('route_settings')}}">
                      <i class="fa fa-cogs"></i>
                      &nbsp;&nbsp;Settings
                    </a>
                  </li>
                   <li>
                      <a href="{{Route('route_help')}}">
                        <i class="fa glyphicon glyphicon-plus"></i>
                        &nbsp;&nbsp;Help
                      </a>
                    </li>

                  <li class="divider"></li>
                  <li>
                    <a href="{{ url('/auth/logout') }}">
                      <i class="fa fa-sign-out"></i>
                      &nbsp;&nbsp;Logout
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div> <!-- /.container -->
      </header>
      <div class="mainnav hide ">
        <div class="container">
          <a class="mainnav-toggle" data-toggle="collapse" data-target=".mainnav-collapse">
            <span class="sr-only">Toggle navigation</span>
            <i class="fa fa-bars"></i>
          </a>
          <nav class="collapse mainnav-collapse" role="navigation">
            <form class="mainnav-form" role="search">
              <input type="text" class="form-control input-md mainnav-search-query" placeholder="Search">
              <button class="btn btn-sm mainnav-form-btn"><i class="fa fa-search"></i></button>
            </form>
            <ul class="mainnav-menu">
              <li class="dropdown active">
                <a href="./index.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                Dashboards
                <i class="mainnav-caret"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="./index.html">
                    <i class="fa fa-dashboard dropdown-icon "></i>
                    Analytics Dashboard
                    </a>
                  </li>
                  <li>
                    <a href="./dashboard-2.html">
                    <i class="fa fa-dashboard dropdown-icon "></i>
                    Sidebar Dashboard
                    </a>
                  </li>
                  <li>
                    <a href="./dashboard-3.html">
                    <i class="fa fa-dashboard dropdown-icon "></i>
                    Reports Dashboard
                    </a>
                  </li>
                </ul>
              </li>
              <li class="dropdown ">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                Components
                <i class="mainnav-caret"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="./components-tabs.html">
                    <i class="fa fa-bars dropdown-icon "></i>
                    Tabs &amp; Accordions
                    </a>
                  </li>
                  <li>
                    <a href="./components-popups.html">
                    <i class="fa fa-calendar-o dropdown-icon "></i>
                    Popups &amp; Alerts
                    </a>
                  </li>
                  <li>
                    <a href="./form-plugins.html">
                    <i class="fa fa-plug dropdown-icon "></i>
                    Forms Plugins
                    </a>
                  </li>
                  <li>
                    <a href="./components-datatables.html">
                    <i class="fa fa-table dropdown-icon "></i>
                    Data Tables
                    </a>
                  </li>
                  <li>
                    <a href="./components-charts.html">
                    <i class="fa fa-bar-chart-o dropdown-icon "></i>
                    Charts
                    </a>
                  </li>
                </ul>
              </li>
              <li class="dropdown ">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                Demo Pages
                <i class="mainnav-caret"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="./page-pricing-plans.html">
                    <i class="fa fa-money dropdown-icon "></i>
                    Plans & Billing
                    </a>
                  </li>
                  <li>
                    <a href="./page-pricing-table.html">
                    <i class="fa fa-dollar dropdown-icon "></i>
                    Pricing Table
                    </a>
                  </li>
                  <li>
                    <a href="./page-profile.html">
                    <i class="fa fa-user dropdown-icon "></i>
                    Profile
                    </a>
                  </li>
                  <li>
                    <a href="./page-settings.html">
                    <i class="fa fa-cogs dropdown-icon "></i>
                    Settings
                    </a>
                  </li>
                  <li>
                    <a href="./page-faq.html">
                    <i class="fa fa-question dropdown-icon "></i>
                    FAQ
                    </a>
                  </li>
                  <li>
                    <a href="./pages-gallery.html">
                    <i class="fa fa-picture-o dropdown-icon "></i>
                    Gallery
                    </a>
                  </li>
                </ul>
              </li>
              <li class="dropdown ">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                Extras
                <i class="mainnav-caret"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="./page-notifications.html">
                    <i class="fa fa-bell dropdown-icon "></i>
                    Notifications
                    </a>
                  </li>
                  <li>
                    <a href="./extras-icons.html">
                    <i class="fa fa-smile-o dropdown-icon "></i>
                    Font Icons
                    </a>
                  </li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#">
                    <i class="fa fa-wrench dropdown-icon "></i>
                    Utilities
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="./page-maintenance.html">
                        <i class="fa fa-cogs dropdown-icon "></i>
                        Maintenance
                        </a>
                      </li>
                      <li>
                        <a href="./page-404.html">
                        <i class="fa fa-ban dropdown-icon "></i>
                        404 Error
                        </a>
                      </li>
                      <li>
                        <a href="./page-500.html">
                        <i class="fa fa-ban dropdown-icon "></i>
                        500 Error
                        </a>
                      </li>
                      <li>
                        <a href="./page-blank.html">
                        <i class="fa fa-file-o dropdown-icon "></i>
                        Page Blank
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#">
                    <i class="fa fa-lock dropdown-icon "></i>
                    Login Pages
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="./account-login.html">
                        <i class="fa fa-unlock dropdown-icon "></i>
                        Login
                        </a>
                      </li>
                      <li>
                        <a href="./account-login-social.html">
                        <i class="fa fa-unlock dropdown-icon "></i>
                        Login Social
                        </a>
                      </li>
                      <li>
                        <a href="./account-signup.html">
                        <i class="fa fa-pencil dropdown-icon "></i>
                        Signup
                        </a>
                        </li>
                      <li>
                        <a href="./account-forgot.html">
                        <i class="fa fa-envelope dropdown-icon "></i>
                        Forgot Password
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                Templates
                <i class="mainnav-caret"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="../landing/">
                    <i class="fa fa-external-link dropdown-icon "></i>
                    Landing Template
                    </a>
                  </li>
                  <li>
                    <a href="../launch/">
                    <i class="fa fa-external-link dropdown-icon "></i>
                    Launch Template
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div> <!-- /.container -->
      </div> <!-- /.mainnav -->


  @else
      <header class="navbar" role="banner">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <i class="fa fa-cog"></i>
            </button>

                <a href="#" class="navbar-brand navbar-brand-img"  >
                      <img src="{{asset('public/img/logo.png')}}" alt="Ad Portal Logo">
                </a>
          </div> <!-- /.navbar-header -->
          <nav class="collapse navbar-collapse" role="navigation">
            <ul class="nav navbar-nav navbar-right">
                 <ul class="nav navbar-nav navbar-left">

                    <li class="dropdown navbar-notification">
                         <a href="{{url('auth/login')}}" >
                             <span class="visible-xs-inline">&nbsp;</span>
                             <span style="font-size:12px;" >Login</span>
                         </a>
                     <li class="dropdown navbar-notification">
                           <a href="{{url('auth/register')}}" >

                               <span class="visible-xs-inline">&nbsp;</span>
                               <span style="font-size:12px;" >Register</span>
                           </a>
                       </li>
                   </ul>
            </ul>
          </nav>
        </div> <!-- /.container -->
      </header>
      <div class="mainnav hide ">
        <div class="container">
          <a class="mainnav-toggle" data-toggle="collapse" data-target=".mainnav-collapse">
            <span class="sr-only">Toggle navigation</span>
            <i class="fa fa-bars"></i>
          </a>
          <nav class="collapse mainnav-collapse" role="navigation">
            <form class="mainnav-form" role="search">
              <input type="text" class="form-control input-md mainnav-search-query" placeholder="Search">
              <button class="btn btn-sm mainnav-form-btn"><i class="fa fa-search"></i></button>
            </form>
            <ul class="mainnav-menu">
              <li class="dropdown active">
                <a href="./index.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                Dashboards
                <i class="mainnav-caret"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="./index.html">
                    <i class="fa fa-dashboard dropdown-icon "></i>
                    Analytics Dashboard
                    </a>
                  </li>
                  <li>
                    <a href="./dashboard-2.html">
                    <i class="fa fa-dashboard dropdown-icon "></i>
                    Sidebar Dashboard
                    </a>
                  </li>
                  <li>
                    <a href="./dashboard-3.html">
                    <i class="fa fa-dashboard dropdown-icon "></i>
                    Reports Dashboard
                    </a>
                  </li>
                </ul>
              </li>
              <li class="dropdown ">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                Components
                <i class="mainnav-caret"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="./components-tabs.html">
                    <i class="fa fa-bars dropdown-icon "></i>
                    Tabs &amp; Accordions
                    </a>
                  </li>
                  <li>
                    <a href="./components-popups.html">
                    <i class="fa fa-calendar-o dropdown-icon "></i>
                    Popups &amp; Alerts
                    </a>
                  </li>
                  <li>
                    <a href="./form-plugins.html">
                    <i class="fa fa-plug dropdown-icon "></i>
                    Forms Plugins
                    </a>
                  </li>
                  <li>
                    <a href="./components-datatables.html">
                    <i class="fa fa-table dropdown-icon "></i>
                    Data Tables
                    </a>
                  </li>
                  <li>
                    <a href="./components-charts.html">
                    <i class="fa fa-bar-chart-o dropdown-icon "></i>
                    Charts
                    </a>
                  </li>
                </ul>
              </li>
              <li class="dropdown ">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                Demo Pages
                <i class="mainnav-caret"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="./page-pricing-plans.html">
                    <i class="fa fa-money dropdown-icon "></i>
                    Plans & Billing
                    </a>
                  </li>
                  <li>
                    <a href="./page-pricing-table.html">
                    <i class="fa fa-dollar dropdown-icon "></i>
                    Pricing Table
                    </a>
                  </li>
                  <li>
                    <a href="./page-profile.html">
                    <i class="fa fa-user dropdown-icon "></i>
                    Profile
                    </a>
                  </li>
                  <li>
                    <a href="./page-settings.html">
                    <i class="fa fa-cogs dropdown-icon "></i>
                    Settings
                    </a>
                  </li>
                  <li>
                    <a href="./page-faq.html">
                    <i class="fa fa-question dropdown-icon "></i>
                    FAQ
                    </a>
                  </li>
                  <li>
                    <a href="./pages-gallery.html">
                    <i class="fa fa-picture-o dropdown-icon "></i>
                    Gallery
                    </a>
                  </li>
                </ul>
              </li>
              <li class="dropdown ">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                Extras
                <i class="mainnav-caret"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="./page-notifications.html">
                    <i class="fa fa-bell dropdown-icon "></i>
                    Notifications
                    </a>
                  </li>
                  <li>
                    <a href="./extras-icons.html">
                    <i class="fa fa-smile-o dropdown-icon "></i>
                    Font Icons
                    </a>
                  </li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#">
                    <i class="fa fa-wrench dropdown-icon "></i>
                    Utilities
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="./page-maintenance.html">
                        <i class="fa fa-cogs dropdown-icon "></i>
                        Maintenance
                        </a>
                      </li>
                      <li>
                        <a href="./page-404.html">
                        <i class="fa fa-ban dropdown-icon "></i>
                        404 Error
                        </a>
                      </li>
                      <li>
                        <a href="./page-500.html">
                        <i class="fa fa-ban dropdown-icon "></i>
                        500 Error
                        </a>
                      </li>
                      <li>
                        <a href="./page-blank.html">
                        <i class="fa fa-file-o dropdown-icon "></i>
                        Page Blank
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#">
                    <i class="fa fa-lock dropdown-icon "></i>
                    Login Pages
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="./account-login.html">
                        <i class="fa fa-unlock dropdown-icon "></i>
                        Login
                        </a>
                      </li>
                      <li>
                        <a href="./account-login-social.html">
                        <i class="fa fa-unlock dropdown-icon "></i>
                        Login Social
                        </a>
                      </li>
                      <li>
                        <a href="./account-signup.html">
                        <i class="fa fa-pencil dropdown-icon "></i>
                        Signup
                        </a>
                        </li>
                      <li>
                        <a href="./account-forgot.html">
                        <i class="fa fa-envelope dropdown-icon "></i>
                        Forgot Password
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                Templates
                <i class="mainnav-caret"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="../landing/">
                    <i class="fa fa-external-link dropdown-icon "></i>
                    Landing Template
                    </a>
                  </li>
                  <li>
                    <a href="../launch/">
                    <i class="fa fa-external-link dropdown-icon "></i>
                    Launch Template
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div> <!-- /.container -->
      </div> <!-- /.mainnav -->
  @endif


  <br><br><br>





  @yield('content')
</div> <!-- /#wrapper -->
{{--Footer--}}
<footer class="footer">
  <div class="container">
    <p class="pull-left">Copyright &copy; 2013-15 Jumpstart Themes.</p>
      <p class="pull-right" >
         link1 link2 link3 link4 link5
      </p>
  </div>
</footer>
<!-- Bootstrap core JavaScript
================================================== -->
    <!-- Core JS -->
    <script src="{{asset('public/bower_components/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('public/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/bower_components/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- Plugin JS -->
    <script src="{{asset('public/bower_components/flot/excanvas.min.js')}}"></script>
    <script src="{{asset('public/bower_components/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('public/bower_components/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('public/bower_components/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('public/bower_components/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('public/bower_components/flot.tooltip/js/jquery.flot.tooltip.js')}}"></script>
    <script src="{{asset('public/bower_components/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('public/bower_components/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('public/bower_components/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>

    <!-- App JS -->
    <script src="{{asset('public/global/js/mvpready-core.js')}}"></script>
    <script src="{{asset('public/global/js/mvpready-helpers.js')}}"></script>
    <script src="{{asset('public/js/mvpready-admin.js')}}"></script>

    <!-- Demo JS -->
    <script src="{{asset('public/global/js/demos/flot/line.js')}}"></script>
    <script src="{{asset('public/global/js/demos/flot/pie.js')}}"></script>
    <script src="{{asset('public/global/js/demos/flot/auto.js')}}"></script>
    <script src="{{asset('public/global/js/demos/flot/area.js')}}"></script>
    <script src="{{asset('public/global/js/demos/flot/donut.js')}}"></script>
    <script src="{{asset('public/global/js/demos/flot/vertical.js')}}"></script>
    <script src="{{asset('public/global/js/demos/flot/horizontal.js')}}"></script>
    <script src="{{asset('public/global/js/demos/flot/scatter.js')}}"></script>
    <script src="{{asset('public/global/js/demos/flot/stacked-area.js')}}"></script>
    <script src="{{asset('public/global/js/demos/flot/stacked-horizontal.js')}}"></script>
    <script src="{{asset('public/global/js/demos/flot/stacked-vertical.js')}}"></script>
</body>
</html>
