
<?php
//SQL query which will search for the driver name and the current standings sorted in descending order by points and only top ten
$champ_query = "SELECT Name, points FROM drivers, ni where drivers.DRIVER_ID = ni.Driver_ID ORDER BY points DESC LIMIT 10";

//the result of the query will be loaded into the results variable. If the query doesn't run the message will appear which will say that the query is not valid and did not return any results
$Champ_res = mysqli_query($conn, $champ_query) or die ("Invalid query"); 
    //loads the number of rows into num so that the table will be the correct length
$num = mysqli_num_rows($Champ_res);
    
//for loop which runs  the length of the num variable so that the results could be displayed within a table which would include all of the information.
echo "<center><table class= 'nat_series' border = '1' style =' color:black; font-size:12px;'><tr><th>Driver</th><th>Championship points</th></tr>";
for($i=0; $i<$num; $i++){
 $Row_Driver = mysqli_fetch_row($Champ_res);
 echo "<tr><td>". $Row_Driver[0]. "</td><td>". $Row_Driver[1]."</td></tr>";
}
echo "</table></center>";
//Closes the connection to the server and database
mysqli_close($conn);

?>