<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from themedesigner.in/demo/wrappixel/admin-template/xtreme/html/ltr/sidebar-type-horizontalsidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jul 2018 10:09:11 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    <title>3Q TECH</title>
    <!-- Custom CSS -->
    <link href="/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="{{route('customer_dashboard.index')}}">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                           3Q - TECH
                             <!-- dark Logo text -->
                             <!-- <img src="/assets/images/logo-text.png" alt="homepage" class="dark-logo" /> -->
                             <!-- Light Logo text -->
                             <!-- <img src="/assets/images/logo-light-text.png" class="light-logo" alt="homepage" /> -->
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>



                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">


                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow"><span class="bg-primary"></span></span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                    <div class=""><img src="/assets/images/users/1.jpg" alt="user" class="img-circle" width="60"></div>
                                    <div class="m-l-10">
                                        <h4 class="m-b-0">{{Auth::user()->name}}</h4>
                                        <p class=" m-b-0">{{Auth::user()->email}}</p>
                                    </div>
                                </div>
                                <!-- <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="{{ route('customers.profile.show') }}"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <!-- <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a> -->

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-power-off m-r-5 m-l-5"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                <!-- <div class="dropdown-divider"></div> -->
                                <!-- <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div> -->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->

        @yield('content')


         </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="/dist/js/app.min.js"></script>
    <script src="/dist/js/app.init.horizontal.js"></script>
    <script src="/dist/js/app-style-switcher.horizontal.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 charts -->
    <script src="/assets/extra-libs/c3/d3.min.js"></script>
    <script src="/assets/extra-libs/c3/c3.min.js"></script>
    <!--chartjs -->
    <script src="/assets/libs/chart.js/dist/Chart.min.html"></script>
    <script src="/dist/js/pages/dashboards/dashboard1.js"></script>
</body>


<!-- Mirrored from themedesigner.in/demo/wrappixel/admin-template/xtreme/html/ltr/sidebar-type-horizontalsidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jul 2018 10:09:13 GMT -->
</html>
