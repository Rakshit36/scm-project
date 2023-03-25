<?php require 'connect2.php' ?>
<!Doctype html>
<html lang = "eng">
<head>
<!--title for the website-->
<meta charset = "UTF-8">
<meta name = "description" content = "introduction booking form holiday packages and offers">
<meta name = "viewport" content = "width=device-width">
<link rel="icon" href="images/Logo%20Ideas-01.png">
    <title>ITRC</title>
<!--CSS link for the styling-->
<link rel = "stylesheet" type = "text/css" href = "css/style.css">
<link rel = "stylesheet" type = "text/css" href = "css/jquery-ui.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!--Scripting-->
<script
  src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
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
    <li class="sub-menu"><a href = "
        #">Championship</a>
    <ul>
      <li><a href ="irishtarmac.php" class="active">ITRC</a></li> 
      <li><a href ="ni.php">NI</a></li> 
      <li><a href ="national.php">National</a></li>
      <li><a href ="wrc.php">WRC</a></li>
    </ul>
</li>
    <li><a href = "gallery.html">Gallery</a>
</li>
    <li><a href = "contact.html">Contact</a></li>
    </ul>
</nav>
<div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
</header>
    
<!--main content-->   
<div class = "main">
<p>You are currently not signed in. <a href = "login.php">Login</a>Not Yet a member? <a href = "signup.php">Sign Up</a></p>
    <p>Top access this championship detail you must first sign in.</p>
    </div>
    
<!--Page Footer-->
<footer class="footer">
     <p>Motorsport Hub &copy; 2020</p>
     <p>Logo from <a href ="http://www.irishtarmac.com/events/">Irish Tarmac Rally Championship</a></p>
		</footer> 	
  <!--twitter widget script file-->
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<!--My Script file-->
<script type = "text/javascript" language = "JavaScript" src = "js/script.js"></script>
    </body>
</html>
