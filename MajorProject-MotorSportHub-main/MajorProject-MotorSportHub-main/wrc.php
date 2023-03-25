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
//current forecast for Monaco for the WRC
$monaco_coordinates = "43.7384,7.4246";
$monaco_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$monaco_coordinates;
$monaco_forecast = json_decode(file_get_contents($monaco_api_url));


//echo '<pre>';
//print_r($forecast);
//echo '</pre>';

//Current Conditions for monaco
$monaco_temperature_current = round($monaco_forecast->currently->temperature);
$monaco_summary_current = $monaco_forecast->currently->summary;
$monaco_windspeed_current = round($monaco_forecast->currently->windSpeed);
$monaco_humidity_current = $monaco_forecast->currently->humidity*100;

//current forecast for Sweden (Torsby) for the WRC
$sweden_coordinates = "60.1409,13.0102";
$sweden_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$sweden_coordinates;
$sweden_forecast = json_decode(file_get_contents($sweden_api_url));



//Current Conditions for Sweden(Torsby)
$sweden_temperature_current = round($sweden_forecast->currently->temperature);
$sweden_summary_current = $sweden_forecast->currently->summary;
$sweden_windspeed_current = round($sweden_forecast->currently->windSpeed);
$sweden_humidity_current = $sweden_forecast->currently->humidity*100;

//Current Forecast for Mexico (León)
$mexico_coordinates = "42.5987,5.5671";
$mexico_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$mexico_coordinates;
$mexico_forecast = json_decode(file_get_contents($mexico_api_url));

//Current Conditions for Mexico (León)
$mexico_temperature_current = round($mexico_forecast->currently->temperature);
$mexico_summary_current = $mexico_forecast->currently->summary;
$mexico_windspeed_current = round($mexico_forecast->currently->windSpeed);
$mexico_humidity_current = $mexico_forecast->currently->humidity*100;

//Current Forecast for Argentina (Villa Carlos Paz)
$argentina_coordinates = "31.4208,64.4992";
$argentina_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$argentina_coordinates;
$argentina_forecast = json_decode(file_get_contents($argentina_api_url));

//Current Conditions for Argentina (Villa Carlos Paz)
$argentina_temperature_current = round($argentina_forecast->currently->temperature);
$argentina_summary_current = $argentina_forecast->currently->summary;
$argentina_windspeed_current = round($argentina_forecast->currently->windSpeed);
$argentina_humidity_current = $argentina_forecast->currently->humidity*100;

//Current Forecast for Portugal (Matosinhos)
$portugal_coordinates = "41.1844,8.6963";
$portugal_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$portugal_coordinates;
$portugal_forecast = json_decode(file_get_contents($portugal_api_url));

//Current Conditions for Portugal (Matosinhos)
$portugal_temperature_current = round($portugal_forecast->currently->temperature);
$portugal_summary_current = $portugal_forecast->currently->summary;
$portugal_windspeed_current = round($portugal_forecast->currently->windSpeed);
$portugal_humidity_current = $portugal_forecast->currently->humidity*100;

//Current Forecast for Italy (Alghero)
$italy_coordinates = "40.5580,8.3193";
$italy_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$italy_coordinates;
$italy_forecast = json_decode(file_get_contents($italy_api_url));

//Current Conditions for Italy (Alghero)
$italy_temperature_current = round($italy_forecast->currently->temperature);
$italy_summary_current = $italy_forecast->currently->summary;
$italy_windspeed_current = round($italy_forecast->currently->windSpeed);
$italy_humidity_current = $italy_forecast->currently->humidity*100;

//Current Forecast for Kenya (Nairobi)
$kenya_coordinates = "1.2921,36.8219";
$kenya_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$kenya_coordinates;
$kenya_forecast = json_decode(file_get_contents($kenya_api_url));


//Current Conditions for Kenya (Nairobi)
$kenya_temperature_current = round($kenya_forecast->currently->temperature);
$kenya_summary_current = $kenya_forecast->currently->summary;
$kenya_windspeed_current = round($kenya_forecast->currently->windSpeed);
$kenya_humidity_current = $kenya_forecast->currently->humidity*100;

//Current Forecast for Finland (Jyväskylä)
$finland_coordinates = "62.2426,25.7473";
$finland_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$finland_coordinates;
$finland_forecast = json_decode(file_get_contents($finland_api_url));


//Current Conditions for Finland (Jyväskylä)
$finland_temperature_current = round($finland_forecast->currently->temperature);
$finland_summary_current = $finland_forecast->currently->summary;
$finland_windspeed_current = round($finland_forecast->currently->windSpeed);
$finland_humidity_current = $finland_forecast->currently->humidity*100;

//Current Forecast for New Zealand (Auckland)
$newzealand_coordinates = "36.8485,174.7633";
$newzealand_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$newzealand_coordinates;
$newzealand_forecast = json_decode(file_get_contents($newzealand_api_url));

//Current Conditions for New Zealand (Auckland)
$newzealand_temperature_current = round($newzealand_forecast->currently->temperature);
$newzealand_summary_current = $newzealand_forecast->currently->summary;
$newzealand_windspeed_current = round($newzealand_forecast->currently->windSpeed);
$newzealand_humidity_current = $newzealand_forecast->currently->humidity*100;

//Current Forecast for Turkey (Marmaris)
$turkey_coordinates = "36.8549,28.2709";
$turkey_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$turkey_coordinates;
$turkey_forecast = json_decode(file_get_contents($turkey_api_url));

//Current Conditions for Turkey (Marmaris)
$turkey_temperature_current = round($turkey_forecast->currently->temperature);
$turkey_summary_current = $turkey_forecast->currently->summary;
$turkey_windspeed_current = round($turkey_forecast->currently->windSpeed);
$turkey_humidity_current = $turkey_forecast->currently->humidity*100;

//Current Forecast for Germany (Bostalsee)
$germany_coordinates = "49.5659,7.0733";
$germany_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$germany_coordinates;
$germany_forecast = json_decode(file_get_contents($germany_api_url));

//Current Conditions for Germany (Bostalsee)
$germany_temperature_current = round($germany_forecast->currently->temperature);
$germany_summary_current = $germany_forecast->currently->summary;
$germany_windspeed_current = round($germany_forecast->currently->windSpeed);
$germany_humidity_current = $germany_forecast->currently->humidity*100;

//Current Forecast for GB (Llandudno)
$GB_coordinates = "53.3241,3.8276";
$GB_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$GB_coordinates;
$GB_forecast = json_decode(file_get_contents($GB_api_url));

//Current Conditions for GB (Llandudno)
$GB_temperature_current = round($GB_forecast->currently->temperature);
$GB_summary_current = $GB_forecast->currently->summary;
$GB_windspeed_current = round($GB_forecast->currently->windSpeed);
$GB_humidity_current = $GB_forecast->currently->humidity*100;

//Current Forecast for Japan (Nagoya)
$Japan_coordinates = "35.1815,136.9066";
$Japan_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$Japan_coordinates;
$Japan_forecast = json_decode(file_get_contents($Japan_api_url));

//Current Conditions for Japan (Nagoya)
$Japan_temperature_current = round($Japan_forecast->currently->temperature);
$Japan_summary_current = $Japan_forecast->currently->summary;
$Japan_windspeed_current = round($Japan_forecast->currently->windSpeed);
$Japan_humidity_current = $Japan_forecast->currently->humidity*100;

//function to convert the temperatrue into celcius. This will allow the degress to be easily understood as to the temperature which is being displayed on the page
function celcius($temp){
    return round(($temp-32)*.5556);
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
<title>WRC</title>
<!--CSS link for the styling-->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel = "stylesheet" type = "text/css" href = "css/style.css">
<link rel = "stylesheet" type = "text/css" href = "css/jquery-ui.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--Scripting-->
<!--jQuery intrepretor-->
<script
  src="https://code.jquery.com/jquery-3.4.1.js"></script>
<!--jQuery UI interpretor-->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--jQuery Countdown-->
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
      <li><a href ="national.php">National</a></li>
      <li><a href ="wrc.php"class = "active">WRC</a></li>
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
<div class = "wrc">
<img class ="WRC" src="images/wrc-white.svg"></div>
<!--Championship logo reference
WRC - World Rally Championship. (2020). WRC - World Rally Championship. [online] Available at: https://www.wrc.com/en/ [Accessed 12 Feb. 2020].
-->
    <div class="home_grid">
  <!--Championship Introduction-->
  <div class="home_box 1 col-sm-12 col-md-12">
<h2>Only the Best get here</h2>
<p>The World Rally Championship is the premier championship within the motorsport of Rallying.</p>
<p>This is a year long series running from January to November annually.</p>
<p>Consists of 13 of the toughest Rallies from around the world.</p>
<p>There are tarmac, snow and gravel events within the championship so only the most consistent will succeed.</p>
<h1>Latest News</h1>
   <a class="twitter-timeline" data-width="500" data-height="350" data-theme="dark" href="https://twitter.com/OfficialWRC?ref_src=twsrc%5Etfw">Tweets by OfficialWRC</a> 
 </div>
  <div class="home_box 2 col-sm-12 col-md-12"><h1>Latest Championship Standings</h1>
<?php require 'wrcstand.php' ?>
</div>        

        </div>
<h1>Rounds</h1>
<!--Round Detail-->
<!--Tabs for the details of the rounds in the calendar.-->
<!--Features national flag icons for each round. to make it easy to identify each round-->
<div class="rounds">
  <ul id="rounds-nav">
    <li><a href="#tab1"><img src="images/monaco_icon.svg"></a></li>
    <li><a href="#tab2"><img src="images/sweden_icon.svg"></a></li>
    <li><a href="#tab3"><img src="images/mexico_icon.svg"></a></li>
    <li><a href="#tab4"><img src="images/argentina_icon.svg"></a></li>
    <li><a href="#tab5"><img src="images/portugal_icon.svg"></a></li>
    <li><a href="#tab6"><img src="images/Italy_icon.svg"></a></li>
    <li><a href="#tab7"><img src="images/kenya_icon.svg"></a></li>
    <li><a href="#tab8"><img src="images/Finland_icon.svg"></a></li>
    <li><a href="#tab9"><img src="images/New_Zealand_Icon.svg"></a></li>
    <li><a href="#tab10"><img src="images/Turkey_Icon.svg"></a></li>
    <li><a href="#tab11"><img src="images/Germany_icon.svg"></a></li>
    <li><a href="#tab12"><img src="images/GB_Icon.svg"></a></li>
    <li><a href="#tab13"><img src="images/Japan_icon.svg"></a></li>
  </ul>
<!-- END of round detail -->
<!--The next section contains the wrc round details it contains more detail on the event such as dates
number of stages and even service base. 
This also features a Weather forecast for the current conditions and it also includes a map of the location.-->
  <div id="rounds-content">
<!--Details for Round 1 -->
    <div id="tab1" class="rounds-content">
      <h2>Rally Monte Carlo</h2>
      <div class=" forecast card p-4" style="margin: 0 auto; max-width: 320px;">
<h2>Current Forecast: Monaco</h2>
<h3 class="display-2"><?php echo celcius($monaco_temperature_current); ?>&deg;<abbr title="Celcius">C</abbr></h3>
<h3>Humidity: <?php echo $monaco_humidity_current; ?>%</h3>
<p class="lead"><?php echo $monaco_summary_current; ?></p>
<p class="lead">Wind Speed: <?php echo $monaco_windspeed_current; ?> <abbr title="miles per hour">MPH</abbr></p>
</div>  <br /> 
      <p>Traditionally the opening round of the Championship. The only Round in the calendar to be hosted by Monte Carlo Motorclub but takes place in France</p>
        
     <p>The 2020 Event took place from the 23rd January to the 26th January.</p>
        
    <table>
    <tr>
     <th>Categories</th>
     <th>Stages</th>
     <th>Service Park</th>
     <th>Total Distance</th>
        </tr>
    <tr>
     <td>WRC/WRC 2/WRC 3</td> 
     <td>16</td>
     <td>Gap & Monaco</td>
     <td>1,505.64km</td>
    </tr>
    </table>
     <p>2020 Event Winner: Thierry Neuville.</p>
        
    <h2>Location of Event</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5765.06279564394!2d7.42159307698241!3d43.74106066776951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cdc287dedfadcd%3A0xee15296ed95b686c!2sMonte%20Carlo%2C%20Monaco!5e0!3m2!1sen!2suk!4v1584015972970!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe><br/>
      
    </div>
    <!--Details for Round 2 -->
    <div id="tab2" class="rounds-content">
      <h2>Rally Sweden</h2>
      <div class=" forecast card p-4" style="margin: 0 auto; max-width: 320px;">
<h2>Current Forecast: Sweden(Torsby)</h2>
<h3 class="display-2"><?php echo celcius($sweden_temperature_current);?>&deg;<abbr title="Celcius">C</abbr></h3>
<h3>Humidity: <?php echo $sweden_humidity_current; ?>%</h3>
<p class="lead"><?php echo $sweden_summary_current; ?></p>
<p class="lead">Wind Speed: <?php echo $sweden_windspeed_current; ?> <abbr title="miles per hour">MPH</abbr></p>
</div>  <br /> 
      <p>This is the iconic Winter event on the calendar. This spans two countries of Sweden and Norway.</p>
      <p>Studded tyres are the order of the day as they provide grip on the snow and ice. This Rally is one of the fastest rounds within the calendar annually.</p>
    <p>Dates: <i>13th - 16th February</i></p>
        
   <table>
    <tr>
     <th>Categories</th>
     <th>Stages</th>
     <th>Service Park</th>
     <th>Total Distance</th>
        </tr>
    <tr>
     <td>WRC/WRC 2/WRC 3/Junior WRC</td> 
     <td>19</td>
     <td>Torsby</td>
     <td>1,296.87km</td>
    </tr>
    </table> 
     <h2>Service Park Location</h2>
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31787.52676284304!2d12.964786712551607!3d60.13569361828552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464285c72c134d87%3A0x4019078290e7f30!2sTorsby%2C%20Sweden!5e0!3m2!1sen!2suk!4v1584016375275!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <h2>The Stages</h2>
    <ul>
     <li>The Actions opens with a Super special Stage on Thursday at the Karlstad track and is repeated again on Saturday night.</li>
     <li>The Friday of the event is the cross-borer leg with stages taking place in both Norway and Sweden.</li>
     <li>Saturday has the some of the classic Swedish Stages including two passes over Vargasen which includes the famous Colins Crest Jump.</li>
    </ul>
    
    </div>
    <!--Details for Round 3 -->
    <div id="tab3" class="rounds-content">
      <h2>Rally Mexico</h2>
      <div class=" forecast card p-4" style="margin: 0 auto; max-width: 320px;">
<h2>Current Forecast: Mexico</h2>
<h3 class="display-2"><?php echo celcius($mexico_temperature_current);?>&deg;<abbr title="Celcius">C</abbr></h3>
<h3>Humidity: <?php echo $mexico_humidity_current; ?>%</h3>
<p class="lead"><?php echo $mexico_summary_current; ?></p>
<p class="lead">Wind Speed: <?php echo $mexico_windspeed_current; ?> <abbr title="miles per hour">MPH</abbr></p>
</div>  <br /> 
      <p>Mexico is the first of the seasons gravel events. The stages climb to the thin air and stunning surroundings of the Sierra de Lobos and Sierra de Guanajuato mounains.</p>
      <p>The thin air means the engines run at a lower power level than on other events.</p>
      <p>The event is based in the city of Leon.</p>
      <p>Dates: <i>12th - 15th March</i></p>
        
      <table>
    <tr>
     <th>Categories</th>
     <th>Stages</th>
     <th>Service Park</th>
     <th>Total Distance</th>
        </tr>
    <tr>
     <td>WRC/WRC 2/WRC 3</td> 
     <td>24</td>
     <td>Leon</td>
     <td>947.29km</td>
    </tr>
    </table> 
        
    <h2>Service Park Location</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119096.37851919304!2d-101.73605180447424!3d21.122059543739322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bbeffd6e6e721%3A0x606d95ec61a54327!2sLe%C3%B3n%2C%20Guanajuato%2C%20Mexico!5e0!3m2!1sen!2suk!4v1584017499923!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe><br/>
    <h2>Stages</h2>
    <ul>
      <li>Thursday night sees the start of the event and two runs through the streets of Guanajuato.</li>
      <li>Friday sees the return to familar stages through El Chocolate, Ortega and Las Minas. These stages are all run twice.</li>
      <li>The Saturday stages take in challenging roads which include Guanajuatito, Alfaro and Derramadero. This is the longest day of the event.</li>
      <li>The final power stage is the El Brinco Power Stage.</li>
    </ul>
    <h2>Challenge</h2>
    <ul>
      <li>This is the first event to feature gravel since spain during last season.</li>
      <li>Stress is put on the engines of the cars as temperatures rise to near 30 degrees.</li>
      <li>This rounds features the highest point in the season at 2737m.</li>
      <li>The high altitude puts strain on the engine losing 20% of the power.</li>
      <li>Lower power means mistakes are punished more severely as accelerating to return to top speed will take longer.</li>
      <li></li>
    </ul>

    <h2>Car Set up</h2>
    <p>Car Set up is important to ensure that drivers can get the best performance from their cars 
    <ul>
     <li>Gravel Suspension</li>
     <li>Both medium and hard compound tyres are used during the event. The hard compound is more likely going to be used in the afternoon.</li>
    </ul>

    <h2>New for 2020</h2>
    <p>The opening speed test through the town's streets will be driven twice</p>
    <p>Saturday sees the return of stages which have not been returned which have not been run in many years</p>
    </div>
    <!--Details for Round 4 -->
    <div id="tab4" class="rounds-content">
      <h2>Rally Argentina</h2>
      <div class=" forecast card p-4" style="margin: 0 auto; max-width: 320px;">
<h2>Current Forecast: Argentina</h2>
<h3 class="display-2"><?php echo celcius($argentina_temperature_current);?>&deg;<abbr title="Celcius">C</abbr></h3>
<h3>Humidity: <?php echo $argentina_humidity_current; ?>%</h3>
<p class="lead"><?php echo $argentina_summary_current; ?></p>
<p class="lead">Wind Speed: <?php echo $argentina_windspeed_current; ?> <abbr title="miles per hour">MPH</abbr></p>
</div>  <br /> 
      <p>The only trip to latin America includes rugged mountains and lakeland landscapes. The roads have a vast number of river crossings which add to the intensity of the application.</p>
      <p>Dates: <i>23rd - 26th April</i></p>

      <table>
    <tr>
     <th>Categories</th>
     <th>Stages</th>
     <th>Service Park</th>
     <th>Total Distance</th>
        </tr>
    <tr>
     <td>WRC//WRC 3</td> 
     <td>To be Confirmed</td>
     <td>Villa Carlos Paz</td>
     <td>To be confirmed</td>
    </tr>
    </table> 
    <h2>Service Location</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54481.15627726983!2d-64.53475614892317!3d-31.412134937195756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x942d6640d6777c71%3A0x75c24ab6cb121bed!2sVilla%20Carlos%20Paz%2C%20Cordoba%2C%20Argentina!5e0!3m2!1sen!2suk!4v1584017637658!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe><br/>
    <h2>The Stages</h2>
    <ul>
     <li>Rally Argentina is based in the lakeside resort of Villa Carlos Paz.</li>
     <li>Thursday night kicks off the action with a super special stage. </li>
     <li>The Friday of the event takes in fast, sandy tracks in Calamuchita Valley. The morning ends with a super special in Villa Carlos Paz.</li>
     <li>The Saturday of the event moves into the Punilla Valley.</li>
     <li>The final day of the event ends with the El Condor power stage</li>
        
    </ul>

    <h2>Challenge</h2>
    <ul>
     <li>There are many river crossings throughout the route which in wet weather become deep.</li>
     <li>The Event takes place in the early autumn for the sothern hemisphere this can increase the chance of fog and ice in the moutains</li>
     <li>The sandy rows become heavily rutted for the second pass this makes it easier for a car to pitch off the road if they move out of the line</li>
    </ul>

    <h2>Car Set up</h2>
    <p>Car Set up is important to ensure that drivers can get the best performance from their cars 
    <ul>
     <li>Gravel Suspension</li>
     <li>The height of the cars are raised to help drivers cope with the rutted roads.</li>
     <li>The most likely tyre choice would usually be the medium compound tyres</li>
    </ul>

    <h2>New for 2020</h2>
    <p>The amboy to Santa Monica test makes a return after a 2 year absense.</p>
    <p>This years sees the return of stages which have not bee used since 2015.</p>
    </div>
    <!--Details for Round 5 -->
    <div id="tab5" class="rounds-content">
      <h2>Rally Portugal</h2>
      <div class=" forecast card p-4" style="margin: 0 auto; max-width: 320px;">
<h2>Current Forecast: Portugal</h2>
<h3 class="display-2"><?php echo celcius($portugal_temperature_current);?>&deg;<abbr title="Celcius">C</abbr></h3>
<h3>Humidity: <?php echo $portugal_humidity_current; ?>%</h3>
<p class="lead"><?php echo $portugal_summary_current; ?></p>
<p class="lead">Wind Speed: <?php echo $portugal_windspeed_current; ?> <abbr title="miles per hour">MPH</abbr></p>
</div>  <br /> 
      <p>The series makes a return to Europe with Rally Portugal</p>
      <p>Dates: <i>21st - 24th May</i></p>
      <h2>Details</h2>
      <table>
    <tr>
      <th>Categories</th>
      <th>Stages</th>
      <th>Service Park</th>
      <th>Total Distance</th>
        </tr>
    <tr>
    <td>WRC/WRC 2/WRC 3</td> 
    <td>22</td>
    <td>Matosinhos</td>
    <td>1581.56km</td>
    </tr>
    </table>
    <h2>Rally Headquaters</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12010.998187494166!2d-8.693854812959627!3d41.18362956770291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd24689da50b488b%3A0x400ebbde49038d0!2sMatosinhos%2C%20Portugal!5e0!3m2!1sen!2suk!4v1584018443825!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe><br/>
    <h2>Stages</h2>
    <ul>
      <li>Cermonial Start held in Coimbra with three tightly clustered stages</li>
      <li>Saturday featues six Stages throught viero do Minho, Cabaeceiras de Basto and Amarante</li>
      <li>Friday features six stages which feature double passes of lousa, Gois and Arganil.</li>
      <li>Saturday ends with a street test in the heart of Porto and huge crowds which close out the day</li>
      <li>Sunday features six stages which include the famous fafe stage</li>
    </ul>
    <h2>Challenge</h2>
    <ul>
     <li>Sandy Roads help to ensure that grip is at a premium for the early starters during the first pass</li>
     <li>Rocks and deep ruts which are revealed by the second pass of the stages which mean that teams have to work on the cars set up in service</li>
     <li>Mechanical issues can cause major time loss as there is no service during some of the legs</li>
    </ul>

    <h2>Car Set up</h2>
    <p>Car Set up is important to ensure that drivers can get the best performance from their cars 
    <ul>
    <li>Gravel Suspension</li>
    <li>The most likely tyre choice would usually be the medium compound tyres</li>
    </ul>

    <h2>New for 2020</h2>
    <p>19 years since the famous test graced Portugals Round Mortagua makes a return.</p>
    <p>After a year away the Porto Stage makes a return.</p>
    <p>Felgueiras is another stage to make a return after a long absence from the event</p>
    </div>
    <!--Details for Round 6 -->
    <div id="tab6" class="rounds-content">
      <h2>Rally Italy</h2>
      <div class=" forecast card p-4" style="margin: 0 auto; max-width: 320px;">
<h2>Current Forecast: Italy</h2>
<h3 class="display-2"><?php echo celcius($italy_temperature_current);?>&deg;<abbr title="Celcius">C</abbr></h3>
<h3>Humidity: <?php echo $italy_humidity_current; ?>%</h3>
<p class="lead"><?php echo $italy_summary_current; ?></p>
<p class="lead">Wind Speed: <?php echo $italy_windspeed_current; ?> <abbr title="miles per hour">MPH</abbr></p>
</div>  <br /> 
      <p>Rally Italy sees the championship stay in Europe on the italian island of sardinia. </p>
     <p>Dates: <i>4th - 7th June</i></p>
     <table>
    <tr>
      <th>Categories</th>
      <th>Stages</th>
      <th>Service Park</th>
      <th>Total Distance</th>
        </tr>
    <tr>
    <td>WRC/WRC 2/WRC 3/JWRC</td> 
    <td>20</td>
    <td>Alghero</td>
    <td>1335.22km</td>
    </tr>
    </table>
     <h2>Rally Headquaters</h2>
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24247.156085984836!2d8.304410357602205!3d40.56600672945749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12dcf1ef75c50c05%3A0x2b9298429f4a8b50!2s07041%20Alghero%2C%20Province%20of%20Sassari%2C%20Italy!5e0!3m2!1sen!2suk!4v1584018910610!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe><br/>
    <h2>Stages</h2>
    <ul>
    <li>Rugged and Sun Baked gravel roads in the north of the Medditerranean island help to make this one of the seasons toughest challenges.</li>
    <li>The tyres are tested to the limit because of the rough roads and the intense heat of the event.</li>
    </ul>
    <h2>Challenge</h2>
    <ul>
     <li>The roads are fast even though they are narrow which are lined with bushes, trees and rocks</li>
     <li>A thin layer of slippery gravel on the surface is a disadvantage to early starterfgs in the opening run.</li>
     <li>High temperatures make it uncomfortable in the cars with higher than normal stress on the engines</li>
    </ul>

    <h2>Car Set up</h2>
    <p>Car Set up is important to ensure that drivers can get the best performance from their cars 
    <ul>
    <li>Gravel Suspension</li>
    <li>Cars raised in ride height for rutted roads duing the second pass of the stages</li>
    </ul>

    </div>
    <!--Details for Round 7 -->
    <div id="tab7" class="rounds-content">
      <h2>Safari Rally Kenya</h2>
      <div class=" forecast card p-4" style="margin: 0 auto; max-width: 320px;">
<h2>Current Forecast: Kenya</h2>
<h3 class="display-2"><?php echo celcius($kenya_temperature_current); ?>&deg;<abbr title="Celcius">C</abbr></h3>
<h3>Humidity: <?php echo $kenya_humidity_current; ?>%</h3>
<p class="lead"><?php echo $kenya_summary_current; ?></p>
<p class="lead">Wind Speed: <?php echo $kenya_windspeed_current; ?> <abbr title="miles per hour">MPH</abbr></p>
</div>  <br /> 
      <p>The Safari Rally makes a welcome return to the calendar in 2020</p>
      <p>Dates: <i>16th - 19th July </i></p>
    <h2>Rally Headquaters</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255282.35853684135!2d36.70731064333872!3d-1.302861796707131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2suk!4v1584018949720!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!--Details for Round 8 -->
    <div id="tab8" class="rounds-content">
      <h2>Rally Finland</h2>
      <div class=" forecast card p-4" style="margin: 0 auto; max-width: 320px;">
<h2>Current Forecast: Finland</h2>
<h3 class="display-2"><?php echo celcius($finland_temperature_current); ?>&deg;<abbr title="Celcius">C</abbr></h3>
<h3>Humidity: <?php echo $finland_humidity_current; ?>%</h3>
<p class="lead"><?php echo $finland_summary_current; ?></p>
<p class="lead">Wind Speed: <?php echo $finland_windspeed_current; ?> <abbr title="miles per hour">MPH</abbr></p>
</div>  <br /> 
      <p>After Kenya the series takes a break and returns with Rally Finland</p>
    <p>Dates: <i>6th-9th August 2020</i></p>
    <h2>Rally Headquaters</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d477406.0307443432!2d25.095475826314782!3d62.133917166496104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46857415d1a93119%3A0xba57697d6790a2d7!2zSnl2w6Rza3lsw6QsIEZpbmxhbmQ!5e0!3m2!1sen!2suk!4v1584019256511!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe><br/>
    <h2>Stages</h2>
    <ul>
    <li>The stages are smooth and have a blisteringly fast pace.</li>   
    <li>They go through forests and past lakes with a range of massive jumps.</li>
    <li>This is classed as the fastest event on the calendar with little margin for error.</li>
          
    </ul>
    </div>
    <!--Details for Round 9 -->
    <div id="tab9" class="rounds-content">
      <h2>Rally New Zealand</h2>
      <div class=" forecast card p-4" style="margin: 0 auto; max-width: 320px;">
<h2>Current Forecast: New Zealand</h2>
<h3 class="display-2"><?php echo celcius($newzealand_temperature_current); ?>&deg;<abbr title="Celcius">C</abbr></h3>
<h3>Humidity: <?php echo $newzealand_humidity_current; ?>%</h3>
<p class="lead"><?php echo $newzealand_summary_current; ?></p>
<p class="lead">Wind Speed: <?php echo $newzealand_windspeed_current; ?> <abbr title="miles per hour">MPH</abbr></p>
</div>  <br /> 
      <p>2020 sees the return of Rally New Zealand to the Calendar.</p>
    <p>Dates: <i>3rd - 6th September</i></p>
    <h2>Rally Headquaters</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d204298.033386918!2d174.7253858562125!3d-36.86266615792675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d47fb5a9ce6fb%3A0x500ef6143a29917!2sAuckland%2C%20New%20Zealand!5e0!3m2!1sen!2suk!4v1584019303982!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe><br/>
      
    </div>
    <!--Details for Round 10 -->
    <div id="tab10" class="rounds-content">
      <h2>Rally Turkey</h2>
      <div class=" forecast card p-4" style="margin: 0 auto; max-width: 320px;">
<h2>Current Forecast: Turkey)</h2>
<h3 class="display-2"><?php echo celcius($turkey_temperature_current); ?>&deg;<abbr title="Celcius">C</abbr></h3>
<h3>Humidity: <?php echo $turkey_humidity_current; ?>%</h3>
<p class="lead"><?php echo $turkey_summary_current; ?></p>
<p class="lead">Wind Speed: <?php echo $turkey_windspeed_current; ?> <abbr title="miles per hour">MPH</abbr></p>
</div>  <br /> 
      <p>Rally Turkey is one of the seasons tougher events.</p>
      <p>Dates: <i>24th - 27th September</i></p>
      <h2>Rally Headquaters</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25542.11522077239!2d28.243935901619007!3d36.84811810839236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bfbdbff1961523%3A0xdf8e730ed1eeb2be!2sMarmaris%2C%20Mu%C4%9Fla%2C%20Turkey!5e0!3m2!1sen!2suk!4v1584019450584!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <h2>Stages</h2>
    <ul>
    <li>Searing heat and rocky gravel roads in the south west of Turkey means that there is high demand on man and machine.</li>
    <li>Strategy and avoiding problems is as important as the speed that the drivers have.</li>

    </ul>
    </div>
    <!--Details for Round 11 -->
    <div id="tab11" class="rounds-content">
      <h2>Rally Germany</h2>
      <div class=" forecast card p-4" style="margin: 0 auto; max-width: 320px;">
<h2>Current Forecast: Germany</h2>
<h3 class="display-2"><?php echo celcius($germany_temperature_current); ?>&deg<abbr title="Celcius">C</abbr></h3>
<h3>Humidity: <?php echo $germany_humidity_current; ?>%</h3>
<p class="lead"><?php echo $germany_summary_current; ?></p>
<p class="lead">Wind Speed: <?php echo $germany_windspeed_current; ?> <abbr title="miles per hour">MPH</abbr></p>
</div>  <br /> 
      <p>Germanay offer some of the toughest roads through the season.</p>
    <p>Dates: <i>15th - 18th October</i></p>
    <h2>Rally Headquaters</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10350.923988307874!2d7.064018390946105!3d49.56509863694823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479593fb73b5c8d1%3A0xcb7305e889958a88!2sBostalsee!5e0!3m2!1sen!2suk!4v1584019656295!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe><br/>
    <h2>The Stages</h2>
    <ul>
    <li>The stages on Rally Germany provide a mix of tarmac features which include bumpy vineyard tracks, multi-surface military roads and fast country lanes.</li> <li>This makes this round one of the toughest on the calendar.</li>
    <li>This can be made even more challenging if the weather conditions change with the roads becoming damp.</li>
    </ul>
    </div>
    <!--Details for Round 12 -->
    <div id="tab12" class="rounds-content">
      <h2>Wales Rally GB</h2>
      <div class=" forecast card p-4" style="margin: 0 auto; max-width: 320px;">
<h2>Current Forecast: Wales</h2>
<h3 class="display-2"><?php echo celcius($GB_temperature_current); ?>&deg;<abbr title="Celcius">C</abbr></h3>
<h3>Humidity: <?php echo $GB_humidity_current; ?>%</h3>
<p class="lead"><?php echo $GB_summary_current; ?></p>
<p class="lead">Wind Speed: <?php echo $GB_windspeed_current; ?> <abbr title="miles per hour">MPH</abbr></p>
</div>  <br /> 
      <p>The British round on the championship traditionally takes in the welsh forests.</p>
    <p>Dates: <i>29th October - 1st November</i></p>\
    <h2>Rally Headquaters</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19066.659431636363!2d-3.8414859678216557!3d53.319400954076535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4864e1e2afa75737%3A0x6c919e5e368577e0!2sLlandudno!5e0!3m2!1sen!2suk!4v1584019695670!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe><br/>
    <h2>Stages</h2>
    <ul>
    <li>Remote Forests hold fast gravel roads.</li> 
    <li>The weather often throws a curve ball as heavy rain and fog is the more likely conditions during the event.</li>  
    </ul>
    </div>
    <!--Details for Round 13 -->
    <div id="tab13" class="rounds-content">
      <h2>Rally Japan</h2>
      <div class=" forecast card p-4" style="margin: 0 auto; max-width: 320px;">
<h2>Current Forecast: Japan</h2>
<h3 class="display-2"><?php echo celcius($Japan_temperature_current); ?>&deg;<abbr title="Celcius">C</abbr></h3>
<h3>Humidity: <?php echo $Japan_humidity_current; ?>%</h3>
<p class="lead"><?php echo $Japan_summary_current; ?></p>
<p class="lead">Wind Speed: <?php echo $Japan_windspeed_current; ?> <abbr title="miles per hour">MPH</abbr></p>
</div>  <br /> 
      <p>This year the season closes at Rally Japan</p>
    <p>Dates: <i>19th - 22nd November</i></p>
    <h2>Rally Headquaters</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d208791.88627003986!2d136.78621882424594!3d35.14731168414317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6003709e107b2365%3A0x2a9622d4e8ceb352!2sNagoya%2C%20Aichi%2C%20Japan!5e0!3m2!1sen!2suk!4v1584019802219!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe><br/>
<h2>The Stages</h2>
    <ul>
    <li>Ten years since it was last in the series Rally Japan returns as the climax of the 2020 Season</li>
    <li>This means that the victor of both the drivers and the manufacturers world titles could be decided in Japan.</li>
    <li>This years event is brand new and is based on Japans main island.</li>
    </ul>
    </div>
  </div> <!-- END tabs-content -->
</div>
    <!--End Main Content-->
    </div>
<!--Page Footer-->
<footer class="footer">
     <p>Motorsport Hub &copy; 2020</p>
<p>National Flag Icons made by <a href="https://www.flaticon.com/authors/freepik">Freepik</a>from<a href="https://www.flaticon.com/">Flat Icon</a></p>
		</footer> 	
  <!--twitter widget script file-->
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <!--Bootstrap JS Files-->
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!--My Script File-->
<script type = "text/javascript" language = "JavaScript" src = "js/script.js"></script>
<?php
?>

    <!--References for round flag icons
Flaticon. (2020). Argentina free vector icons designed by Freepik. [online] Available at: https://www.flaticon.com/free-icon/argentina_555615?term=Argentina&page=1&position=4 [Accessed 6 Feb. 2020].

Flaticon. (2020). Finland free vector icons designed by Freepik. [online] Available at: https://www.flaticon.com/free-icon/finland_555627?term=Finland&page=1&position=2 [Accessed 6 Feb. 2020].

Flaticon. (2020). Flaticon. [online] Available at: https://www.flaticon.com/search?word=monaco%20flag [Accessed 6 Feb. 2020].

Flaticon. (2020). Germany free vector icons designed by Freepik. [online] Available at: https://www.flaticon.com/free-icon/germany_555613?term=Germany&page=1&position=2 [Accessed 6 Feb. 2020].

Flaticon. (2020). Italy free vector icons designed by Freepik. [online] Available at: https://www.flaticon.com/free-icon/italy_555668?term=Italy&page=1&position=1 [Accessed 6 Feb. 2020].

Flaticon. (2020). Japan free vector icons designed by Freepik. [online] Available at: https://www.flaticon.com/free-icon/japan_555646?term=Japan&page=1&position=1 [Accessed 6 Feb. 2020].

Flaticon. (2020). Kenya free vector icons designed by Freepik. [online] Available at: https://www.flaticon.com/free-icon/kenya_206785?term=Kenya&page=1&position=1 [Accessed 6 Feb. 2020].

Flaticon. (2020). Mexico free vector icons designed by Freepik. [online] Available at: https://www.flaticon.com/free-icon/mexico_206600?term=mexico&page=1&position=2 [Accessed 6 Feb. 2020].

Flaticon. (2020). Monaco free vector icons designed by Freepik. [online] Available at: https://www.flaticon.com/free-icon/monaco_555636 [Accessed 6 Feb. 2020].

Flaticon. (2020). New zealand free vector icons designed by Freepik. [online] Available at: https://www.flaticon.com/free-icon/new-zealand_206731?term=New%20Zealand&page=1&position=1 [Accessed 6 Feb. 2020].

Flaticon. (2020). Portugal free vector icons designed by Freepik. [online] Available at: https://www.flaticon.com/free-icon/portugal_206628?term=Portugal&page=1&position=2 [Accessed 6 Feb. 2020].

Flaticon. (2020). Sweden free vector icons designed by Freepik. [online] Available at: https://www.flaticon.com/free-icon/sweden_555606?term=sweden&page=1&position=2 [Accessed 6 Feb. 2020].

Flaticon. (2020). Turkey free vector icons designed by Freepik. [online] Available at: https://www.flaticon.com/free-icon/turkey_555560?term=Turkey&page=1&position=1 [Accessed 6 Feb. 2020].

Flaticon. (2020). United kingdom free vector icons designed by Freepik. [online] Available at: https://www.flaticon.com/free-icon/united-kingdom_555417?term=Great%20Britain&page=1&position=2 [Accessed 6 Feb. 2020].
-->
    </body>
</html>