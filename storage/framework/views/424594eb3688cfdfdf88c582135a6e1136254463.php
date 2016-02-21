<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Innocent Christopher KIlogha">
    <meta name="keyword" content="Miss, Tanzania, Utalii, Urembo, Miss Tanzania, KIlimanjaro, Mbuga za wanayama, Vivutio">
    <link rel="shortcut icon" href="<?php echo e(asset('admin/img/logo.png')); ?>">

    <title>Miss Tanzania Contest | Login</title>
    <!-- Bootstrap core CSS -->
    <?php echo HTML::style("admin/css/bootstrap.min.css" ); ?>

    <?php echo HTML::style("admin/css/bootstrap-reset.css" ); ?>

    <!--external css-->
    <?php echo HTML::style("admin/assets/font-awesome/css/font-awesome.css" ); ?>

    <!-- Custom styles for this template -->
    <?php echo HTML::style("admin/css/style.css" ); ?>

    <?php echo HTML::style("admin/css/style-responsive.css" ); ?>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
     <?php echo HTML::script("admin/js/html5shiv.js"); ?>

     <?php echo HTML::script("admin/js/respond.min.js"); ?>

    <![endif]-->
</head>

<body class="login-body">


<div class="container">
    <div style="max-width: 330px; margin-left: auto; margin-right: auto">
        <?php echo Form::open(array('url'=>'login','class'=>'form-signin','role'=>'form','id'=>'UserLogin')); ?>

        <h2 class="form-signin-heading"><?php echo HTML::image("admin/img/secrecy-icon.png"); ?><strong> sign in now</strong></h2>
        <div class="login-wrap">

            <?php if(session('message')): ?>
                <div class="alert fade in alert-danger">
                    <i class="icon-remove close" data-dismiss="alert"></i>
                    <?php echo e(session('message')); ?>

                </div>
            <?php endif; ?>
            <input type="text" name="username"  id="username" class="form-control" placeholder="User ID" autofocus autocomplete=off required>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required autocomplete=off>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                 <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                </span>

            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>

        </div>
        <?php echo Form::close(); ?>

                <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <?php echo Form::open(array('url'=>'forgotPassword','role'=>'form','id'=>'forgotPassword')); ?>

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body">
                        <p><span class="text-center "><h4 class="text-center text-info">Enter your email and user name to reset your account</h4> </span> </p>
                        <div class="form-group">
                            <label for="status">Enter your Username</label>
                            <input type="text" name="psusername" id="psusername" placeholder="Username" autocomplete="off" class="form-control placeholder-no-fix" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Enter your e-mail address</label>
                            <input type="email" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-danger" type="button">Cancel</button>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                    <?php echo Form::close(); ?>


                    <?php echo HTML::script("admin/js/jquery.js" ); ?>

                    <?php echo HTML::script("admin/js/bootstrap.min.js" ); ?>

                    <?php echo HTML::script("admin/js/jquery.dcjqaccordion.2.7.js" ); ?>

                    <?php echo HTML::script("admin/js/jquery.scrollTo.min.js" ); ?>

                    <?php echo HTML::script("admin/js/jquery.nicescroll.js"); ?>

                    <?php echo HTML::script("admin/js/jquery.validate.min.js" ); ?>

                    <?php echo HTML::script("admin/js/respond.min.js"  ); ?>


                            <!--common script for all pages-->
                    <?php echo HTML::script("admin/js/common-scripts.js" ); ?>


                            <!--script for this page-->
                    <?php echo HTML::script("admin/js/form-validation-script.js" ); ?>

                    <script>
                        //Validate user login
                        $("#forgotPassword").validate({
                            rules: {

                                psusername: {
                                    required: true
                                },
                                email: {
                                    required: true,
                                    email: true
                                }
                            },
                            messages: {
                                psusername: {
                                    required: "Please enter your username",
                                },
                                email: {
                                    required: "Please provide a password",
                                    email: "Enter valid email address"
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
        <!-- modal -->


    </div>

</div>

         <!-- js placed at the end of the document so the pages load faster -->
<?php echo HTML::script("admin/js/jquery.js" ); ?>

<?php echo HTML::script("admin/js/bootstrap.min.js" ); ?>

<?php echo HTML::script("admin/js/jquery.dcjqaccordion.2.7.js" ); ?>

<?php echo HTML::script("admin/js/jquery.scrollTo.min.js" ); ?>

<?php echo HTML::script("admin/js/jquery.nicescroll.js"); ?>

<?php echo HTML::script("admin/js/jquery.validate.min.js" ); ?>

<?php echo HTML::script("admin/js/respond.min.js"  ); ?>


        <!--common script for all pages-->
<?php echo HTML::script("admin/js/common-scripts.js" ); ?>


        <!--script for this page-->
<?php echo HTML::script("admin/js/form-validation-script.js" ); ?>

</body>
</html>
