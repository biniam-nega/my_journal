<?php
function perform_query($mysql_connection, $query, $return){
	$result = mysqli_query($mysql_connection, $query);
	if (!$result){
		die("<h1>Query failed" . mysqli_error($mysql_connection) . "</h1>");
	}
	$count = mysqli_num_rows($result);
	switch($return){
		case "result":
			return $result;
			break;
		case "count":
			return $count;
			break;
		default:
			return array($count, $result);
	}
}

function perform_query2($mysql_connection, $query){
	$result = mysqli_query($mysql_connection, $query);
	if(!$result){
		die("<h1>Query failed " . mysqli_error($mysql_connection) . "</h1>");
	}
	return true;
}

function get_user($mysql_connection, $user_id){
	$get_user_query = "select * from users where id={$user_id}";
	$get_user_result = mysqli_query($mysql_connection, $get_user_query);
	$get_user_row = mysqli_fetch_array($get_user_result);
	return $get_user_row;
}

function show_alert($message){
	echo "<script>alert('{$message}');</script>";
}

function display($error){
	// if error message is true
	if($error){
		return "block";
	}
	// if error message is false
	else{
		return "none";
	}
}

function get_admin($mysql_connection, $admin_id){
	$get_user_query = "select * from admin where id = {$admin_id}";
	$get_user_result = mysqli_query($mysql_connection, $get_user_query);
	$get_user_row = mysqli_fetch_array($get_user_result);
	return $get_user_row;
}

function check_duplicate_account($mysql_connection, $username, $password, $table){
	$check_duplicate_account_count = perform_query($mysql_connection, "select * from {$table} where username = '{$username}' and password = '{$password}'", "count");
	if($check_duplicate_account_count != 0){
		return true;
	}
	return false;
}

function file_folder($file_type){
	$file_path = "user_content/user_posts/";
	switch($file_type){
		case "pdf":
			$file_path .= "pdf/";
			break;
		case "mp4":
			$file_path .= "videos/";
			break;
		case "mp3":
			$file_path .= "audio/";
			break;
		case "ptx":
			$file_path .= "ppt/";
			break;
	}
	return $file_path;
}

function file_path($file_name, $file_type){
	$path = file_folder($file_type) . $file_name;
	return $path;
}

function validate_question($question, $choices){
	if(strlen($question) == 0){
		return false;
	}
	else{
		for($i = 0; $i < count($choices); $i++){
			if(strlen($choices[$i]) == 0){
				return false;
			}
		}
	}
	return true;
}

function generate_password($password){
	$asterisk_password = "";
	for($counter = 0; $counter < strlen($password); $counter++){
		$asterisk_password .= "*";
	}
	return $asterisk_password;
}

function full_subject_name($subject){
	switch ($subject) {
		case 'all':
			return 'All';
			break;
		case 'eng':
			return "English";
			break;
		case 'cse':
			return "Computer Science";
			break;
		case 'mat':
			return "Mathematics";
			break;
		case 'sta':
			return "Statistics";
			break;
		case 'phy':
			return "Physics";
			break;
		default:
			return "none";
			break;
	}
}
function get_profile_pic($file_name, $user_type){
	$file_path = "user_content/user_profile_pic/";
	if(strlen($file_name) == 0){
		$file_path .= "user_profile_pic_default.jpg";
	}
	else{
		if($user_type == "admin"){
			$file_path .= "teachers/{$file_name}";
		}
		else{
			$file_path .= "users/{$file_name}";
		}
	}
	return $file_path;
}

?>