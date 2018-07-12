
<?php session_start(); ?>


<?php 
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['start_fund_submit_btn'])){
		storeFund();
	}

	function storeFund(){
		
	}

?>
<html>
<head>
	<title>Bridges</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
		<div class = "container">
			<form class = "form-horizontal" action = "index.php">
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


			</form>
		</div>
		
	</article>

	<footer>
	</footer>

	</body>
</div>
</html>