<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Url_tem; ?>login.css">

</head>
<body>
  <div class="global-container">
    <div class="card login-form">
      <div class="card-body">
        <h3 class="card-title text-center">Log in to Codepen</h3>
        <div class="card-text">
          <!--
          <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
          <form method="POST" action="?action=login">
            <!-- to error: add class "has-danger" -->
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="mail" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <a href="#" style="float:right;font-size:12px;">Forgot password?</a>
              <input type="password" name="pass" class="form-control form-control-sm" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="login">Sign in</button>
            
            <div class="sign-up">
              Don't have an account? <a href="#">Create One</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
</html>