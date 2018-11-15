
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IT-Jobs Admin | Login</title>
  @include("viewAdmin.elements.stylesheet")
</head>
<body class="hold-transition login-page" >
  <div class="login-box">
    <div class="login-logo">
      <b>IT-Jobs Admin</b>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Login</p>

      <form method="POST" action="{!! url('/api/login') !!}" >
        <div class="form-group has-feedback 1">


          <input type="text" class="form-control" placeholder="Username" name="username" value="{{old('username')}}">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          
        </div>
        <div class="form-group has-feedback 1">


          <input type="Password" class="form-control" placeholder="Password" name="password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          
        </div>
        <div class="row">

          <!-- /.col -->
          <div class="col-xs-4 col-md-offset-4">
            <input type="hidden" name="_token" value="4jiYiwdHvcv6FYDDZlSxbeUMHgexMhpuYh9Y7acB">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  @include("viewAdmin.elements.script")
  
</body>
</html>
