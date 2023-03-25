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
   <!--Baguetter Box CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
   <!--My own CSS-->
    <link rel = "stylesheet" href="css/style.css">
    <!--fontawesome icon css-->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


        <!--Scripting-->
<script
  src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <title>Ulster Rally 2019</title>
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
          <h2>Ulster Rally 2019</h2>
          </div>
        <div class="row">
         <?php 
         //sql to select the image and the caption from the table ulster 19
         $sql = 'SELECT `ID`, `Caption`, `img`FROM `ulster19`';
         //ulster varaible which will run the query defined as long as a connection to the database can be achieved
         $ulster = mysqli_query($conn, $sql);
         //while there is a result to display within the ulster variable this will be shown. 
         while ($record = mysqli_fetch_assoc($ulster)){
           //load the image path to the variables to be called within the cards creation 
          $imgThumBurl = 'images/'.$record["img"];
          $imgURL = 'images/'.$record["img"];
        ?>
        <!--the cards are created using bootstrap cards. 
      This also makes use of the fancybox library to help me to achieve the overall goal of an interactive gallery
    This means that the images could be viewed without having to view the images individually
    This includes the image as the header of the card and the caption in the body -->
         <div class="col-md-4">
           <div class ="card border-0 transform-on-hover">
           <a href = "<?php echo $imgURL; ?>" data-fancybox="gallery" data-caption="<?php echo $record['Caption']; ?>">
             <img src="images/<?php echo $record['img'] ?>" class="card-img-top"></a>
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
     <footer class="footer">
     <p>Motorsport Hub &copy; 2020. <br />Images credit: James Johnston</p>
		</footer> 
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!--Popper JS-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <!--BOOTSTRAP JS FILE-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--Baguette Box JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <!--Fancy Box JS file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
    <!--My JS File-->
    <script type = "text/javascript" language = "JavaScript" src = "js/script.js"></script>
  </body>
</html>