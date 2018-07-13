<?php 
	$file_result = "";

	if ($_FILES["file"]["error"] > 0){
		$file_result .= "No file uploaded";
		$file_result .= "Error Code ";
	}

	else {
		move_uploaded_file($_FILES["file"]["tmp_name"], "images/other/". $_FILES["file"]["name"]);
	}

	header('Location: '. "fundDescription.php");
?>