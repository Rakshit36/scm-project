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
<title>National</title>
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
      <li><a href ="irishtarmac.php">ITRC</a></li> 
      <li><a href ="ni.php">NI</a></li> 
      <li><a href ="national.php"class = "active">National</a></li>
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
<div class ="national">
</div>
    <div class="home_grid">
  <div class="home_box 1 col-sm-12 col-md-12">
  <!--Brief introductio to the championship-->
  <h1>Triton National Rally Championship</h1>
<h2>Irelands One Day Events</h2>
<p>This series features an alternating calendar. This means that the events in the calendar which would mean that the rounds change on a regular basis. <br />
This opens the championship for a more balanced competition as the events do not consistently remain the same within the calendar.</p>
<p>This year Carlow makes a return and it is commonly popular with a large number of Mark 2 Escorts. <br />
This Series also overlaps with the Sligo Pallets Border Rally Championship a couple of times in the year. 
</p>
<p>These two series overlap in a few rounds such as Mayo, Cavan and Donegal.</p>
<p>This series always proves to be a popular with competitors with over 100 entries in each event</p>
<h1>Latest News</h1>
<a class="twitter-timeline" data-width="500" data-height="350" data-theme="dark" href="https://twitter.com/NRC_Stages?ref_src=twsrc%5Etfw">Tweets by NRC_Stages</a>
        </div>
  <!--Latest Championship Standings from the database-->
  <div class="home_box 2 col-sm-12 col-md-12"><h1>Latest Championship Standings</h1>
<?php require 'nationalseriesstand.php' ?>
</div>      
</div>
<div class="season">
<!--Navigation section within the page for the championship calendar details.-->
  <div class="calendar-wrap">
    <h1 class="calendar-title">Calendar</h1>
    <ul class="championship">
      <li class="championship-item event1" >
        <div class="p-championship-item" >
          <time class="p-championship-round" datetime="2019-05-01">Round 1</time>
          <span class="p-championship-event" data-car="1">Mayo</span>
          <div class="p-championship-block"></div>
        </div>
      </li>
      <li class="championship-item event1">
        <div class="p-championship-item" >
          <time class="p-championship-round" datetime="2019-06-01">Round 2</time>
          <span class="p-championship-event" data-car="2">Circuit of Kerry</span>
          <div class="p-championship-block"></div>
        </div>
      </li>
      <li class="championship-item event1" >
        <div class="p-championship-item" >
          <time class="p-championship-round" datetime="2019-07-01">Round 3</time>
          <span class="p-championship-event" data-car="3">Carlow</span>
          <div class="p-championship-block"></div>
        </div>
      </li>
      <li class="championship-item event1">
        <div class="p-championship-item" >
          <time class="p-championship-round" datetime="2019-08-01">Round 4</time>
          <span class="p-championship-event" data-car="4">Cavan</span>
          <div class="p-championship-block"></div>
        </div>
      </li>
      <li class="championship-item event1" >
        <div class="p-championship-item" >
          <time class="p-championship-round" datetime="2019-09-01">Round 5</time>
          <span class="p-championship-event" data-car="5">Tipperary</span>
          <div class="p-championship-block"></div>
        </div>
        </li>
           <li class="championship-item event1" >
        <div class="p-championship-item" >
          <time class="p-championship-round" datetime="2019-09-01">Round 6</time>
          <span class="p-championship-event" data-car="6">Galway Summer</span>
          <div class="p-championship-block"></div>
        </div>
        </li>
           <li class="championship-item event1" >
        <div class="p-championship-item" >
          <time class="p-championship-round" datetime="2019-09-01">Round 7</time>
          <span class="p-championship-event" data-car="7">Donegal Harvest</span>
          <div class="p-championship-block"></div>
        </div>
        </li>
    </ul>
    <!--The event championships which would mean that fans would be able to see the different details of the championship.
    This is interactive so that fans can see the details for only one of the rounds at a time
    This means that instead of the data loading onto the page the user has to click the information individually 
    to see the information load. -->
    <div class="championship-content">
      <!-- Round 1 Details -->
       <div class="p-championship-content" data-car="1">
        <div class="championship-content-card">
          <h3 class="championship-content-title event1">Round 1: Mayo</h3>
          <time class="championship-content-date" datetime="2020-02-02">Event Date: Saturday 15th February 2020</time>
          <p>The 2020 Season opens with the Mayo Stages this year. After leading the event for the entire duration Josh Moffet had to retire on the road section with a mechanical problem. <br />
          This handed the victory to Donagh Kelly. He had been at the heals of Josh all day and claimed the victory after he had retired. 
       <br />
        This is one of the rounds which overlaps with the Sligo Pallets Border Rally Championship
          </p>
          <div class="close" data-type-close></div>
        </div>
        <div class="championship-content-image">
        <!--Map for the location of the round-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d601695.1092062184!2d-9.982887896917676!3d53.907373729159126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48595d749ddbec0d%3A0x91b3fcc43f2cb67c!2sMayo%2C%20Co.%20Mayo%2C%20Ireland!5e0!3m2!1sen!2suk!4v1584996993603!5m2!1sen!2suk" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>   
      </div>
      <!-- Round 2 Details -->
       <div class="p-championship-content" data-car="2">
        <div class="championship-content-card">
          <h3 class="championship-content-title event2">Round 2: Circuit of Kerry</h3>
          <time class="championship-content-date" datetime="2020-03-07">Event date: 5th April 2020</time>
          <p> The second event on the calendar sees the series move to the Kingdom of Kerry for the Circuit of Kerry Stages Rally.
         <br />
           This event in the calendar includes some well known classic stages which used be a regular occurance on the calendar. 
       <br />
           Will Josh Moffett Be able to make an improvement on his results from the opening round and get off the line. 
        </p>
          <div class="close" data-type-close></div>
        </div>
       <div class="championship-content-image">
               <!--Map for the location of the round-->
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2441.8847375490486!2d-9.702865848545795!3d52.26363807966714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4845357841b0006b%3A0x52e0e90f50160b74!2sThe%20Rose%20Hotel!5e0!3m2!1sen!2suk!4v1584996788596!5m2!1sen!2suk" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
      </div>
      <!-- Round 3 Details -->
      <div class="p-championship-content" data-car="3">
        <div class="championship-content-card">
          <h3 class="championship-content-title event2">Round 3:Carlow</h3>
          <time class="championship-content-date" datetime="2020-04-11">Event date: 10th May</time>
          <p>Round three takes us to Carlow for 9 stages of three loops of three stages. <br />
              Carlow makes a retrun and it usually features a large number of mark two escorts. There is usually a trophy for the first Escort Home so this proves to be a popular event. 
          <br />
              Over the years it is often a driver at the helm of a Mark two who has won this event.<br />  
           
            </p>
          <div class="close" data-type-close></div>
        </div>
        <div class="championship-content-image">
                <!--Map for the location of the round-->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2409.9583195008245!2d-6.931273248525263!3d52.84113607977748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x485d5d5503ade109%3A0xa4e79ac13cda5552!2sSeven%20Oaks%20Hotel!5e0!3m2!1sen!2suk!4v1584997164489!5m2!1sen!2suk" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
      </div>
      <!-- Round 4 Details -->
       <div class="p-championship-content" data-car="4">
        <div class="championship-content-card">
          <h3 class="championship-content-title event1">Round 4: Cavan</h3>
          <time class="championship-content-date" datetime="2020-05-03">Event date: 24th May 2020</time>
          <p>Cavan forms the fourth round of the calendar this year. This is back in the Calendar for 2020 after a year out. This is the final round before a mid season break within the calendar<br />
          This round also sees the return of the additional competition with competitors from the Sligo Pallets Border Rally Championship.
              
         
        </p>
          <div class="close" data-type-close></div>
        </div>
                <!--Map for the location of the round-->
        <div class="championship-content-image">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2345.9128276750307!2d-7.324498348484001!3d53.98657128002055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x485dfdd53c275101%3A0x5d24d58c985cfa77!2sHotel%20Kilmore!5e0!3m2!1sen!2suk!4v1584997238761!5m2!1sen!2suk" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
      </div>
    <!-- Round 5 Details -->
      <div class="p-championship-content" data-car="5">
        <div class="championship-content-card">
          <h3 class="championship-content-title event1">Round 5: Tipperary Stonethrowers</h3>
          <time class="championship-content-date" datetime="2020-06-21">Event date: 9th August 2020</time>
          <p>The championship resumes in August with the stonethrowers event in Tipperary.<br />
            There are some challenging roads featured within this event. There are some very tight and technical sections and also some very fast sections. 
         <br />
            Over the years this round has claimed some of the countries best drivers.
          </p>
          <div class="close" data-type-close></div>
        </div>
                <!--Map for the location of the round-->
       <div class="championship-content-image">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.775230974294!2d-7.740331848542552!3d52.35636177968428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4843318fa9c6ffc7%3A0xe6fad7af2a54528d!2sClonmel%20Park%20Hotel!5e0!3m2!1sen!2suk!4v1584997288349!5m2!1sen!2suk" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
      </div>
      <!-- Round 6 Details -->
<div class="p-championship-content" data-car="6">
        <div class="championship-content-card">
          <h3 class="championship-content-title event1">Round 6: Galway Summer</h3>
          <time class="championship-content-date" datetime="2020-06-21">Event date: 30th August 2020</time>
          <p>The galway summer stages rally is the penualtimate championship of the season. <br />
            This is a traditional event as it is has a long history of being included within the series. This is the second annual event based in Galway. 
         <br />
            
          </p>
          <div class="close" data-type-close></div>
        </div>
   <div class="championship-content-image">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9544.224621374447!2d-9.068484658330936!3d53.27061347752558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x485b93955a2d5bff%3A0x32b1b440a495281!2sGalway%2C%20Ireland!5e0!3m2!1sen!2suk!4v1584997331849!5m2!1sen!2suk" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
      </div>
        <!-- Round 7 Details -->
    <div class="p-championship-content" data-car="7">
        <div class="championship-content-card">
          <h3 class="championship-content-title event1">Round 7: Donegal Harvest</h3>
          <time class="championship-content-date" datetime="2020-06-21">Event date: 10th October 2020</time>
          <p>The final event of the Calendar of 2020 is the Donegal Harvest stages rally which takes place in October. This will be the championship decider. This event comes after a break for the competitors with no rounds taking place in September<br />
            The Donegal Harvest Stages is always a popular draw with over 100 entries annually. 
          <br />
            
          </p>
          <div class="close" data-type-close></div>
        </div> 
                <!--Map for the location of the round-->
    <div class="championship-content-image">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9233.069049823598!2d-8.11479391164044!3d54.65211983282367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x485fa83317fd1c17%3A0xa00c7a9973174b0!2sDonegal%2C%20Ireland!5e0!3m2!1sen!2suk!4v1584997479878!5m2!1sen!2suk" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
      </div>    
        
        
    </div>
  </div>
</div>
    
    </div>
    
    
<!--Page Footer-->
<footer class="footer">
     <p>Motorsport Hub &copy; 2020</p>
		</footer> 	
<!--Twitter Widget-->
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!--My Script File-->
<script type = "text/javascript" language = "JavaScript" src = "js/script.js"></script>
    </body>
</html>