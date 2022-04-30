<?php
$username_error = false;
$password_error = false;
$not_found_error = false;

$username = mysqli_real_escape_string($mysql, $_POST['username']);
$password = mysqli_real_escape_string($mysql, $_POST['password']);

// Check the username
if(strlen($username) == 0){
	$username_error = true;
}

// Check the password
if(strlen($password) == 0){
	$password_error = true;
}

// If all is good
if(!$password_error && !$username_error){
	$get_user = perform_query($mysql, "select * from users where username = '{$username}' and password = '{$password}'", "all");
	if($get_user[0] == 0){
		$not_found_error = true;
	}
	else{
		$user = mysqli_fetch_array($get_user[1]);
		$_SESSION['user_id'] = $user['id'];
		header("location: home.php");
		exit;
	}
}

?>