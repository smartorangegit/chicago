<?php
	 
	// ���� ���������� ��� ���� ������
	 
	// ��� �����
	$host = "customsh.mysql.ukraine.com.ua";
	 
	// ��� ������������ ���� ������
	$username = "customsh_chicago";
	 
	// ������ ���� ������
	$password = "gpqtah7e";
	 
	// �������� ���� ������
	$database = "customsh_chicago";
	 
	$conn = mysql_connect($host, $username, $password)or die ("Error host or username or password");
	$db = mysql_select_db($database, $conn) or die("Error table");
	 mysql_query("SET NAMES 'utf8'");
	?>
