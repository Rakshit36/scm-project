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
require 'dbconnect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="icon" href="images/Logo%20Ideas-01.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!--jQuery Fancy Box CSS-->
   <link rel = "stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
   <!--My own Style Sheet-->
    <link rel = "stylesheet" href="css/style.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!--Scripting-->
<script
  src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <title>Monte Carlo Rally 2020</title>
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
    <li><a href = "gallery.php">Gallery</a>
</li>
    <li><a href = "contact.php">Contact</a></li>
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
      
<!--GallerySection-->
   <section class="gallery-block cards-gallery">
   <div class="container">
       <div class="heading">
          <h2>Monte Carlo 2020</h2>
         <p>Images on this page credit:<a href ="https://acm.mc/en/edition/rallye-monte-carlo-edition-2020/photo-gallery/">Monte Carlo Motorclub</a></p>
          </div>
        <div class="row">
        <!--PHP to dynamiclally load the images from the database onto the page-->
         <?php 
         //The SQL To retrieve the desired information from the table monaco 20
        $sql = 'SELECT `img_ID`, `Caption`, `Event_ID`, `img` FROM `monaco20`';
        //the monaco result will be displayed within the page 
        $monaco = mysqli_query($conn, $sql);
        //while loop which run as long as there is data from the database table
        while ($record = mysqli_fetch_assoc($monaco)){
          //the imgThumbUrl and imgURL will make use of the image path so that the image can be displayed
          $imgThumbUrl = 'images/'.$record['img'];
          $imgURL = 'images/'.$record['img'];
       ?>
       <!--The cards are used to load the data from the database to dynamically create the gallery-->
       <!--The card contains images at the top and the body contains the caption-->
          <div class="col-md-4">
            <div class ="card my_card border-0 transform-on-hover">
               <a class="gal_link" aria="hidden" href = "<?php echo $imgURL; ?>" data-fancybox="gallery" data-caption="<?php echo $record['Caption']; ?>">
                   <img src="<?php echo $imgThumbUrl ?>" class="card-img-top"></a>
                <div class = "card-body">
                <h5 class="card-title"><?php echo $record['Caption']?></h5>
                </div>
              </div>
            </div>
        <?php
         }
         ?>
       </div>
          </div>
   </section>
    <!--Images credit 
Automobile Club de Monaco. (2020). Photo Gallery - Automobile Club de Monaco. [online] Available at: https://acm.mc/en/edition/rallye-monte-carlo-edition-2020/photo-gallery/ [Accessed 30 Jan. 2020].
-->
     <footer class="footer">
     <p>Motorsport Hub &copy; 2020. <br />Images credit:<a href ="https://acm.mc/en/edition/rallye-monte-carlo-edition-2020/photo-gallery/">Monte Carlo Motorclub</a></p>
		</footer> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <!--Popper js File-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <!--Bootstrap JS File-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!--Fancy Box JS file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
    <!--My Own JS File-->
   <script type = "text/javascript" language = "JavaScript" src = "js/script.js"></script>
  </body>
</html>