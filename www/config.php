<?php
$dbhost = "localhost"; 
$dbusername = "root"; 
$dbpass = "root"; 
$dbname = "hotel";

$dbconnect = mysql_connect ($dbhost, $dbusername, $dbpass); 
if (!$dbconnect) {
	echo ("Не могу подключиться к серверу базы данных!"); }

if(@mysql_select_db($dbname)) { 
	echo ""; }
	else die ("Не могу подключиться к базе данных $dbname!");
?>