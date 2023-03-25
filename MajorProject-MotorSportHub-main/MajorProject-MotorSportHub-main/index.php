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
<?php require 'connect2.php' ?>

<!Doctype html>
<html lang = "eng">
<head>
<!--title for the website-->
<meta charset = "UTF-8">
<meta name = "description" content = "introduction booking form holiday packages and offers">
<meta name = "viewport" content = "width=device-width">
<link rel="icon" href="images/Logo%20Ideas-01.png">
<title>Motorsport Hub</title>
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
<body id = "home_background">
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
    <li><a href = "index.php" class = "active">Home</a></li>
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
    
<!--main content-->   
<div class = "container-fluid">
<div class = "main">
<?php if(isset($_SESSION['success'])) : ?>
<div class = "error success">
<h3>
<?php 
//display the message to let them know they are logged in
//
      echo $_SESSION['success'];
      unset($_SESSION['success']);
?>
</h3>
</div>
<?php endif ?>

    <div class="home_grid">
  <div class="home_box 1 col-sm-12 col-md-12">
     <!--Introduction-->
      <h1>Introduction</h1>
          <div class = "container" id="container">
              <!--Interactive Javascript book which will mean that the introduction to the company would be interactive and would mean that the information would only be displayed if the use wishes to see the details -->
    <div class = "book-content">
        <div class = "book">
            <div class = "front-page" id="cover"></div>
            <div class = "back-page" id="trsfrm">
            <h2>What We Do</h2>
            <p>Motorsport Hub Aim to promote Rallying and provide fans of the sport with the details of the major Championships within the sport.</p>
            <p>We aim to make it easier for fans to follow the sport by providing the key information includiing the championship points.</p>
            </div>
        </div>
         <div class = "book">
            <div class = "front-page">
                 <h2>Fans of the sport</h2>
                 <p>We are all fans of the sport as we have grown up attending events around the country.<br />
                Over many years we have attended many events as family members have taken part in events such as Loughgall</p>
                 
            </div>

            <div class = "back-page">
            <p>Upon consideration it was four of the major championships which were selected which included the WRC: World Rally Championship, Northern Ireland Rally Championship, Irish Tarmac Rally Championship and National Rally Championship</p>
            </div>
        </div>
                 <div class = "book">
            <div class = "front-page">
            <h2>Family Run</h2>
            <p>We are a family run business and really enjoy following this Motorsport. So we decided to place our interest into an online application to allow people to access information easily.</p>
            </div>

            <div class = "back-page">
            <h2>Latest Standings</h2>
            <p>We will work to provide the latest championship standings to the championships. There is a shortcut to find these on this page on the right hand side. </p>
            </div>
        </div>
                 <div class = "book">
            <div class = "front-page">
            <h2>Multiple Championships</h2>
                <p>The main championships which are shown within the page which would mean that the Irish Tarmac, NI, National</p>
            </div>

            <div class = "back-page" id = "cover-back">
            </div>
        </div>
    </div>
</div>


        </div>
  <!--Latest Championship points on the home page to allow access to these easily on the home page-->
  <div class="home_box 2 col-sm-12 col-md-12"><h1>Latest Championship Standings</h1>
      <!--WRC Standings-->

  <!--The latest standings can be located within the page which would mean that fans would be able to quickly locate the championship 
points for each of the featured championships and offers a shortcut to this page-->
  <div class = "standings_container">
   <div class="standings">
  <!--tabs area which when the user clicks on them will allow them to select which championship they would be displayed. -->
  <ul>
    <li rel="standing1">WRC</li>
    <li rel="standing2">NI</li>
    <li rel="standing3">National</li>
    <li rel="standing4">ITRC</li>
  </ul>
</div>

<div class="lateststandings">
<div id="standing1">
<h1>WRC: World Rally Championship</h1>
 <?php require 'wrcstand.php' ?>
</div>

<div id="standing2">
<h1>Northern ireland Rally Championship</h1>
<p>The latest standings for the championship can be found here</p>
<a href = "ni.php">Latest Standings</a>
</div>

<div id="standing3">
<h1>National Rally Series</h1>
<p>The latest standings for the championship can be found here</p>
<a href = "national.php">Latest Standings</a>
</div>
  <div id="standing4">
<h1>ITRC</h1>
<p>The latest standings for the championship can be found here</p>
<a href = "irishtarmac.php">Latest Standings</a>
</div>
</div>
      </div>
        </div>
 
  <div class="home_box 3 col-sm-12 col-md-12"><h1>Latest News</h1>
  <div id="accordion" class = "latestnews">
<!--World Rally Championship news-->
  <h3 style = "background-color: #D3D3D3">World Rally Championship</h3>
  <div>
    <h4>Rally Mexico 2020</h4>
    <p>Rally Mexico went ahead in the light of the outbreak of the cornavirus.<br />
  It was concluded a day early to allow teams to get home</p>
    <h5>Final Top 3:</h5>
    <ol>
      <li>Sebastian Ogier</li>
      <li>Ott Tanak</li>
      <li>Teemu Suninen</li>
      </ol>
     <!--Dynamically loading the twitter timeline for the championship-->
      <a class="twitter-timeline" data-width="500" data-height="350" data-theme="dark" href="https://twitter.com/OfficialWRC?ref_src=twsrc%5Etfw">Tweets by OfficialWRC</a> 
  </div>
<!--Irish Tarmac Rally Championship news-->
  <h3 style = "background-color: #D3D3D3">ITRC</h3>
  <div>
    <h4>West Cork Ready for the off</h4>
    <p>The next round of the championship takes place in West Cork.</p>
    <p>Additional Competition to the contestants as this welcomes the British Rally Championship</p>
    <p>Features some of the top competitors from both sides ofthe irish sea</p>
         <!--Dynamically loading the twitter timeline for the championship-->
    <a class="twitter-timeline" data-width="500" data-height="350" data-theme="dark" href="https://twitter.com/IrishTarmacTROA?ref_src=twsrc%5Etfw">Tweets by IrishTarmacTROA</a> 
  </div>
<!--Details on the Northern Ireland Championship-->
  <h3 style = "background-color: #D3D3D3">Northern Ireland Rally Series</h3>
  <div>
    <h4>Derek McGarrity Claims victory at Bishopscourt</h4>
    <p>Damp and miserable conditions made this a challenging event. <br />
    This left it a tough decision as to the correct tyre choice to be selected for the championship.<br />
    Derek McGarrity claimed the first victory of the 2020 Season. This promotes him to the top of the 2020 Standings.</p>

    <h4>2020 Calendar</h4>
    <ul>
      <li>RD1: 15 Feb: Pacenotes Rally Magazine Stages (Kirkistown): Victor: Stephen Wright.</li>
      <li>RD2: 7 Mar: Bishopcourt Stages Victor: Derek McGarrity</li>
      <li>RD3: Maiden City Stages (Shackleton)</li>
      <li>RD4: Tour of the Sperrins(Maghera)</li>
      <li>RD5: Tyrone Stages Rally (Cookstown)</li>
    </ul>
     <!--Dynamically loading the twitter timeline for the championship-->
    <a class="twitter-timeline" data-width="500" data-height="350" data-theme="dark" href="https://twitter.com/NIRally?ref_src=twsrc%5Etfw">Tweets by NIRally</a>
  </div>
</div>  
</div>
    
<div class="home_box 4 col-sm-12 col-md-12"><h1>Latest Event</h1>
<h2>Mayo Rally 2020</h2>
<!--auto gallery of the latest event.-->
<!--Slideshow to automatically show a selection of images within the page.-->
<div id="latest_event">
   <div>
  <img src="images/img_mayo/21.JasonBlack.jpg" id="latest_image">
   </div>
   <div>
 <img src="images/img_mayo/DamienToner.jpg" id="latest_image">
   </div>
   <div>
<img src ="images/img_mayo/1.DonaghKelly.jpg" id="latest_image"> 
   </div>
   <div>
<img src ="images/img_mayo/6.GaryKiernan.jpg" id="latest_image"> 
   </div>
</div>

    </div>       
        
</div>
    </div> </div>
  <!--Terms & Conditions Cookie-->
   <div class = "tc_cookie terms">
   <div class = "cookie_info">
      <button class ="T_C_button">Accept Cookies</button>
        <!--Description to allow the user to know that the details of the application-->
         <p>Motorsport Hub makes use of cookies on our site to track the activity of users on our site.<br />
         To accept the terms of using our website please click the button</p>
   </div>
   </div>
   
<!--Page Footer-->
<footer class="footer">
     <p>Motorsport Hub &copy; 2020</p>
    </footer> 
<!--Mailchimp Javascript file-->
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us4.list-manage.com","uuid":"94e754fdab5a089164c42cceb","lid":"ecc6d56615","uniqueMethods":true}) })</script>
<!--twitter widget script file-->
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<script>
    //load the tab styling to the element with the class name lateststandings
 $('.lateststandings').addClass('standing');
    //hide all the siblings of tab1
  $('#standing1').siblings().hide();
  
    //display only the tab which relates to the element clicked
  $('.standings li').click(function(){
    var showtab = $(this).attr('rel');
    
      //show the tab with an animation and with 200 milliseconds animation
    $('#'+showtab).show(200, function(){
      $('#'+showtab).siblings().hide(200);
    });   
   
  });
    

//Terms and conditions cookie
const t_c = document.querySelector('.terms');
//check if the terms and conditions is not stored then if it is load the popup
if (!localStorage.getItem('terms&conditions')) {
  t_c.classList.add('active');
}
//looks for the button within the cookie popup and listens for a click
t_c.querySelector('button').addEventListener('click', () => {
//then the local storage key will be added to the local storage so it knows 
//not to display this message when the page is reloaded.
  localStorage.setItem('terms&conditions', 'Accepted');
    //if the page locates the cookie it will not be loaded.
  t_c.classList.remove('active');
});
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type = "text/javascript" language = "JavaScript" src = "js/app.js"></script>
</body>
</html>