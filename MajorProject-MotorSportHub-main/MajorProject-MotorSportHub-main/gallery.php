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
    <!--Bootstrap CSS CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Link to stylesheet -->
    <link rel = "stylesheet" href="css/style.css">
    <!--link to enable the use of icons within the page-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!--Scripting interpretor for jquery-->
<script
  src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <title>Gallery</title>
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
      <li><a href ="wrc.php">WRC</a></li>
    </ul>
</li>
    <li><a href = "gallery.php"class = "active">Gallery</a>
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
      
<!--Gallery Cards-->
<div class = "main">
  <section class="img-block cards-gal">
    <div class="container">
     <div class="heading">
        <h2>Select Your Event</h2>
        </div>
      <div class="row">
        <!--Ulster Rally Event Card-->
        <div class="col-md-6 col-lg-4">
          <div class ="card border-1 transform-on-hover text-center">
            <img src="images/img_Ulster/1.CraigBreen.jpg" class="card-img-top">
              <div class = "card-body">
              <h6>Ulster Rally 2019</h6>
              <a style="margin-top: 10px;" href = "ulster.php" class="btn btn-secondary">View Images</a>
              </div>
            </div>
          </div>
          <!--Loughgall Event Card-->
          <div class="col-md-6 col-lg-4">
            <div class ="card border-1 transform-on-hover text-center">
              <img src="images/img_loughgall/18.BrianBlack.jpg" class="card-img-top">
                <div class = "card-body">
                <h6>Loughgall Rally 2019</h6>
                <a style="margin-top: 10px;" href = "loughgall.php" class="btn btn-secondary">View Images</a>
                </div>
              </div>
            </div>
            <!--Monte Carlo Event Card-->
            <div class="col-md-6 col-lg-4">
              <div class ="card border-1 transform-on-hover text-center">
                <img src="images/img_montecarlo/elfynevans2.jpg" class="card-img-top">
                  <div class = "card-body">
                  <h6>Monte Carlo 2020</h6>
                  <a style="margin-top: 10px;" href = "montecarlo.php" class="btn btn-secondary">View Images</a>
                  </div>
                </div>
              </div>
        </div>

      <div class="row">
        <!--Bishopscourt Card-->
        <div class="col-md-6 col-lg-4">
          <div class ="card border-1 transform-on-hover text-center">
            <img src="images/img_bishopscourt/4.KieronGraffin.jpg" class="card-img-top">
              <div class = "card-body">
              <h6>Bishopscourt 2020</h6>
              <a style="margin-top: 10px;" href = "bishopscourt.php" class="btn btn-secondary">View Images</a>
              </div>
            </div>
          </div>
          <!--Mayo Event Card-->
          <div class="col-md-6 col-lg-4">
            <div class ="card border-1 transform-on-hover text-center">
              <img src="images/img_mayo/21.JasonBlack.jpg" class="card-img-top">
                <div class = "card-body">
                <h6>Mayo 2020</h6>
                <a style="margin-top: 10px;" href = "mayo.php" class="btn btn-secondary">View Images</a>
                </div>
              </div>
            </div>
            <!--Mexico Event Card-->
            <div class="col-md-6 col-lg-4">
              <div class ="card border-1 transform-on-hover text-center">
                <img src="images/img_mexico/GusGreensmith.jpg" class="card-img-top">
                  <div class = "card-body">
                  <h6>Mexico 2020</h6>
                  <a style="margin-top: 10px;" href = "mexico.php" class="btn btn-secondary">View Images</a>
                  </div>
                </div>
              </div>
        </div></section>
<!--YouTube Video Search-->
<!--Makes use of the YouTube API to dynamically load the videos dynamically on the page.-->
<h1 class = "text-center">Search for the action</h1>
<div class ="container">
 <form action="#">
    <p><input type ="text" id="vidsearch" placeholder="Search for the round" autocomplete="off" class ="form-control"></p>
    <p><input type="submit" value="Search" class="form-control btn_bg btn "></p>
 </form>  
</div>
  <div class ="container">
    <h1>The action</h1>
    <div id="search_results" class="row"></div>
    </div>

<!--Modal which will load when the video has been selected from the search results-->
<!--Bootstrap is used to style the modal and the search to help ensure that this will be responsive and also to help give this a professional appearance-->
<div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModallabel" >
    
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-body">
        <iframe id="iframeYoutube" class="iframe"  src="https://www.youtube.com/embed/e80BbX05D7Y" frameborder="0" allowfullscreen></iframe> 
        </div>
        <div class="modal-footer">
        <button type="button" class = "btn" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
    
</div>

</div>  
    <!--Footer of the page-->
    <footer class="footer">
     <p>Motorsport Hub &copy; 2020</p>
		</footer> 
     <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type = "text/javascript" language = "JavaScript" src = "js/script.js"></script>
<script>
    //YouTube API search to allow the user to dynamically load videos onto the page. 
    
$(function() {
  $("form").on("submit", function(e) {
     e.preventDefault();
     $("#search_results").html("");
     // ajax call for the youtube search api to allow the user to search for videos which will be loaded dynamically.
  $.get(
        "https://www.googleapis.com/youtube/v3/search",

        {
         
          part: 'snippet',
          //maximum number of results to return
          maxResults: 12,
          //loads the search into the query
          q: encodeURIComponent($("#vidsearch").val()).replace(/%20/g, "+"),
          type: "video",
          //api key to allow this to work within the search
          key: 'AIzaSyCsbZ8UYkYGKo7Q8_iLn86elFj-sIFdTzw',
         },
      function(data){
        //output variable which will be used to load the data 
          var output ='';
          // .each loop to run for the length of the results. will retrieve video id, image and title for the video to return the results
          $.each(data.items, function(i, item){  
          videoId =  item.id.videoId;
          image = item.snippet.thumbnails.medium.url;
          title = item.snippet.title;
          console.log(image);
          //creates the link to the video on the image which when clicked will open the video
          var linkimage ='<a href="#" onclick="changeVideo(\''+  videoId  +'\')"><img style="width:100%;" src=\"'+ image+'\"></a>';

             
             //Video output which will be returned when the video will be displayed once the search has been carried out. 
             
               output = ' <div class="col-lg-4 col-md-4 col-sm-12"><div class="card card_bg text-white  mb-3" style="display: flex"><div class="card-body"><h4 class="card-title">'+ title +'</h4>'+ linkimage +'</div></div></div> ';


          
          


            
             //Search results will be loaded to the page and appended to the search_results id element on the page and then the output is appended so that this can be displayed on the page. 
     $('#search_results').append(output);
        });
     }); 
  }); 
});
    
    //Display the modal for the video when the user has selected the desired item from the location. This will mean that the video will load so that they can watch this from the dynamically loaded results.
    
     $(document).ready(function(){
$("#eventModal").on("hidden.bs.modal",function(){
    $("#iframeYoutube").attr("src","#");
  })
     })


    //function which will allow the selected video to load on the modal and allow the fans to watch the full event video
  function changeVideo(vId){
  var iframe=document.getElementById("iframeYoutube");
  iframe.src="https://www.youtube.com/embed/"+vId;


        
        //display the modal when the user has selected the video and this will ensure that the video is diaplayed within the page. This means that the video will load over the front of the page. 
  $("#eventModal").modal("show");
}  
      
      
</script>
  </body>
</html>