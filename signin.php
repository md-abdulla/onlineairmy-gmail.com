<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Courgette|Pacifico&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">

    <title>Welcome to Sign In</title>
    <link rel="shortcut icon" href="img/logo.png">
  </head>
  <body>
      
    <div class="signin-form">
      <form action="" method="post" accept-charset="utf-8">
        
        <div class="form-header">
          <h2>Sign In</h2>
          <p>Login to Tech Hawker</p>
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control" placeholder="Type Your Email" autocomplete="off" required>
        </div>


         <div class="form-group">
          <label>Password</label>
          <input type="password" name="pass" class="form-control" placeholder="Type Your Password" autocomplete="off" required>
        </div>
        
        <div class="small">Forgot Password <a href="forgot_pass.php">Click Here</a>     </div><br>
          
   
    <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign In</button>
        </div>

<?php  include("signin_user.php");?> 
      </form>
      <div class="text-center small" style="color:#67428B;">Don't have an account? <a href="signup.php" >Create One</a></div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>