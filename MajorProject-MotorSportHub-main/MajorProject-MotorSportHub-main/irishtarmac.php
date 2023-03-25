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
    <title>ITRC</title>
<!--CSS link for the styling-->
<link rel = "stylesheet" type = "text/css" href = "css/style.css">
<link rel = "stylesheet" type = "text/css" href = "css/jquery-ui.css">
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
      <li><a href ="irishtarmac.php"class = "active">ITRC</a></li> 
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
    
<!--main content-->   
<div class = "main">
<div class = "irishtarmac">
<img class = "ITRC" src ="images/ITRC_Logo_2020.png"></div>
    <div class="home_grid">
  <div class="home_box 1">
<h2>Irelands Premier Championship</h2>
<p>Irelands top Championship. </p>
<p>This is the top championship on the Island of Ireland. <br />
Twice in the year the competion is intensified as it overlaps with the British Rally Championship. <br />
This year the championships overlap with the West Cork Rally and the Ulster Rally</p>
<p>2020 Sees the championship include Galway once again after it had been cancelled in 2019</p>
        </div>     
<div class="home_box 2 col-sm-12 col-md-12">
<h1>Latest Championship Standings</h1>
<!--Call to the  irish.php file containing the standings.-->
<?php require 'irish.php' ?>
</div>
<div class="home_box 3 ">
<!--Embedded Twitter feed to allow fans to easily keep up to date with latest news-->
<h1>Twitter Feed</h1>   
<a class="twitter-timeline" data-width="1000" data-height="550" data-theme="dark" href="https://twitter.com/IrishTarmacTROA?ref_src=twsrc%5Etfw">Tweets by IrishTarmacTROA</a>
</div>
</div>
<!--Interactive Calendar which allows the user to access the information on the calendar by interacting with this element within the page-->
<div class="season">
  <div class="calendar-wrap">
    <h1 class="calendar-title">Calendar</h1>
    <ul class="championship">
      <li class="championship-item event1" >
        <div class="p-championship-item" >
          <time class="p-championship-round" datetime="2019-05-01">Round 1</time>
          <span class="p-championship-event" data-car="1">Galway Rally</span>
          <div class="p-championship-block"></div>
        </div>
      </li>
      <li class="championship-item event2">
        <div class="p-championship-item" >
          <time class="p-championship-round" datetime="2019-06-01">Round 2</time>
          <span class="p-championship-event" data-car="2">West Cork Rally</span>
          <div class="p-championship-block"></div>
        </div>
      </li>
      <li class="championship-item event1" >
        <div class="p-championship-item" >
          <time class="p-championship-round" datetime="2019-07-01">Round 3</time>
          <span class="p-championship-event" data-car="3">Circuit of Ireland Rally</span>
          <div class="p-championship-block"></div>
        </div>
      </li>
      <li class="championship-item event2">
        <div class="p-championship-item" >
          <time class="p-championship-round" datetime="2019-08-01">Round 4</time>
          <span class="p-championship-event" data-car="4">Rally of the lakes</span>
          <div class="p-championship-block"></div>
        </div>
      </li>
      <li class="championship-item event1" >
        <div class="p-championship-item" >
          <time class="p-championship-round" datetime="2019-09-01">Round 5</time>
          <span class="p-championship-event" data-car="5">Donegal Rally</span>
          <div class="p-championship-block"></div>
        </div>
      </li>
      <li class="championship-item event2">
        <div class="p-championship-item" >
          <time class="p-championship-round" datetime="2019-10-01">Round 6</time>
          <span class="p-championship-event" data-car="6">Ulster Rally</span>
          <div class="p-championship-block"></div>
        </div>
      </li>
      <li class="championship-item event1" >
        <div class="p-championship-item" >
          <time class="p-championship-round" datetime="2019-11-01">Round 7</time>
          <span class="p-championship-event" data-car="7">Cork 20 Rally</span>
          <div class="p-championship-block"></div>
        </div>
      </li>
    </ul>
    <!--The content on each of the differnt rounds in the championship.
  Hidden until the user clicks on the corresponding round which they would like to read more about and this will
reavel more detail.-->
    <div class="championship-content">
      
       <div class="p-championship-content" data-car="1">
        <div class="championship-content-card">
          <h3 class="championship-content-title event1">Round 1: Galway</h3>
          <time class="championship-content-date" datetime="2020-02-02">Event Date: Sunday 2nd February 2020</time>
          <p>2020 started in the traditional setting of the Galway international Rally on Sunday 2nd February. <br />
           The weather was not kind to the competitors as the day brought damp conditions. However this did not deter the pace of an charging Alastair Fisher. Who was taking part in the new VW POLO R5 car. <br />
           The event consisted of 9 stages made up of three loops of three stages repeated. <br />
           
              
          Logo for event is from <a href = "http://www.irishtarmac.com/events/">Irish Tarmac</a>
          </p>
          <div class="close" data-type-close></div>
        </div>
        <div class="timeline-content-image">
          <img src="images/Galway-Logo-300x170.jpg"/>
        <!--Reference for event image
         Irishtarmac.com. (2020). Events – #ITRC. [online] Available at: http://www.irishtarmac.com/events/ [Accessed 13 Feb. 2020].
         -->
        </div>
      </div>
       <div class="p-championship-content" data-car="2">
        <div class="championship-content-card">
          <h3 class="championship-content-title event2">Round 2: West Cork Rally</h3>
          <time class="championship-content-date" datetime="2020-03-14">Event date: 14th - 15th March 2020</time>
          <p> 
        The second round of the championship sees the series head to the south west of Ireland. The West Cork Rally takes in the second round of the championship. Traditionally held on the closest weekend to St.Patricks Day. <br /><br />
        This has become a popular event in the calendar. 
         Logo for event is from <a href = "http://www.irishtarmac.com/events/">Irish Tarmac</a></p>
          <div class="close" data-type-close></div>
        </div>
        <div class="championship-content-image">
          <img src="images/WC_Logo-300x200.png" width="150" height="100"/>
        <!--Image Reference
         Irishtarmac.com. (2020). Events – #ITRC. [online] Available at: http://www.irishtarmac.com/events/ [Accessed 13 Feb. 2020].
         -->
        </div>
      </div>
      <div class="p-championship-content" data-car="3">
        <div class="championship-content-card">
          <h3 class="championship-content-title event2">Round 3: Circuit of Ireland Rally</h3>
          <time class="championship-content-date" datetime="2020-04-11">Event date: 10th/11th April 2020</time>
          <p> The third round of the championship 
        Logo for event is the oldest event on the Calendar in Ireland. <br /><br />
              
        2020 sees the return of the Circuit of Ireland Rally after a three year absence. This years event will be based in Antrim. <br /><br />   
        <a href = "http://uaceasterstages.com/">Easter Stages Website</a></p>
          <div class="close" data-type-close></div>
        </div>
        <div class="championship-content-image">
          <img src="images/ws-logo-uac-circuit-of-ireland-rally.png"/>
            
        <!--Image Reference 
        Uaceasterstages.com. (2020). UAC Easter Stages. [online] Available at: http://uaceasterstages.com/ [Accessed 13 Feb. 2020].
        -->
        </div>
      </div>
       <div class="p-championship-content" data-car="4">
        <div class="championship-content-card">
          <h3 class="championship-content-title event1">Round 4: Rally of the Lakes</h3>
          <time class="championship-content-date" datetime="2020-05-03">Event date: 1st-3rd May 2020</time>
          <p> The traditional Rally of the lakes takes place on the first weekend in May annually. 
         This event features the most abbrasive tarmac road on the island. As well as this it features the most iconic stage on the island Molls Gap.
         Logo for event is from <a href = "http://www.irishtarmac.com/events/">Irish Tarmac Website</a>  
        </p>
          <div class="close" data-type-close></div>
        </div>
        <div class="championship-content-image">
          <img src="images/Rally_of_the_Lakes_Logo-300x200.png"/>
            
        <!--Images Reference
        Irishtarmac.com. (2020). Events – #ITRC. [online] Available at: http://www.irishtarmac.com/events/ [Accessed 13 Feb. 2020].
       -->
        </div>
      </div>
      <div class="p-championship-content" data-car="5">
        <div class="championship-content-card">
          <h3 class="championship-content-title event1">Round 5: Donegal Rally</h3>
          <time class="championship-content-date" datetime="2020-06-21">Event date: 19th - 21st June 2020</time>
          <p> The Donegal Rally could be classed as the most popular event in Motorsport. This is the only three day event on the island. <br />
              
          Iconic stages such as Knockalla and Atlantic Drive Feature annually.
        Logo for event is from <a href = "http://donegalrally.ie/home/">Donegal Rally Website</a> </p>
          <div class="close" data-type-close></div>
        </div>
        <div class="championship-content-image">
          <img src="images/logo.png"/>
            
        <!--Image Reference
        Donegal International Rally. (2020). Donegal International Rally June 21 - 23 2019 - Donegal - Ireland. [online] Available at: http://donegalrally.ie/home/ [Accessed 13 Feb. 2020].
        -->
        </div>
      </div>
        <div class="p-championship-content" data-car="6">
        <div class="championship-content-card">
          <h3 class="championship-content-title event1">Round 6: Ulster Rally</h3>
          <time class="championship-content-date" datetime="2020-08-21">Event date: 21st/22nd August 2020</time>
          <p>
         The summer break ends with the Ulster Rally. This for a second year in a row sees the event based in Newry with a compact route just outside the town. <br /><br />
         
         Often one of the more challenging events on the calendar. 2019 proved this to be the case as multiple competitors seen their event end on a slippery stage 2. 
              
        This round also sees the British Rally Championship make the trip across which adds another level of competition to the event.
         
         Logo for event is from <a href = "http://www.ulsterrally.com/">Ulster Rally Website</a></p>
          <div class="close" data-type-close></div>
        </div>
        <div class="championship-content-image">
          <img src="images/Todays-Ulster-Rally-2.jpg"/>
            
        <!-- Image Reference
        McCollum, O., Fullerton, S., Fullerton, S. and Fullerton, S. (2020). Ulster Rally - Official website of the Ulster Rally. [online] Ulster Rally. Available at: http://www.ulsterrally.com/ [Accessed 13 Feb. 2020].
        -->
        </div>
      </div>
       <div class="p-championship-content" data-car="7">
        <div class="championship-content-card">
          <h3 class="championship-content-title event1">Round 7: Cork 20 Rally</h3>
          <time class="championship-content-date" datetime="2020-09-27">Event date: 26th/27th September 2020</time>
          <p>
         The Cork 20 rally is the annual end of the season. This event has often seen a showdown for the overall win and is often the event which sees multiple class vicotries decided. 
         Logo for event is from <a href = "http://www.irishtarmac.com/events/">Irish Tarmac Website</a></p>
          <div class="close" data-type-close></div>
        </div>
        <div class="championship-content-image">
          <img src="images/Cork_20_Logo-300x200.png" alt="Cork20"/>
            
        <!--Images Reference 
         Irishtarmac.com. (2020). Events – #ITRC. [online] Available at: http://www.irishtarmac.com/events/ [Accessed 13 Feb. 2020].
        -->
        </div>
      </div>

    </div>
  </div>
</div>

    </div>
    
<!--Page Footer-->
<footer class="footer">
     <p>Motorsport Hub &copy; 2020</p>
     <p>Logo from <a href ="http://www.irishtarmac.com/events/">Irish Tarmac Rally Championship</a></p>
		</footer> 	
  <!--twitter widget script file-->
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!--My Script file-->
<script type = "text/javascript" language = "JavaScript" src = "js/script.js"></script>
    </body>
</html>
