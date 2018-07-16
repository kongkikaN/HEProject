<?php 
	session_start();
?>


<?php

		if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['register_submit_btn']))
	    {
	        registerUser();
	    }


	    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['login_submit_btn']))
	    {
	        createConnection();
	    }

	    function registerUser(){
	    	$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "e_business";

			$conn =new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$r_user = $_POST["r_username"];
			$r_pass = $_POST["r_password"];
			$r_email = $_POST["r_email"];

			if($r_user && $r_pass && $r_email){
				$create_user_query = "insert into user (username, password, email) values ('$r_user','$r_pass','$r_email' );";
				if ($conn->multi_query($create_user_query) === TRUE) {
				} else {
				    echo "Error: " . $create_user_query . "<br>" . $conn->error;
				}
			}

	    	echo '<script>alert("User created successfully");</script>';
	    }



	    function createConnection()
	    {
	        $servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "e_business";

			// Create connection
			$conn =new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$user = $_POST["username_input"];
			$pass = $_POST["password_input"];


			if ($user && $pass){
				$sql_query = "select * from user where username = '$user'";
				$result = $conn->query($sql_query);
				while($row = $result->fetch_assoc()){
					$pass_in_db = $row["password"];
					if ($pass_in_db == $pass){
						if (session_status() == PHP_SESSION_NONE) {
						    session_start();
						}
						$_SESSION["email"] = $row["email"];
						$_SESSION["username"] = $user;
						$_SESSION["loggedIn"] = true;
						$log_in_page = "logout.php";
						$log_in_page_name = "Log Out";
					}
				}
			}
			if (!isset($_SESSION["username"])){
				echo '<script>alert("Failed to log in");</script>';
			}

			$conn->close();
	    }
	?>


<html>
<head>
	<title>Bridges</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="functions/functions.js"></script>
</head>

<div class = "container main_body">
	<body>
		<header>

			<div class = "col-md-2">
				<div><a href="index.php"> <img id = "logo" src="images/logo.png"></a> </div>

			</div>

			<div class = "col-md-5"> </div>

			<div class = "col-md-5">
				<ul id = "nav_bar">
					<li><a href="index.php"> Home </a></li>
					<li><a href="getstarted.php"> Get Started </a></li>
					<li><a href="#"> Others </a></li>

					<?php
					$log_in_page = "login.php";
					$log_in_page_name = "Log In";
						if (isset($_SESSION["username"])){
							$log_in_page = "logout.php";
							$log_in_page_name = "Log Out";
						}
					?>
					<li><a href = <?php echo $log_in_page ?> > <?php echo $log_in_page_name ?> </a> </li>
					<li><a href="about.php"> About </a></li>
				</ul>
			</div>
		</header>


	<article>

		<div class = " container login_container" style = "background-image: url('images/other/login_background.jpg'); width : 87%; height : 100%; background-repeat: no-repeat;">
			<div class = "col-md-7"></div>
			<div class = "login_form_div container col-md-5">
				<form action = "login.php" method = "post">
					<div class="form-group">
						<label for="userName">Name:</label>
						<input type="text" class="form-control login_input" id="userName" name = "username_input">
					</div>
					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" class="form-control login_input" id="password" name = "password_input">
					</div>
					<div id = "btn_area">
						<input value = "Log In" name = "login_submit_btn" id = "login_btn" type = "submit" class = "button btn btn-primary" text = "Log In"> </input>
						<button type="button" class="btn btn-info btn-primary" data-toggle="modal" data-target="#register_form">Register</button>
					</div>
				</form>
			</div>
		</div>

		<div id = "register_form" class = "modal fade" role = "dialog">
			<div class = "modal-dialog">
				<div class = "modal-content">
					<div class = "modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
        				<h4 class="modal-title">Register</h4>
					</div>
					<form method = "post">
						<div class = "modal-body">
						<!-- register form -->
						
							<div class="form-group">
								<label for="r_username">Name:</label>
								<input type="text" class="form-control register_input" id="r_username" name = "r_username">
							</div>
							<div class="form-group">
								<label for="r_password">Password:</label>
								<input type="password" class="form-control register_input" id="r_password" name = "r_password">
							</div>
							<div class = "form-group">
								<label for ="r_email">e-mail</label>
								<input type="email" class = "form-control register_input" id = "r_email" name="r_email">
							</div>
						
						<!-- end of register form -->
						</div>

						<div class = "modal-footer">
							<input value = "Register" name = "register_submit_btn" id = "register_btn" type = "submit" class = "button btn btn-primary" text = "register"> </input>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	</article>
	<footer>
	</footer>
	</body>
</div>

</html>
