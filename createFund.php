
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
		<div class = "container">
			<div class = "col-md-3"></div>
			<div class = "col-md-6" style = "background-color: #fff; border-radius: 30px;">
				<div class = "col-sm-2"></div>
				<div class = "col-sm-8">
					<h1 style = "text-align: center;">Add a cover image</h1>
					<button type="button" class="btn btn-info btn-block btn-lg" data-toggle="modal" data-target="#upload_image_modal">Upload a photo</button>
					<h2 style = "text-align: center;">OR</h2>
					<button type="button" class="btn btn-danger btn-block btn-lg" data-toggle="modal" data-target="#upload_url_modal">Select A YouTube Video</button>
					<br><br>
					<img src="images\other\person.jpg" alt="Marisa, a crowd funding expert" width="35"> 
								<span style = "font-size: 16px;">Mary, a <b> crowd funding expert </b>, says : </span>
								<p style = "font-size: 16px; width: 100%; border-top: double; line-height: 1.6;">A photo and a video will help you with your campaign...</p>
				</div>
				<div class = "col-sm-2"></div>
			</div>
			<div class = "col-md-3"></div>
		</div>

		<!-- Upload youtube url modal -->
		<div id="upload_url_modal" class="modal fade" role="dialog">
 		<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<form action="create_url.php" method="post">
				<div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal">&times;</button>
				    <h4 class="modal-title">Copy - Paste your YouTube promo video</h4>
				</div>
				<div class="modal-body">
				    <input class = "form-control" name = "yt_url" id="yt_id" type="text" />
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-danger" value="Upload"></input>
			    	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
		</div>
		</div>

		<!-- Upload image Modal -->
		<div id="upload_image_modal" class="modal fade" role="dialog">
 		<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<form enctype="multipart/form-data" action="upload_file.php" method="post">
				<div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal">&times;</button>
				    <h4 class="modal-title">Select an image</h4>
				</div>
				<div class="modal-body">
				    <input name = "file" id="file" type="file" />
				    
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-danger" value="upload_filead"></input>
			    	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
		</div>
		</div>

  </div>
</div>
	</article>

	<footer>
	</footer>

	</body>
</div>
</html>