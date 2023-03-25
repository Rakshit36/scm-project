<?php 
 include 'profilecon.php';
  session_start(); 
 //check if the user has logged in and the user name is not availablev then redirect the user to the application with limited access.
  if (!isset($_SESSION['username'])) {
    //tell them they must log in to access all features 
  	$_SESSION['msg'] = "You must log in to access all the features";
  	header('location: login.php');
  }
  //check if the logout button has been clicked 
  if (isset($_GET['logout'])) {
    //then destroy the session and remove the username index and take them back to the  login page
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
//select everything from the table users where the username equals the  username index in the session
$query = " SELECT * FROM `users` WHERE username = '{$_SESSION['username']}' ";
$run_query = mysqli_query($con, $query);
    
//Load the data from the database and then load them into the page to allow the profile to include the personalised information which the user entered at registration
if(mysqli_num_rows($run_query) == 1){
while($result = mysqli_fetch_assoc($run_query)){
$user_username = $result['username'];
$user_email = $result['email'];
$user_password = $result['password'];
$user_favevent = $result['favourite_event'];
$user_event_attend = $result['event_desire'];
$user_fav_driver = $result['fav_driver'];
$user_fav_car = $result['fav_car'];    
}
}
?>

<!Doctype html>
<html lang = "eng">
<head>
<!--title for the website-->
<meta charset = "UTF-8">
<meta name = "description" content = "">
<meta name = "viewport" content = "width=device-width">
<link rel="icon" href="images/Logo%20Ideas-01.png">
<title>User Profile</title>
<!--CSS link for the styling-->
<link rel = "stylesheet" type = "text/css" href = "css/style.css">
<link rel = "stylesheet" type = "text/css" href= "css/styles.css">
<!--jQuery UI stylesheet-->
<link rel = "stylesheet" type = "text/css" href = "css/jquery-ui.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!--Bootstrap CSS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<!--Scripting-->
<script
  src="https://code.jquery.com/jquery-3.4.1.js"></script>
<!--jQuery ui -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--Script--> 
<script type = "text/javascript" language = "JavaScript" src = "js/script.js"></script>
</head>
<body id = "background">
<header>
<!--logo for the website-->
<div class = "logo">
<img src = "images/Logo%20Ideas-01.png" alt = "">   
</div>
<!--Navigation-->
<nav class = "navigation">
<div class = "mobile">
<a id="nav-toggle" href="#!"><span></span></a>
</div>
<ul>
    <li><a href = "index.php">Home</a></li>
    <li class="sub-menu" style = "z-index:10;"><a href = "
        #">Championship</a>
    <ul>
      <li><a href ="irishtarmac.php">ITRC</a></li> 
      <li><a href ="ni.php">NI</a></li> 
      <li><a href ="national.php">National</a></li>
      <li><a href ="wrc.php">WRC</a></li>
    </ul>
</li>
    <li><a href = "gallery.php">Gallery</a>
</li>
    <li><a href = "contact.php">Contact</a></li>
    <!-- Sub menu showing the username of the user when they are logged in. 
    Presents the username within the navigation with a dropdown to allow them to see how they can log out --> 
    <li class="sub-menu"style = "z-index:10;"><a href = "#"><?php if(isset($_SESSION['username'])) : ?>
  <strong style = "color:white;"><?php echo $_SESSION['username']; ?></strong></a>
    <ul>
    <li><a href = "profile.php"class = "active"><?php echo $_SESSION['username']; ?></a>
    <li><a href = "index.php?logout='1'" style="color:white;">Logout</a></li>
    <?php endif ?>
    </ul>
    </li>
    </ul>
</nav>
<div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
</header>

<div class ="container align-items-center">
<div class="card text-white bg-dark mb-3 align-items-center" style="max-width: 18rem;">
  <div class="card-header align-item-center"><h3>Welcome <?php echo $user_username; ?></h3></div>
<!--Card which contains the data taken from the database which the user has entered which allows the user to see the profile information which they have entered when the have entered into the championship event. Will change depending on the user which has logged in-->
  <div class="card-body">
    <h5 class="card-title">Your Profile</h5>
    <p class="card-text"><p>Email: <?php echo $user_email; ?></p>
      <p>Password: <?php echo $user_password; ?></p>
       <p>Favourite Events: <?php echo
    $user_favevent; ?></p>
       <p>Events I want to attend: <?php echo $user_event_attend; ?></p>
         <p>Favourite Driver: <?php echo $user_fav_driver; ?></p>
      <p>Favourite car: <?php echo $user_fav_car; ?></p>
  </div>
  
</div></div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type = "text/javascript" language = "JavaScript" src = "js/app.js"></script>
</body></html>
