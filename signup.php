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
    <link rel="stylesheet" type="text/css" href="css/signup.css">

    <title>Create New Account</title>
     <link rel="shortcut icon" href="img/logo.png">
  </head>
  <body>
      
    <div class="signup-form">
      <form action="" method="post" accept-charset="utf-8">
        
        <div class="form-header">
          <h2>Sign up</h2>
          <p>Fill out this form and start chating with your friends.</p>
        </div>


        <div class="form-group">
          <label>UserName</label>
          <input type="text" name="user_name" class="form-control" placeholder="Example:md.abdulla" autocomplete="off" required>
        </div>

         <div class="form-group">
          <label>Password</label>
          <input type="password" name="user_pass" class="form-control" placeholder="Type Your Password" autocomplete="off" required>
        </div>


        <div class="form-group">
          <label>Email Address</label>
          <input type="email" name="user_email" class="form-control" placeholder="Type Your Email" autocomplete="off" required>
        </div>


        <div class="form-group">
          <label>Country</label>
          <select class="form-control" name="user_country" required="">
            <option disabled="">Select a Country</option>
                   <option >Bangladesh</option>
                   <option >Uk</option>
                   <option >India</option>
            
          </select>
        </div>

         <div class="form-group">
          <label>Gender</label>
          <select class="form-control" name="user_gender" required="">
            <option disabled="">Select a Your Gender</option>
                   <option >Male</option>
                   <option >Female</option>
                   <option >Others</option>
            
          </select>
        </div>
       

        <div class="from-group">
          <lebel class="checkbox-inline "> <input type="checkbox" required=""> I accept the  <a href="#" title="">Terms of Use</a> &amp; <a href="#" title="">Privacy Policy</a></lebel>
        </div>



      
          
   
    <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up" >Sign up</button>
        </div>

       <?php include ("signup_user.php");?>
      </form>

      <div class="text-center small" style="color:#67428B;">Already have an account?<a href="signin.php" >Signin Here</a></div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>