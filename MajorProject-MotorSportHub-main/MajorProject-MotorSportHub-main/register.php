<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name ="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0,minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<link rel="icon" href="images/Logo%20Ideas-01.png">
  <title>Register Account</title>
  <!--My stylesheet-->
<link rel="stylesheet" type="text/css" href="css/style.css">
  <!--Script--> 
  <script type = "text/javascript" language = "JavaScript" src = "js/script.js"></script>
</head>
<body id = "background">
  <div class="form-title">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  <p class = "text-center">Please fill out the details to register</p>
	  <!--Underline-->
	  <hr class="mb-3">
	  <!--Display if there are any errors-->
	  <?php include('errors.php'); ?>
	             <!--Underline-->
				 <hr class="mb-3">
<!--Registration form for the username, email and password to allow the user to register an account-->
  	<div class="register_login">
  	  <input type="text" name="username" value="<?php echo $username; ?>" placeholder = "username">
  	</div>
  	<div class="register_login">
  	  <input type="email" name="email" value="<?php echo $email; ?>" placeholder="email">
  	</div>
  	<div class="register_login">
  	  <input type="password" name="password_original" placeholder = "password">
  	</div>
  	<div class="register_login">
  	  <input type="password" name="password_confirm" placeholder="confirm password">
  	</div>
      <!--Profile information which will help to create a profile for each user-->
    <h2>Profile Information</h2>
      <hr>
        	<div class="register_login">
  	  <input type="text" name="fav" placeholder="favourite event">
  	</div>
      <div class="register_login">
  	  	<textarea id="exampleFormControlTextarea1" rows="3"  name="desire" placeholder = "desired events to attend"></textarea>
  	</div>
        	<div class="register_login">
  	  <input type="text" name="fav_driver" placeholder="favourite driver">
  	</div>
      	<div class="register_login">
  	  <input type="text" name="cars" placeholder="favourite car">
  	</div>

  	<div class="register_login">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>

          <hr>
     <p>
         <!--If they already have an account go to the login page-->
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
