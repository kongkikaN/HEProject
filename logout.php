<?php 

	//end session and clear all data
	session_start();
	session_unset();
	session_destroy();


	//redirect to index.php
	header('Location: '. "index.php");
?>