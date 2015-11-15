<?php
$hostname = "br-cdbr-azure-south-a.cloudapp.net";
$username = "ba68174dc5f0d8";
$password = "56b74823";
$database_name = "db_webapp";

$conn = msql_connect($hostname, $username, $password)
		or die ("Error menghubungkan ke host database");
$db = mysql_select_db($database_name);
	or die ("Error menghubungkan ke database");
?>