<?php
$date = mysqli_real_escape_string($mysql, $_POST['date']);
$title = mysqli_real_escape_string($mysql, $_POST['title']);
$text = mysqli_real_escape_string($mysql, $_POST['text']);
$post_id = mysqli_real_escape_string($mysql, $_POST['post_id']);

if(strlen($title) == 0){
	$title = $date;
}

perform_query2($mysql, "update journal set `title` = '{$title}', `text` = '{$text}' where `id` = {$post_id}");
header("location: home.php");

?>