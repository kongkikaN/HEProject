<?php //current file ?>
<?php session_start(); ?>

<?php
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit_fund_btn']))
	    {

	        createFund();
	    }

	    function createFund(){
	    	$servername = "localhost";
			$db_username = "root";
			$db_password = "";
			$db_name = "e_business";

			$in_image_url = $_SESSION["db_image_url"];
			$in_yt_url = $_SESSION["yt_url"];
			$in_username = $_SESSION["username"];
			$in_email = $_SESSION["email"];
			$in_goal = $_SESSION["db_goal"];
			$in_title = $_SESSION["db_title"];
			$in_moneyFor = $_SESSION["db_moneyFor"];
			$in_zip_code = $_SESSION["db_zip_code"];
			$in_category = $_SESSION["db_category"];

			$in_description = $_POST["fund_description"];

			if (isset($in_description) && isset($in_image_url)){
				$conn = new mysqli($servername, $db_username, $db_password, $db_name);

				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 
				echo "Connected successfully to database";

				
				$create_fund_query = "INSERT INTO `fund` (`username`, `email`, `goal`, `campaign_title`, `campaign_for`, `zip_code`, `category`, `fund_id`, `image_url`, `fund_description`, `youtube_url`) VALUES ('$in_username', '$in_email', '$in_goal', '$in_title', '$in_moneyFor', '$in_zip_code', '$in_category', NULL, '$in_image_url', '$in_description', '$in_yt_url');";

				echo '<script>alert("'.$create_fund_query.'");</script>';


				if ($conn->multi_query($create_fund_query) === TRUE) {
					header('Location: '. "index.php");
				} else {
				    echo "Error: " . $create_fund_query . "<br>" . $conn->error;
				}
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
		<div class="container">
		
		<div class = "col-lg-1"></div>
		<div class = "col-lg-3">
			<div >
				<?php 
				if (isset($_SESSION["db_image_url"])){
					echo '<img src='. $_SESSION["db_image_url"] .' width = "300px" >';
				}
				else {
					echo '<iframe width="420" height="315" src="'. str_replace("watch?v=", "embed/", $_SESSION["yt_url"]).'"> </iframe>';
				} ?>
			</div>
		</div>
		<div class = "col-lg-8">
			<form method = "post" class="form-horizontal" >
				
		    	<div class="form-group">
		    		
		    		<label class="control-label col-xs-2" for="fund_title">Title:</label>
		    		<div class="col-xs-7">

		    			<input type="text" class="form-control" id="fund_title" placeholder="Fund Title" name="fund_title">
		    		</div>
		    		<div class = "col-xs-3"></div>
		    	</div>
		    	<div class="form-group">
		      		<label class="control-label col-xs-2" for="description" placeholder = "What will you use the money for?">Description:</label>
		      		<div class = "col-xs-7">          
		        		<textarea class="form-control" rows="10" id="description" name = "fund_description"></textarea>
		        		<div class = "col-xs-3"></div>
		      		</div>
		    	</div>
		    	<div class="form-group">  
		    		<div class = "col-xs-2"></div>      
		      		<div class = "col-xs-7">
		        		<div class="checkbox">
		          			<label><input type="checkbox" name="agreement">I Agree to the Terms And Conditions</label>
		        		</div>
		      		</div>
		      		<div class = "col-xs-3"></div>
		    	</div>
		    	<div class="form-group">  
		    		<div class = "col-xs-2"></div>      
		      		<div class="col-xs-7">
		        		<input value = "Submit" name = "submit_fund_btn" id = "submit_fund_btn" type = "submit" class = "button btn " text = "Submit"> </input>
		      		</div>
		      		<div class = "col-xs-3"></div>    
		    	</div>
		  	</form>
		</div>
		</div>
		
	</article>

	<footer>
	</footer>

	</body>
</div>
</html>