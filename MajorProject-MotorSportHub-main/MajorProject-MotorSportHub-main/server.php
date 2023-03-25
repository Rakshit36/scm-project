<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// ensure connection can be established to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// all the user to register once they have clicked the button on the registration form.
if (isset($_POST['reg_user'])) {
  // take all the input from the registration form and load them so that processing can be carried out
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_original = mysqli_real_escape_string($db, $_POST['password_original']);
  $password_confirm = mysqli_real_escape_string($db, $_POST['password_confirm']);
  $fav_event = mysqli_real_escape_string($db, $_POST['fav']);
  $desire_event = mysqli_real_escape_string($db, $_POST['desire']);
  $fav_driver = mysqli_real_escape_string($db, $_POST['fav_driver']);
  $fav_car = mysqli_real_escape_string($db, $_POST['cars']);


  //form validation to check that the username email and password are not left empty as these will be the fields which register the account and the username and password used to allow logging in. 
    //The array_push will load the error message to the array errors so that the user is aware if they leave any of the required fields blank they will be shown a message saying this is required
  if (empty($username)) { array_push($errors, "We require a username"); }
  if (empty($email)) { array_push($errors, "We require an email"); }
  if (empty($password_original)) { array_push($errors, "For security reasons a password is required"); }
  if ($password_original != $password_original) {
	array_push($errors, "The two passwords do not match");
  }

  //before registration can be carried out check if the entered username or email is already in use
  //the user name and email should only have one user registered using each
  $check_user = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $registered = mysqli_query($db, $check_user);
  $user = mysqli_fetch_assoc($registered);
  
  if ($user) { // if username is already taken
    if ($user['username'] === $username) {
      array_push($errors, "This username is already in use");
    }

    if ($user['email'] === $email) {
      array_push($errors, "This email is already in use");
    }
  }

  // finally if there are no errors allow the user to register an account 
  if (count($errors) == 0) {
  	$password = md5($password_original);//encrypt the password for security

  	$query = "INSERT INTO `users`(`username`, `email`, `password`, `favourite_event`, `event_desire`, `fav_driver`, `fav_car`) VALUES ('$username','$email','$password','$fav_event', '$desire_event', '$fav_driver','$fav_car')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Registration Successful! You are now logged in";
      //when the user has successfully registered and are then taken to the home page
  	header('location: index.php');
  }
}

//allow the user to login to their account

//use the username and the password loaded from the login form and load them to a variable and if empty return that the password and username is required. if there are no errors allow the user to login otherwise return error message 
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "A Username is required to login");
  }
  if (empty($password)) {
  	array_push($errors, "A Password is required to login");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Username or Password do not match our records");
  	}
  }
}

?>