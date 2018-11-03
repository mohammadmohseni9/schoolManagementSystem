<?php 
session_start();
spl_autoload_register(function($class){
    require_once 'classes/'.strtolower($class).'.php';
}); 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>College Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="includes/css/bootstrap.css" rel="stylesheet">
    <link href="includes/css/bootstrap.css.map" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="includes/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="includes/css/bootstrap-grid.css.map">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="includes/css/font-awesome.css">
  
    <!-- Custom styles for this template -->
    <link href="includes/css/style.css" rel="stylesheet">
    <link href="includes/css/defaultstyle.css" rel="stylesheet">
    
        
  </head>

  <body>
<?php  
  $authentication = new Authentication();
  include_once 'includes/authlogin.php' ; 
?>
<body class="login-body">
  <div class="container">
    <div class="row offset-md-3 col-md-6 border-ud">
        <a href="login.php?form=login" id="log-in-button" class="btn btn-primary col-md-6">Log In</a>
        <a href="login.php?form=signup" id="sign-up-button" class="btn btn-success col-md-6">Sign Up</a>
    </div>
      
        <div class="offset-md-3 col-md-6" id="login">
          <p class="lead text-center"> LOG IN</p><hr>
          <form class="form" action="login.php" method="post">
            <div class="form-group">
              <label for="Username">Username </label>
              <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
              <label for="user">User</label>
              <select name="user_type" class="form-control">
                <option value="student">Student</option>
                <option value="staff">Staff</option>
                <option value="guardian">Guardian</option>
              </select>
            </div>
            <div class="form-group">
              <label for="remember" class="m-2">Remember Me</label>
              <input type="checkbox" name="remember">
            </div>
            <div class="form-group text-right">
              <input type="submit" class="btn btn-primary" name="login" value="Log In">
            </div>
          </form>
        </div>
  
        <div class="offset-md-3 col-md-6" id="signup">
          <p class="lead text-center"> Sign Up</p><hr>
          <form class="form p-4" action="login.php" method="post">
            <div class="form-group">
              <div class="row">
                <div class="col-md-4">
                  <label for="Username">First Name</label>
                  <input type="text" class="form-control" name="name" required>
                </div>
                <div class="col-md-4">
                  <label for="Username">Middle Name</label>
                  <input type="text" class="form-control" name="mid-name">
                </div>
                <div class="col-md-4">
                  <label for="Username">Last Name</label>
                  <input type="text" class="form-control" name="last-name" required>
                </div>  
              </div>
            </div>
            
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
              <label for="contact">Contact No</label>
              <input type="text" class="form-control" name="contact" required>
            </div>

            <div class="form-group">
              <label for="Username">Username</label>
              <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
              <label for="user">User</label>
              <select name="user_type" class="form-control">
                <option value="student">Student</option>
                <option value="staff">Staff</option>
                <option value="guardian">Guardian</option>
              </select>
            </div>
            <div class="form-group text-right">
              <input type="submit" class="btn btn-primary" name="signup" value="Sign Up">
            </div>
          </form>
        </div>

  </div>
<script src="includes/js/jquery.js"></script>
<script>
  $('#signup').hide();
  $('#log-in-button').click(function(e){
    e.preventDefault();
    $('#login').show('slow');
    $('#signup').hide('slow');
  });
  $('#sign-up-button').click(function(e){
    e.preventDefault();
    $('#login').hide('slow');
    $('#signup').show('slow');
  });
</script>  
</body>
</html>
