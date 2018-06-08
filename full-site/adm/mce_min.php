<?php

session_start();
require("includes/conn.php");
$date = $_POST['date'];
echo $date;
chdir("images/$date");
$uploaddir  = "./min/";

// Для создания вложенной структуры необходимо указать параметр
// $recursive в mkdir() .
if(is_dir("min"))
{

}
else
{
if (!mkdir($uploaddir , 0777, true)) {
    die('Не удалось создать директории...');
}
}
foreach ($_POST as $index => $value) {
    $$index = $value;
}


/*
$qwe = count($_FILES["userFile"]["name"]);
echo $qwe;

echo "<pre>";
var_dump($_FILES);
echo "</pre>";
*/



for ($i=0; $i<count($_FILES["userFile"]["name"]); $i++) {
    $uploadFile = $uploaddir.basename($_FILES['userFile']['name'][$i]);
    if (copy($_FILES['userFile']['tmp_name'][$i], $uploadFile))
    {
	$namanama = $_FILES["userFile"]["name"][$i];
/*
	$id = 42;
	echo $namanama;
*/
    echo "<h3>Файл успешно загружен на сервер</h3>";
$sql = "UPDATE chika_img SET id_min='$namanama' WHERE  name='$namanama' ";
$result = mysql_query($sql) or die ("Невозможно вставить данные в базу: " . mysql_error());
 /*header("Location: index_min.php");
	    exit;*/
    }
    else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>";}
}
?>

