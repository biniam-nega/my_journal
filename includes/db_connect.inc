<?php
$mysql = mysqli_connect("localhost", "root", "biniamincontrol12");
if (!$mysql){
	die("<h1>mysql connection failed!</h1>");
}
$connect = mysqli_select_db($mysql, "my_journal");
if (!$connect){
	die("<h1>Database connection failed</h1>");
}
?>