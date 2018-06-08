<?php  
include('db.php'); 

$check = mysql_query("SELECT * FROM kvartity" ,$db);
while ($myrow = mysql_fetch_array($check))
{
 print_r($myrow); echo "<br>";
}
