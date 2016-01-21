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
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-tasks"></i>
                        <span class="badge bg-success">0</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">You have 0 pending tasks</p>
                        </li>

                        <li class="external">
                            <a href="#">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-important">0</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-red"></div>
                        <li>
                            <p class="red">You have 0 new messages</p>
                        </li>
                        <li>
                            <a href="#">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="fa fa-bell-o"></i>
                        <span class="badge bg-warning">0</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <div class="notify-arrow notify-arrow-yellow"></div>
                        <li>
                            <p class="yellow">You have 0 new notifications</p>
                        </li>
                        <li>
                            <a href="#">See all notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- notification dropdown end -->
            </ul>
        </div>
        <div class="top-nav ">
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder="Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="{{ asset('admin/img/avatar1_small.jpg') }}">
                        <span class="username">Jhon Doue</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                        <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
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
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="{{url('home')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-laptop"></i>
                        <span>Layouts</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="boxed_page.html">Boxed Page</a></li>
                        <li><a  href="horizontal_menu.html">Horizontal Menu</a></li>
                        <li><a  href="language_switch_bar.html">Language Switch Bar</a></li>
                        <li><a  href="email_template.html" target="_blank">Email Template</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>UI Elements</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="general.html">General</a></li>
                        <li><a  href="buttons.html">Buttons</a></li>
                        <li><a  href="widget.html">Widget</a></li>
                        <li><a  href="slider.html">Slider</a></li>
                        <li><a  href="nestable.html">Nestable</a></li>
                        <li><a  href="tree.html">Tree View</a></li>
                        <li><a  href="font_awesome.html">Font Awesome</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-cogs"></i>
                        <span>Components</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="grids.html">Grids</a></li>
                        <li><a  href="calendar.html">Calendar</a></li>
                        <li><a  href="gallery.html">Gallery</a></li>
                        <li><a  href="todo_list.html">Todo List</a></li>
                        <li><a  href="draggable_portlet.html">Draggable Portlet</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-tasks"></i>
                        <span>Form Stuff</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="form_component.html">Form Components</a></li>
                        <li><a  href="advanced_form_components.html">Advanced Components</a></li>
                        <li><a  href="form_wizard.html">Form Wizard</a></li>
                        <li><a  href="form_validation.html">Form Validation</a></li>
                        <li><a  href="dropzone.html">Dropzone File Upload</a></li>
                        <li><a  href="inline_editor.html">Inline Editor</a></li>
                        <li><a  href="image_cropping.html">Image Cropping</a></li>
                        <li><a  href="file_upload.html">Multiple File Upload</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Data Tables</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="basic_table.html">Basic Table</a></li>
                        <li><a  href="responsive_table.html">Responsive Table</a></li>
                        <li><a  href="dynamic_table.html">Dynamic Table</a></li>
                        <li><a  href="advanced_table.html">Advanced Table</a></li>
                        <li><a  href="editable_table.html">Editable Table</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class=" fa fa-envelope"></i>
                        <span>Mail</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="inbox.html">Inbox</a></li>
                        <li><a  href="inbox_details.html">Inbox Details</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="morris.html">Morris</a></li>
                        <li><a  href="chartjs.html">Chartjs</a></li>
                        <li><a  href="flot_chart.html">Flot Charts</a></li>
                        <li><a  href="xchart.html">xChart</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Shop</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="product_list.html">List View</a></li>
                        <li><a  href="product_details.html">Details View</a></li>
                    </ul>
                </li>
                <li>
                    <a href="google_maps.html" >
                        <i class="fa fa-map-marker"></i>
                        <span>Google Maps </span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-comments-o"></i>
                        <span>Chat Room</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="lobby.html">Lobby</a></li>
                        <li><a  href="chat_room.html"> Chat Room</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="active" >
                        <i class="fa fa-glass"></i>
                        <span>Extra</span>
                    </a>
                    <ul class="sub">
                        <li class="active"><a  href="blank.html">Blank Page</a></li>
                        <li><a  href="lock_screen.html">Lock Screen</a></li>
                        <li><a  href="profile.html">Profile</a></li>
                        <li><a  href="invoice.html">Invoice</a></li>
                        <li><a  href="search_result.html">Search Result</a></li>
                        <li><a  href="pricing_table.html">Pricing Table</a></li>
                        <li><a  href="faq.html">FAQ</a></li>
                        <li><a  href="fb_wall.html">FB Wall</a></li>
                        <li><a  href="404.html">404 Error</a></li>
                        <li><a  href="500.html">500 Error</a></li>
                    </ul>
                </li>
                <li>
                    <a  href="login.html">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>

                <!--multi level menu start-->
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-sitemap"></i>
                        <span>Multi level Menu</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="javascript:;">Menu Item 1</a></li>
                        <li class="sub-menu">
                            <a  href="boxed_page.html">Menu Item 2</a>
                            <ul class="sub">
                                <li><a  href="javascript:;">Menu Item 2.1</a></li>
                                <li class="sub-menu">
                                    <a  href="javascript:;">Menu Item 3</a>
                                    <ul class="sub">
                                        <li><a  href="javascript:;">Menu Item 3.1</a></li>
                                        <li><a  href="javascript:;">Menu Item 3.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!--multi level menu end-->

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->
            Page content goes here
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
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
{!!HTML::script("admin/js/respond.min.js" )!!}

<!--common script for all pages-->
{!!HTML::script("admin/js/common-scripts.js")!!}


</body>
</html>
