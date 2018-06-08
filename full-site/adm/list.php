<?php
require("includes/conn.php");
$sql = "select * from chika_img";
$result = mysql_query($sql) or die ("Нет соединения с базой данных: " . mysql_error());


$z=0;
				while ($row = mysql_fetch_assoc($result))
                {
//var_dump($row);

					$z++;
//echo $z."<br>";
                  if($endlz == "" || $endlz != $row['date'])
                  {$endlz = $row['date'];
                   /* echo " <div style=' background-image: url(\"../adm/images/".$row['date']."/".$row['filename'] . "\");' class=\"stroy_item ".$row['date']." \">";
                    echo "<div class=\"stroy_overlay\">";
                    echo "<a class='fancybox' rel=".$row['date']."   alt=\"\"  width=\"350\"  height=\"270\" href=\"../adm/images/".$row['date']."/".$row['filename']."\"><img src=\"../../img/icons/zoom.svg\" alt=\"zoom\" width=\"24px\"></a>";

echo "</div>";
echo "</div>";*/
echo "<img src=\"../adm/images/".$row['date']."/".$row['name'] . "\"  width=\"350\"  height=\"270\">";

                  }
  echo "<img src=\"../adm/images/".$row['date']."/".$row['name'] . "\"  width=\"350\"  height=\"270\">";         
echo $z;

} ?>
 
