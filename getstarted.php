
<?php session_start(); ?>


<?php 
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['start_fund_submit_btn'])){
		storeFund();
	}

	function storeFund(){

		//input from database
		if (isset($_SESSION["username"])){
			$username = $_SESSION["username"];
			$email	  = $_SESSION["email"];

			$in_goal = $_POST["campaign_goal"];
			$in_title = $_POST["campaign_title"];
			$in_zip_code = $_POST["zip_code"];

			if (isset($in_goal) && isset($in_title) && isset($_POST["moneyFor"]) && isset($in_zip_code) && isset($_POST["category"])){

				$in_moneyFor = $_POST["moneyFor"];
				$in_category = $_POST["category"];

				$servername = "localhost";
				$db_username = "root";
				$db_password = "";
				$db_name = "e_business";

				$conn = new mysqli($servername, $db_username, $db_password, $db_name);

				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				echo "Connected successfully to database";

				$create_fund_query = "insert into fund (username, email, goal, campaign_title, campaign_for, zip_code, category) values ('$username','$email','$in_goal', '$in_title','$in_moneyFor','$in_zip_code','$in_category' );";
				if ($conn->multi_query($create_fund_query) === TRUE) {
					header('Location: '. "createFund.php");
				} else {
				    echo "Error: " . $create_user_query . "<br>" . $conn->error;
				}




			}
			else {
				echo '<script>alert("Something Went Wrong!");</script>';
			}

			
		}
		else {
			echo '<script>alert("Please sign in first");</script>';
		}
		

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

	<article">
		<div class = "container" >
			<form class = "form-horizontal" method = "post" >
				<div style = "background-color: #fff; border-radius: 30px;">
					<div class = "form-group container" >
						<label class = "control-label col-sm-2 input-lg" for = "campaign_goal"></label>
						<div class = "col-sm-4">
							<input type="text" class="form-control input-lg" id="campaign_goal" placeholder="Your Goal" name="campaign_goal" style = "font-size: 40px; color : #5D8000; font-weight: bold; background-color: #E8EDDB;">
						</div>
						<div class = "col-sm-4" style = "background-color: #fff;">
							<span class = "marySays">
							<div style = "display: inline-block;" >
								<img src="images\other\person.jpg" alt="Marisa, a crowd funding expert" width="35"> 
								<span style = "font-size: 16px;">Mary, a <b> crowd funding expert </b>, says : </span>
							</div>
							<p style = "font-size: 16px; width: 100%; border-top: double; line-height: 1.6;">Most campaigns have a goal of 1000€! You can edit your goal later...</p>
							</span>
						</div>
						<div class = "col-sm-2"></div>
					</div>
					<div class = "form-group container">
						<label class = "control-label col-sm-2 input-lg" for = "campaign_title"></label>
						<div class = "col-sm-4">
							<input type="text" class="form-control input-lg" id="campaign_title" placeholder="Campaign Title" name="campaign_title">
						</div>
						<div class = "col-sm-6"></div>
					</div>
					<div class = "form-group container">
						<label class = "control-label col-sm-2 input-lg" for = "moneyFor"></label>
						<div class = "col-sm-4">
							<select class = "form-control input-lg" id = "moneyFor" name = "moneyFor">
								<option value="" disabled selected>Select your option</option>
								<option value="myself">Myself</option>
								<option value="someone_else">Someone else</option>
								<option value="charity_or_non_profit">Charity or non-profit</option>
							</select>
						</div>
						<div class = "col-sm-6"></div>
					</div>
					<div class = "form-group container">
						<label class = "control-label col-sm-2 input-lg" for = "zip_code"></label>
						<div class = "col-sm-4">
							<input type="text" class="form-control input-lg" id="zip_code" placeholder="Your ZIP Code" name="zip_code">
						</div>
						<div class = "col-sm-6"></div>
					</div>
					<div class = "form-group container">
						<label class = "control-label col-sm-2 input-lg" for = "category"></label>
						<div class = "col-sm-4">
							<select class = "form-control input-lg" id = "category" name = "category">
								<option value="" disabled selected>Select Category</option>
								<option value="education">Education and Learning</option>
								<option value="other">Other</option>
								<option value="non_profit">Charity or non-profit</option>
								<option value="accident">Accidents & Emergencies</option>
								<option value="art">Creative art, movies and music</option>
							</select>
						</div>
						<div class = "col-sm-6"></div>
					</div>
					<div class = "form-group container">
						<div class = "col-sm-2 control-label input-lg"></div>
						<div class = "col-sm-4">
							<input type = "radio" value = "test">
							I agree to the terms and conditions
						</div>
						<div class = "col-sm-6"></div>
					</div>

					<div class = "container">
						<div class = "col-sm-2 control-label input-lg"></div>
						<div class = "col-sm-4 input-lg">
							<input value = "Start Fund" name = "start_fund_submit_btn" id = "start_fund_btn" type = "submit" class = "input-lg button btn btn-primary" text = "Start Fund"> </input>
						</div>
						<div class="col-sm-6"></div>
					</div>	
				</div>

			</form>
		</div>


		
	</article>

	<footer>
	</footer>

	</body>
</div>
</html>