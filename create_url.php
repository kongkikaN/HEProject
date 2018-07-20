<?php 

	session_start();
	$_SESSION["yt_url"] = $_POST["yt_url"];
	header('Location: '. "fundDescription.php");
?>