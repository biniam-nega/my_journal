<?php
session_start();
include("includes/db_connect.inc");
include("includes/functions.inc");
if (isset($_POST['login_button'])){
	include("validate_login.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
        <title>My Journal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css"/>
        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/popper.min.jquery"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/index.css"/>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark sticky-top row mr-0 ml-0" style="background-color: #0E4456">
	        <a class="navbar-brand font-italic" href="index.php"><h3 id="title">MY JOURNAL</h3></a>
    	</nav>
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-1"></div>
	    		<div class="col-sm-8">
	    			<div class="card mt-2">
	    				<div class="card-header">
	    					Welcome to <span id="title">My Journal</span>
	    				</div>
	    				<form method="post" action="">
		    				<div class="card-body">
		    					<label for="username" id="text">Username</label>
		    					<input class="form-control" type="text" name="username" placeholder="Username..." id="username"/>
		    					<label for="username" id="text">Password</label>
		    					<input class="form-control" type="password" name="password" placeholder="Password..." id="username"/>
		    				</div>
		    				<div class="card-footer">
		    					<button type="submit" name="login_button" class="btn float-right btn-info"><span id="login_button">Login</span></button>
		    				</div>
		    			</form>
	    			</div>
	    		</div>
	    	</div>
    	</div>
    </body>
</html>