<?php 
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
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/Logo%20Ideas-01.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel = "stylesheet" href="css/style.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!--Scripting-->
<script
  src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <title>Contact Us</title>
  </head>
  <body>
<!--Navigation-->
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
    <li><a href = "gallery.php" >Gallery</a>
</li>
    <li><a href = "contact.php"class = "active">Contact</a></li>
    <!-- Sub menu showing the username of the user when they are logged in. 
    Presents the username within the navigation with a dropdown to allow them to see how they can log out --> 
    <li class="sub-menu"style = "z-index:10;"><a href = "#"><?php if(isset($_SESSION['username'])) : ?>
  <strong style = "color:white;"><?php echo $_SESSION['username']; ?></strong></a>
    <ul>
    <li><a href = "profile.php"><?php echo $_SESSION['username']; ?></a>
    <li><a href = "index.php?logout='1'" style="color:white;">Logout</a></li>
    <?php endif ?>
    </ul>
    </li>
    </ul>
</nav>
<div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
</header>
<div class ="contact">
<div class ="container contact_us">
 <h1>Contact Us</h1>
    <hr>
   <div class="row">
      <div class = "col-lg-6 col-md-12 col-sm-12">
        <!--Different ways of contacting the company-->
      <h2>How to Contact us</h2>
      <hr>
      <p>There are a range of ways that you get in contact with us.</p>
      <p>If we have missed out an event let us know using the form to the right</p>
      <address>33 Edenaveys Crescent Armagh</address>
      <p>Email: MotorsportHub20@outlook.com</p>
      <p>Mobile: 076392281</p>
      </div>
       <div class ="col-lg-6 col-md-12 col-sm-12">
         <!--Contact form to allow the user to get in contact with the company -->
       <h2>Our Team</h2>
       <hr>
       <!--Team information displayed using bootstrap carousel and cards to provide interactivity-->
       <div class = "container-fluid">
         <div class = "row">
           <div class = "col-sm-12">
             <div id = "inam" class="carousel slide" data-ride="carousel">
               <div class = "carousel-inner">
                 <div class = "carousel-item active">
                   <div class = "row">
                     <div class = "col-sm-12 col-lg-4 align-item-sm-center align-item-lg-center">
                       <!--Cards which contain the details-->
                       <!--First member of staff details-->
                       <div class = "card teamcards" style = "width: 300px; color: black;">
                        <img src = "images/img_Ulster/1.CraigBreen.jpg" class ="card-img-top">
                        <div class ="card-body details">
                          <h4 class = "card-title name">James Johnston</h4>
                          <p class ="card-text description">Editor</p>
                          <p class = "card-text description">James Set up the business and is a massive fan of the sport</p>
                          <p class = "card-text description">Email: Motorsporthub20@outlook.com</p>
                         </div>
                      </div>
                     </div>
                   </div>

                 </div>
                 <!--details for photographer-->
                 <div class = "carousel-item">
                  <div class = "row">
                    <div class = "col-sm-12 col-lg-4 align-item-sm-center align-item-lg-center">
                      <!--Cards which contain the details-->
                      <div class = "card teamcards" style = "width: 300px; color: black;">
                       <img src = "images/img_loughgall/WesleyPatterson.jpg" class ="card-img-top">
                       <div class ="card-body details">
                         <h4 class = "card-title name">Hans Johnston</h4>
                         <p class ="card-text description">Photographer</p>
                         <p class = "card-text description">Takes some photographs for the company</p>
                         <p class = "card-text description">Email: Motorsporthub20@outlook.com</p>
                        </div>
                     </div>
                    </div>
                  </div>

                </div>
                <!--details for reporter-->
                <div class = "carousel-item">
                  <div class = "row">
                    <div class = "col-sm-12 col-lg-4 align-item-sm-center align-item-lg-center">
                      <!--Cards which contain the details-->
                      <div class = "card teamcards" style = "width: 300px; color: black;">
                       <img src = "images/img_loughgall/barrymorris.jpg" class ="card-img-top">
                       <div class ="card-body details">
                         <h4 class = "card-title name">Alan Jones</h4>
                         <p class ="card-text description">Reporter</p>
                         <p class = "card-text description">Compiles the latest news for us</p>
                         <p class = "card-text description">Email: Motorsporthub20@outlook.com</p>
                        </div>
                     </div>
                    </div>
                  </div>

                </div>
               </div>
               <!--Controls to allow the next or previous card to be displayed within the page-->
               <a href = "#inam" class="carousel-control-prev" data-slide="prev" style = "padding: 10px;">
                 <span class = "carousel-control-prev-icon"></span>
               </a>
               <a href = "#inam" class="carousel-control-next" data-slide="next">
                 <span class = "carousel-control-next-icon"></span>
               </a>
             </div>
           </div>
         </div>



       </div>
        </div>
       </div>
   </div>
 </div>
<footer class="footer">
     <p>Motorsport Hub &copy; 2020. <br />Images credit: James Johnston</p>
		</footer> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
   <script type = "text/javascript" language = "JavaScript" src = "js/script.js"></script>
  </body>
</html>
