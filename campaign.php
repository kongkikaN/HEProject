
<?php session_start(); ?>

<?php
	function calculateDonation(){
		$donated = 0;
		include('createConnectionToDB.php');
		$sql_query_donations = "SELECT * FROM `donation` WHERE  fund_id = " . $_GET["id"];
		$result = $conn->query($sql_query_donations);
		if ($result->num_rows > 0){
			while ($row = $result->fetch_assoc()){
				$donated = $donated + $row["amount"];
			}
		}

		return $donated;
	}

	function calculateDonationPercentage(){
		include('createConnectionToDB.php');
		$sql_query_donations = "SELECT * FROM `fund` WHERE  fund_id = " . $_GET["id"];
		$result = $conn->query($sql_query_donations);
		if ($result->num_rows > 0){
			while ($row = $result->fetch_assoc()){
				$goal = $row["goal"];
			}
		}

		$percentage = calculateDonation() / $goal * 100;
		return $percentage;
	}
?>


<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "e_business";

	$conn =new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$sql_query_get_articles = "SELECT * FROM `fund` WHERE fund_id = " . $_GET["id"];
	$result = $conn->query($sql_query_get_articles);
	if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
			$campaign_user = $row["username"];
			$campaign_title = $row["campaign_title"];
			$campaign_goal = $row["goal"];
			$campaign_description = $row["fund_description"];
			$campaign_image = $row["image_url"];
			$campaign_yt_url = $row["youtube_url"];
		}
	}
?>


<?php 
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['donate_submit_btn'])){
        donate();
    }

    function donate(){
    	if (isset($_SESSION["username"])){
    		$c_username = $_SESSION["username"];
    		$c_amount = $_POST["donation"];
    		$c_message = $_POST["message"];
    		$c_fund_id = $_GET["id"];

    		include('createConnectionToDB.php');

    		if ($c_amount && $c_message && $c_fund_id){
    			$query = "INSERT INTO `donation` (`username`, `fund_id`, `amount`, `message`, `donation_id`) VALUES ('$c_username', '$c_fund_id', '$c_amount', '$c_message', NULL);";

    			if ($conn->multi_query($query) === TRUE) {
				} else {
				    echo "Error: " . $query . "<br>" . $conn->error;
				}
    		}
    		
    	}
    	else {
    		echo '<script>alert("Please log in first!");</script>';
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
					<li><a href="others.php"> Others </a></li>

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
			<div class = "col-md-1"></div>
			<div class = "col-md-7">
				<span class = "row">
					<div class = "col-md-1"></div>
					<?php if ($campaign_yt_url != ''){
						echo '<iframe width="520" height="315"
					src="'.str_replace("watch?v=","embed/", $campaign_yt_url)  .'">
					</iframe>';
					}
					else {
						echo '<img src="'.$campaign_image.'" width="100%">';
					} ?>
					
					<div class = "col-md-11"><h2><?php echo $campaign_title; ?></h2></div>
				</span>
				<span class = "row">

					<p>
						<?php echo $campaign_description; ?>
					</p>
				</span>
			</div>
			<div class = "col-md-3" style = "box-shadow: 5px 7px #888888;">
				<h1><b> <?php echo calculateDonation(); ?> € </b></h1> <p> <b>out of <?php echo $campaign_goal;  ?></b></p>
				<div class="progress" style = "border-radius: 30px;">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" <?php echo 'style="width:'. calculateDonationPercentage() .'%; border-radius: 30px;"'; ?> >

				    <span class="sr-only">70% Complete</span>
				</div>
				</div>
				<div>
					<button style = "margin-left: 25%" type="button" class="btn  btn-warning btn-lg" data-toggle="modal" data-target="#donate_form">Donate Now</button>

					<div id = "donate_form" class = "modal fade" role = "dialog">
						<div class = "modal-dialog">
							<div class = "modal-content">
								<div class = "modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
			        				<h4 class="modal-title">Donate</h4>
								</div>
								<form method = "post">
									<div class = "modal-body">
									<!-- donate form -->
										<div class="form-group">
											<label for="donation">Your donation:</label>
											<input type="number" class="form-control register_input" id="donation" name = "donation">
										</div>
										<div class="form-group">
											<label for="message">Message:</label>
											<textarea rows = "5" placeholder="Your message to the fund raiser" class="form-control register_input" id="message" name = "message"></textarea>
										</div>
									<!-- end of register form -->
									</div>

									<div class = "modal-footer">
										<input value = "Submit" name = "donate_submit_btn" id = "donate_btn" type = "submit" class = "button btn btn-primary" text = "donate"> </input>
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class = "col-md-1"></div>
		</div>
		
	</article>

	<footer>
	</footer>

	</body>
</div>
</html>