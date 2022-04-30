<?php
$date = mysqli_real_escape_string($mysql, $_POST['date']);
$title = mysqli_real_escape_string($mysql, $_POST['title']);
$text = mysqli_real_escape_string($mysql, $_POST['text']);

if(strlen($title) == 0){
	$title = $date;
}

perform_query2($mysql, "insert into journal(poster_id, title, `text`, date) values({$user_id}, '{$title}', '{$text}', '{$date}')");
header("location: home.php");

?>