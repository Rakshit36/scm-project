<?php
$conn = mysqli_connect('localhost','root','')
    or die('Could not connect: ' + mysqli_error($conn));

//locates the database within the server
mysqli_select_db($conn, 'm-sport');
?>