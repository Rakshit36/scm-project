<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name ="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0,minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<link rel="icon" href="images/Logo%20Ideas-01.png">
  <title>Login</title>
  <!--My stylesheet-->
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body id = "background">
  <div class="form-title">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	  <!--Underline-->
		<hr class="mb-3">
		<!--display if there are any errors-->
	  <?php include('errors.php'); ?>
	             <!--Underline-->
				 <hr class="mb-3">
  	<div class="register_login">
  		<input type="text" name="username" placeholder = "username">
  	</div>
  	<div class="register_login">
  		<input type="password" name="password" placeholder = "password">
  	</div>
  	<div class="register_login">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  
</body>
</html>