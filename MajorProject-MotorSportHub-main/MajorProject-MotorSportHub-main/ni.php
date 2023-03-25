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
require 'connect2.php' 
?>
<!Doctype html>
<html lang = "eng">
<head>
<!--title for the website-->
<meta charset = "UTF-8">
<meta name = "description" content = "introduction booking form holiday packages and offers">
<meta name = "viewport" content = "width=device-width">
<link rel="icon" href="images/Logo%20Ideas-01.png">
<title>Northern Ireland Rally Championship</title>
<!--CSS link for the styling-->
<link rel = "stylesheet" type = "text/css" href = "css/style.css">
<link rel = "stylesheet" type = "text/css" href = "css/jquery-ui.css">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!--Bootstrap CSS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
    <li class="sub-menu" style = "z-index:10;"><a href = "
        #">Championship</a>
    <ul>
      <li><a href ="irishtarmac.php">ITRC</a></li> 
      <li><a href ="ni.php"class = "active">NI</a></li> 
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
    
<!--main content-->   
<div class = "main">
<div class = "ni">
<img class = "NI" src="images/logo-site-large.png">
</div>
    <div class="home_grid">
  <div class="home_box 1 col-sm-12 col-md-12">
  <h1>Northern Ireland Rally Championship</h1>
<h2>Northern Ireland Top Events</h2>
<p>2020 sees the championship reformed to be a 5 round closed surface event <br />
This year the championship starts with the Kirkistown Stages Rally in February and concludes with Tyrone in July <br />
The organisers decided to give the championship a shake up this year to try and attract a greater number of competitors <br />
</p>

<p>Currently the series is suspended due to the COVID 19 crisis.</p>
<h1>Latest News</h1>
<a class="twitter-timeline" data-width="500" data-height="350" data-theme="dark" href="https://twitter.com/NIRally?ref_src=twsrc%5Etfw">Tweets by NIRally</a>
        </div>
  <div class="home_box 2 col-sm-12 col-md-12"><h1>Latest Championship Standings</h1>
  <!--Calls the ni standings.php file-->
  <?php require 'nistand.php' ?>
</div>    
</div>
<!--Championship calendar details are displayed within the page.  This allows the calendar to be created 
along the page with the details for each round hidden-->
<!--When the user selects the championship round this will be displayed-->
<div class="season">
  <div class="calendar-wrap">
    <h1 class="calendar-title">Calendar</h1>
    <ul class="championship">
      <li class="championship-item event1" >
        <div class="p-championship-item" >
          <time class="p-championship-round" datetime="2019-05-01">Round 1</time>
          <span class="p-championship-event" data-car="1">Kirkistown</span>
          <div class="p-championship-block"></div>
        </div>
      </li>
      <li class="championship-item event2">
        <div class="p-championship-item" >
          <time class="p-championship-round" datetime="2019-06-01">Round 2</time>
          <span class="p-championship-event" data-car="2">Bishopscourt</span>
          <div class="p-championship-block"></div>
        </div>
      </li>
      <li class="championship-item event1" >
        <div class="p-championship-item" >
          <time class="p-championship-round" datetime="2019-07-01">Round 3</time>
          <span class="p-championship-event" data-car="3">Maiden City Stages</span>
          <div class="p-championship-block"></div>
        </div>
      </li>
      <li class="championship-item event2">
        <div class="p-championship-item" >
          <time class="p-championship-round" datetime="2019-08-01">Round 4</time>
          <span class="p-championship-event" data-car="4">Tour of the Sperrins</span>
          <div class="p-championship-block"></div>
        </div>
      </li>
      <li class="championship-item event1" >
        <div class="p-championship-item" >
          <time class="p-championship-round" datetime="2019-09-01">Round 5</time>
          <span class="p-championship-event" data-car="5">Tyrones Stages</span>
          <div class="p-championship-block"></div>
        </div>
        </li>
    </ul>
    <!--This section contains the championship round details which are hidden until the user clicks for
  the round that they would like to see the information displayed on the page. -->
  <!--This will allow the user to have control over the information which is displayed on the page-->
    <div class="championship-content background">
      
       <div class="p-championship-content" data-car="1">
        <div class="championship-content-card">
          <h3 class="championship-content-title event1">Round 1: Kirkistown</h3>
          <time class="championship-content-date" datetime="2020-02-02">Event Date: Saturday 15th February 2020</time>
          <p>The 2020 season begins in Kirkistown for the Pacenotes Rally Magazine Stages Rally.<br />
          This is the annual opener to the season. Defending Champion Stephen Wright claimed victory again on the event. <br />
          The weather was not on their side as Storm Denis caused havoc with the event. Stage one having to be stopped to allow the relocation of the flying finish due to standing water.
       <br />
          </p>
          <div class="close" data-type-close></div>
        </div>
        <div class="championship-content-image">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2319.3853947319326!2d-5.475606248466923!3d54.45613468012951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48616ff3cc904abd%3A0x53b8a6b162e9f4db!2sKirkistown%20Racing%20Circuit!5e0!3m2!1sen!2suk!4v1584993924580!5m2!1sen!2suk" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
      </div>
       <div class="p-championship-content" data-car="2">
        <div class="championship-content-card">
          <h3 class="championship-content-title event2">Round 2: Bishopscourt Stages Rally</h3>
          <time class="championship-content-date" datetime="2020-03-07">Event date: 7th March 2020</time>
          <p> 
         The Second Event on the revamped Calendar remains the same with Bishopscourt remaining the second round.<br />
              
        The competitors return to the ciruit annually.<br />
        
        </p>
          <div class="close" data-type-close></div>
        </div>
             <div class="championship-content-image">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2328.2278390629895!2d-5.5814541484726305!3d54.299921780092724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486141e4868f0011%3A0x6c9ca37d75879631!2sBishopscourt%20Racing%20Circuit!5e0!3m2!1sen!2suk!4v1584994453070!5m2!1sen!2suk" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
      </div>
      <div class="p-championship-content background" data-car="3">
        <div class="championship-content-card">
          <h3 class="championship-content-title event2">Round 3: Maiden City Stages</h3>
          <time class="championship-content-date" datetime="2020-04-11">Event date: 25th April</time>
          <p> The Third round remains the same as last year with the Maiden City Stages Rally. <br /><br />
              
          However the difference this year is that the event is based at Shackleton Race Circuit.<br /><br />  
          This is the third circuit based event on the Calendar for 2020. 
            </p>
          <div class="close" data-type-close></div>
        </div>
      <div class="championship-content-image">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36609.37328129942!2d-7.346750626486882!3d55.006660497485996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x485fdde434d09363%3A0xbd21fa2ac755f32f!2sLondonderry!5e0!3m2!1sen!2suk!4v1584994597488!5m2!1sen!2suk" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
      </div>
       <div class="p-championship-content" data-car="4">
        <div class="championship-content-card">
          <h3 class="championship-content-title event1">Round 4: Tour of the Sperrins.</h3>
          <time class="championship-content-date" datetime="2020-05-03">Event date: 6th June 2020</time>
          <p> The fourth and penultimate event takes place in Maghera. 
        This is the Tour of the Sperrins Rally. <br />
              
        This round is the first of two closed road events on the calendar. This will help to decide the championship as the closed road events can help consolidate an early leader or help a new on emerge. 
        </p>
          <div class="close" data-type-close></div>
        </div>
       <div class="championship-content-image">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9189.181900499962!2d-6.684052761527107!3d54.84506023357921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4860404902aea08b%3A0x763c009072fdaab7!2sMaghera!5e0!3m2!1sen!2suk!4v1584994741157!5m2!1sen!2suk" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
      </div>
      <div class="p-championship-content" data-car="5">
        <div class="championship-content-card">
          <h3 class="championship-content-title event1">Round 5: Tyrone Stages</h3>
          <time class="championship-content-date" datetime="2020-06-21">Event date: 18th July 2020</time>
          <p> The final round of the championship takes place at the Tyrone Stages Rally based in Cookstown. <br />
            
          The Asphalt Championship is also involved in the Tyrone Stages which adds another level of competition to the event for the season regulars. <br />
            
          </p>
          <!--Allow the user to close the round information-->
          <div class="close" data-type-close></div>
        </div>
          <div class="championship-content-image">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18470.503257991506!2d-6.762781870654653!3d54.64251258113903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4860585a85d7a781%3A0x21515de26127c133!2sCookstown!5e0!3m2!1sen!2suk!4v1584994795180!5m2!1sen!2suk" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
      </div>

    </div>
  </div>
</div>
    </div>
   <!-- Championship logo reference 
Nirallychampionship.com. (2020). McGrady Insurance Motorsport UK Northern Ireland Stage Rally Championship – Official Website. [online] Available at: https://www.nirallychampionship.com/ [Accessed 12 Feb. 2020].
--> 
    
<!--Page Footer-->
<footer class="footer">
     <p>Motorsport Hub &copy; 2020
     <br />Championship logo from <a href="https://www.nirallychampionship.com/">NI Championship</a></p>
		</footer> 
    <!--twitter widget script file-->
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <!--Required js files for bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!--My Script File-->	
<script type = "text/javascript" language = "JavaScript" src = "js/script.js"></script>
    </body>
</html>