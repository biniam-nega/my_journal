<?php
session_start();
if(!isset($_SESSION['user_id'])){
	header("location:index.php");
	exit;
}
$user_id = $_SESSION['user_id'];
include("includes/db_connect.inc");
include("includes/functions.inc");
?>