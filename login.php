<html>
<head>
	<title>Bridges</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<div class = "container login_body">
	<body>
		<header>

			<div class = "col-md-2">
				<div><a href="#"> <img id = "logo" src="images/logo.png"></a> </div>

			</div>

			<div class = "col-md-5"> </div>

			<div class = "col-md-5">
				<ul id = "nav_bar">
					<li><a href="index.php"> Home </a></li>
					<li><a href="#"> Get Started </a></li>
					<li><a href="#"> Others </a></li>
					<li><a href="login.php"> LogIn </a>
					<li><a href="#"> About </a></li>
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
					</div>
				</form>
			</div>
		</div>
	</article>

	<footer>
	</footer>

	</body>

	<?php
	    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['login_submit_btn']))
	    {
	        createConnection();



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
			echo "Connected successfully to database";

			$user = $_POST["username_input"];
			$pass = $_POST["password_input"];

			if ($user && $pass){
				$sql_query = "select * from user where username = '$user'";
				$result = $conn->query($sql_query);
				while($row = $result->fetch_assoc()){
					echo "logged in successfullyyyy";
				}
			}

			$conn->close();
	    }



	?>



</div>
</html>
