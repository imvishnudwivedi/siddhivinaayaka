
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Prok | Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("/prok/admin-lte/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" media="all" />
        <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("/prok/admin-lte/dist/css/AdminLTE.css")}}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset("/prok/admin-lte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
      <a href="/" style="color:white;"><b>prok</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <!-- <form action="" method="post"> -->
        {!!Form::open(array('route' => array('postLogin'),'method' => 'POST','files'=>true))!!}

          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" id="name" name="name"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" id="password" name="password" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
           <div class="row">
            
            <div class="col-xs-4 pull-right">
              <button type="submit" class="btn btn-primary btn-block btn-flat">LogIn</button>
            </div><!-- /.col -->
          </div>
          {!!Form::close()!!}
        <!-- </form> -->

        <!-- <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div>  -->

        <!-- <a href="#">I forgot my password</a><br> -->
        <!-- <a href="register.html" class="text-center">Register a new membership</a> -->

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="{{ asset ("/prok/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset ("/prok/admin-lte/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>

    <script src="{{ asset ("/prok/js/defaults.js") }}" type="text/javascript"></script>
    
    <script src="{{ asset ("/prok/admin-lte/plugins/notify/bootstrap-notify.min.js") }}"></script>
    <!-- iCheck -->
     <script type="text/javascript">
       $(function(){
        // var color=getRandomColor();
        // console.log(color);
        $('body').css('background-color','#415D96');
       });
     </script>
  </body>
</html>