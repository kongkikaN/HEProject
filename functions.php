<?php
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['id'])){
        approve_fund($_GET['id']);

    }

    function approve_fund($fund_id){

    	$conn = createConnectionToDatabase();
		$query = "INSERT INTO `approved_articles` (`fund_id`, `app_fund_id`) VALUES ('$fund_id', NULL);";

		if ($conn->query($query) === TRUE) {
			echo '<script>alert("This article is aproved successfully!");</script>';
		} else {
			echo "Error updating record: " . $conn->error;
		}
    }

	function createConnectionToDatabase(){
		$servername = "localhost";
		$db_username = "root";
		$db_password = "";
		$dbname = "e_business";

		$conn =new mysqli($servername, $db_username, $db_password, $dbname);
			// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		//return connection
		return $conn;
	}

?>