<?php
//connection information for the database for the user. this will allow the registration and login to be achieved successfully
$con = mysqli_connect('localhost','root','')
    or die('Could not connect: ' + mysqli_error($conn));
 mysqli_select_db ($con, 'registration') or die ('db will not open');
?>