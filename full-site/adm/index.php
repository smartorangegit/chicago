<?php
/*require("includes/conn.php");
$sql = "select DISTINCT mark  from news";
$result = mysql_query($sql) or die ("Нет соединения с базой данных: " . mysql_error());*/
?>
<form action="mce.php" method="post" enctype="multipart/form-data">
 <label>Название статьи</label>
<?/*
<select name="taskOption">
<? while ($row = mysql_fetch_assoc($result))
	                {?>
	                    <!--<input  type="text"name="lname" /><br />-->

  <option name="mark" value="<?=$row['mark'];?>"><?=$row['mark'];?></option><br>

<?}?>						
</select>
*/?>					
<br/><br/><br/>
    <label>Дата загрузки</label>
    <input type="date" name="date"><br/>
    <input name="userFile[]" type="file" multiple><br>
	<input name="name" type="text"><br>
    <input type="submit" value="Загрузить">
</form>
