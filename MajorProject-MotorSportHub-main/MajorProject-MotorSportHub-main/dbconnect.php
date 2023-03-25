<?php
//connection to check for a successful connection to the database to ensure that the images could be displayed on the page.
$conn = mysqli_connect('localhost','root','')
or die('Could not connect: ' + mysqli_error($conn));

//locates the database within the server
mysqli_select_db($conn, 'rally image');
?>