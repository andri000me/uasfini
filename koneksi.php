<?php
$host = "localhost";
$user = "root";
$pass = "root";
$dbnm = "dbfini";


$conn = mysql_connect ($host, $user, $pass);
if ($conn) {
	$buka = mysql_select_db ($dbnm);
	if (!$buka){
		die("Database connected");
		}
	}else{
		die ("database disconnected");
		}
?>
