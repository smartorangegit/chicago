<?php

session_start();
require("includes/conn.php");
$date = $_POST['date'];
//$lname = $_POST['taskOption'];
$namanama = $_POST['name'];
echo $date.' - ';
chdir("images");
$uploaddir  = "./$date/";

if(is_dir("$date"))
{

}
else
{
if (!mkdir($uploaddir , 0777, true)) {
    die('z1');
}
}

// Для создания вложенной структуры необходимо указать параметр
// $recursive в mkdir() .




foreach ($_POST as $index => $value) {
    $$index = $value;
}

$qwe = count($_FILES["userFile"]["name"]);
//echo $qwe;
/*
echo "<pre>";
var_dump($_FILES);
echo "</pre>";

*/


for ($i=0; $i<count($_FILES["userFile"]["name"]); $i++) {
    $uploadFile = $uploaddir.basename($_FILES['userFile']['name'][$i]);
    if (copy($_FILES['userFile']['tmp_name'][$i], $uploadFile))
    {
	$namana = $_FILES["userFile"]["name"][$i];
	
	
	echo $namanama;
    echo "<h3>Файл успешно загружен на сервер</h3>";
  $sql = "insert into chika_img (name, date) values ('$namana ','$date')";
	    $result = mysql_query($sql) or die ("z2: " . mysql_error());
    }
    else { echo "<h3>z3</h3>";}
}
?>

