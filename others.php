
<?php session_start(); ?>
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
		
		<?php include 'createConnectionToDB.php' ?>
		<?php $sql_query_get_articles = "SELECT * FROM `fund`";
		$result = $conn->query($sql_query_get_articles);
		$counter = 1;
		if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				$counter = $counter + 1;
				if ($counter%2 == 0){
					
					include 'article.php';
				}
				else {
					include 'article2.php';
				}
			}
		}
		?>
	</article>

	<footer>
	</footer>

	</body>
</div>
</html>