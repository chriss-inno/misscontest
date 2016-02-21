<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Miss Tanzaia Context app">
    <meta name="author" content="Innocent Christopher KIlogha">
    <meta name="keyword" content="Miss, Tanzania, Utalii, Urembo, Miss Tanzania, KIlimanjaro, Mbuga za wanayama, Vivutio">
    <link rel="shortcut icon" href="<?php echo e(asset('admin/img/logo.png')); ?>">
    <title>Miss Tanzania Contest | <?php echo $__env->yieldContent('page-title'); ?></title>
    <!-- Bootstrap core CSS -->
     <?php echo HTML::style("admin/css/bootstrap.min.css" ); ?>

     <?php echo HTML::style("admin/css/bootstrap-reset.css" ); ?>

    <!--external css-->
     <?php echo HTML::style("admin/assets/font-awesome/css/font-awesome.css"); ?>

     <?php echo $__env->yieldContent('page-style'); ?>
    <!-- Custom styles for this template -->
     <?php echo HTML::style("admin/css/style.css" ); ?>

     <?php echo HTML::style("admin/css/style-responsive.css" ); ?>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <?php echo HTML::script("admin/js/html5shiv.js"); ?>

    <?php echo HTML::script("admin/js/respond.min.js"); ?>

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
                        <img alt="" src="<?php echo e(asset('admin/img/avatar-mini2.jpg')); ?>">
                        <span class="username"><?php echo e(Auth::user()->last_name); ?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="<?php echo e(url('profile')); ?>"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="<?php echo e(url('notification')); ?>"><i class="fa fa-bell-o"></i> Notification</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="<?php echo e(url('logout')); ?>"><i class="fa fa-key"></i> Log Out</a></li>
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
            <?php echo $__env->yieldContent('page-menus'); ?>

            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <section id="main-content">
    <!--main content start-->
           <?php echo $__env->yieldContent('contents'); ?>
    <!--main content end-->
    </section>

    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            <?php echo e(date("Y")); ?> &copy; Miss Tanzania Contest.
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<?php echo HTML::script("admin/js/jquery.js"); ?>

<?php echo HTML::script("admin/js/bootstrap.min.js"); ?>

<?php echo HTML::script("admin/js/jquery.dcjqaccordion.2.7.js"); ?>

<?php echo HTML::script("admin/js/jquery.scrollTo.min.js"); ?>

<?php echo HTML::script("admin/js/jquery.nicescroll.js"); ?>

<?php echo HTML::script("admin/js/respond.min.js" ); ?>


<!--common script for all pages-->
<?php echo HTML::script("admin/js/common-scripts.js"); ?>

 <!--script for this page-->
<?php echo $__env->yieldContent('page-scripts'); ?>
</body>
</html>
