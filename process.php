<?php 
	// Connect to a database
	$conn = mysqli_connect('localhost', 'root', '', 'ajaxtest');
	

	echo "Processing.....";

	//Check for POST Variable
	if(isset($_POST['name'])) {
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		
		// echo 'POST: Your name is '. $_POST['name'];
		$query = "INSERT INTO users (name) VALUES('$name') ";
		if(mysqli_query($conn, $query)) {
			echo "User added!";
		} else {
			echo "Error: " . mysqli_error($conn);
		}
	}
	

	//Check for GET Variable
	if(isset($_GET['name'])) {
		echo 'GET: Your name is '. $_GET['name'];
	}

	



?>