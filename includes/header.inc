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
            <a class="navbar-brand col-4 font-italic" href="home.php"><h3 id="title">My Journal</h3></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-sm-1"></div>
            <div class="collapse navbar-collapse float-right" id="navBar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="create_new.php" style="color:white"> <img src="img/icons/appbar.addnotebook.png" height=30 width=30>Create New</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="logout.php" style="color:white"> <img src="img/icons/logout.png" height=20 width=20>Logout</a>
                    </li>
                    <li class="nav-item">
                      <form class="form-inline" method="post" name="login" action="">
		                    <input class="form-control mb-2 mr-2 mt-0" type="text" style="width:200px" placeholder="Search..." name="search_stud">
		                    <button class="btn btn-success" type="submit" name="search_button">Search</button>
		                </form>
                    </li>
                </ul>
            </div>
    	</nav>