<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Innocent Christopher KIlogha">
    <meta name="keyword" content="Miss, Tanzania, Utalii, Urembo, Miss Tanzania, KIlimanjaro, Mbuga za wanayama, Vivutio">
    <link rel="shortcut icon" href="{{ asset('admin/img/logo.png') }}">

    <title>Miss Tanzania Contest | Login</title>
    <!-- Bootstrap core CSS -->
    {!!HTML::style("admin/css/bootstrap.min.css" )!!}
    {!!HTML::style("admin/css/bootstrap-reset.css" )!!}
    <!--external css-->
    {!!HTML::style("admin/assets/font-awesome/css/font-awesome.css" )!!}
    <!-- Custom styles for this template -->
    {!!HTML::style("admin/css/style.css" )!!}
    {!!HTML::style("admin/css/style-responsive.css" )!!}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
     {!!HTML::script("admin/js/html5shiv.js")!!}
     {!!HTML::script("admin/js/respond.min.js")!!}
    <![endif]-->
</head>

<body class="login-body">

<div class="container">

    {!! Form::open(array('url'=>'login','class'=>'form-signin','role'=>'form','id'=>'UserLogin')) !!}
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" placeholder="User ID" autofocus name="username" required>
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>

        </div>

        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        <button class="btn btn-success" type="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->

    {!! Form::close() !!}


</div>



<!-- js placed at the end of the document so the pages load faster -->
 {!!HTML::script("admin/js/jquery.js")!!}
 {!!HTML::script("admin/js/bootstrap.min.js")!!}
{!!HTML::script("admin/js/jquery.validate.min.js" ) !!}
{!!HTML::script("admin/js/respond.min.js"  ) !!}
{!!HTML::script("admin/js/form-validation-script.js") !!}
<script>
    //Validate user login
    $("#UserLogin").validate({
        rules: {
            username:required,
            password:required
        },
        messages: {
                username: "Please provide a username",
                password: "Please provide a password"

        }
    });
</script>


</body>
</html>
