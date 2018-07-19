<?php 

	session_start();
	$_SESSION["db_url"] = $_POST["yt_url"];
	header('Location: '. "fundDescription.php");
?>