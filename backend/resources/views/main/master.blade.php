<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Miss Tanzaia Context app">
    <meta name="author" content="Innocent Christopher KIlogha">
    <meta name="keyword" content="Miss, Tanzania, Utalii, Urembo, Miss Tanzania, KIlimanjaro, Mbuga za wanayama, Vivutio">
    <link rel="shortcut icon" href="{{ asset('admin/img/logo.png') }}">
    <title>Miss Tanzania Contest | @yield('page-title')</title>
    <!-- Bootstrap core CSS -->
     {!!HTML::style("admin/css/bootstrap.min.css" )!!}
     {!!HTML::style("admin/css/bootstrap-reset.css" )!!}
    <!--external css-->
     {!!HTML::style("admin/assets/font-awesome/css/font-awesome.css")!!}
     @yield('page-style')
    <!-- Custom styles for this template -->
     {!!HTML::style("admin/css/style.css" )!!}
     {!!HTML::style("admin/css/style-responsive.css" )!!}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    {!!HTML::script("admin/js/html5shiv.js")!!}
    {!!HTML::script("admin/js/respond.min.js")!!}
    <![endif]-->
</head>

<body>

<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo" >Miss Tanzania Contest</a>
        <!--logo end-->
        <div class="top-nav ">
            <ul class="nav pull-right top-menu">

                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="{{ asset('admin/img/avatar-mini2.jpg') }}">
                        <span class="username">{{Auth::user()->last_name}}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="{{url('profile')}}"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="{{url('notification')}}"><i class="fa fa-bell-o"></i> Notification</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="{{url('logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            @yield('page-menus')

            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <section id="main-content">
    <!--main content start-->
           @yield('contents')
    <!--main content end-->
    </section>

    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            {{date("Y")}} &copy; Miss Tanzania Contest.
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
{!!HTML::script("admin/js/jquery.js")!!}
{!!HTML::script("admin/js/bootstrap.min.js")!!}
{!!HTML::script("admin/js/jquery.dcjqaccordion.2.7.js")!!}
{!!HTML::script("admin/js/jquery.scrollTo.min.js")!!}
{!!HTML::script("admin/js/jquery.nicescroll.js")!!}
@yield('page-scripts-before1')
{!!HTML::script("admin/js/respond.min.js" )!!}
@yield('page-scripts-before')
<!--common script for all pages-->
{!!HTML::script("admin/js/common-scripts.js")!!}
 <!--script for this page-->
@yield('page-scripts')
</body>
</html>
