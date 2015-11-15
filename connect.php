<?php
$hostname = "br-cdbr-azure-south-a.cloudapp.net";
$username = "b9d076c59e4511";
$password = "9d859a02";
$database_name = "RachmaAyudyawati";

$conn = msql_connect($hostname, $username, $password)
		or die ("Error menghubungkan ke host database");
$db = mysql_select_db($database_name);
	or die ("Error menghubungkan ke database");
?>