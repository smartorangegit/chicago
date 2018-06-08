<?php
	 
	// ввод информации для базы данных
	 
	// имя хоста
	$host = "customsh.mysql.ukraine.com.ua";
	 
	// имя пользователя базы данных
	$username = "customsh_chicago";
	 
	// пароль базы данных
	$password = "gpqtah7e";
	 
	// название базы данных
	$database = "customsh_chicago";
	 
	$conn = mysql_connect($host, $username, $password)or die ("Error host or username or password");
	$db = mysql_select_db($database, $conn) or die("Error table");
	 mysql_query("SET NAMES 'utf8'");
	?>
