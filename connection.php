<?php
	session_start();
	
	$_SESSION['servername'] = "localhost";
	$_SESSION['username'] = "root";
	$_SESSION['password'] = "";
	$_SESSION['dbname'] = "quizcore";
			
	// Create connection
	$conn = mysqli_connect($_SESSION['servername'], $_SESSION['username'], $_SESSION['password'], $_SESSION['dbname']);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$_SESSION['connection'] = $conn;
	header("Location: index.php");
?>

