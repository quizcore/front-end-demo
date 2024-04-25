<?php
	session_start();
	
	$conn = mysqli_connect($_SESSION['servername'], $_SESSION['username'], $_SESSION['password'], $_SESSION['dbname']);
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$first_name = test_input($_POST['firstName']);
		$last_name = test_input($_POST['lastName']);
		$email = test_input($_POST['email']);
		$dob = date('Y-m-d', strtotime($_POST['dob']));
		
		$canStore = True;
		
		if(strlen($first_name) > 0 && strlen($last_name) > 0 && strlen($email) > 0) {
			$select = "SELECT * FROM students";
			$result = $conn->query($select);
			
			$sql = "UPDATE students SET first_name = '$first_name', last_name = '$last_name', dob = '$dob', email = '$email';";
			
			// Allow insertion if the DB is empty
			if ($result->num_rows === 0 ) {
				mysqli_query($conn, $sql);
			}
			// Otherwise check the DB for dubplicate values before posting 
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					if($row["email"] === $email) {
						$canStore = False;
					}
				}
				if ($canStore) {
					mysqli_query($conn, $sql);
				}
			}
		}
		
		if($canStore) {
			setcookie("student", $email, time() + 3600);
			$_COOKIE["student"] = $email;
		}
	}
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	$course = "";
	
	$pageTitle = "Result";
	require_once 'testheader.php';
	
	echo "<div class='container shadow p-3 my-5 bg-body-tertiary rounded'>";
		echo "<h2>Your Course Recommendation</h2><br><br>";
		if($_SESSION['score'] >= 25) {
			echo "<h3>CS111</h3><br>";
			$course = 111;
		} else {
			echo "<h3>CS110</h3><br>";
			$course = 110;
		}
		
		$res = "UPDATE students SET recommendation = '$course', score = '$_SESSION[score]' WHERE email = '$_COOKIE[student]';";
		mysqli_query($conn, $res);
		
		echo "<p>Based off the results of your placement test, you have qualified for the course recommended above. This recommendation will be passed along to your advisor, if you have any questions about the results of the exam, please reach out to your advisor.</p>";
		if($_COOKIE['student'] == "temp") {
			echo "<p>Please fill out the form below so your exam results can be properly saved and delivered to your advisor.</p>";
			echo "<div id='myForm' class='form-signin w-100 m-auto'>";
				echo "<form id='studentForm' method='post' action='#'>";
					echo "<h1 class='h3 mb-3 fw-normal'>Please provide your information</h1>";

					echo "<div class='form-floating'>";
						echo "<input type='text' class='form-control' name='firstName' id='floatingInput' placeholder='First Name'>";
						echo "<label for='floatingInput'>First Name</label>";
					echo "</div>";

					echo "<div class='form-floating'>";
						echo "<input type='text' class='form-control' name='lastName' id='floatingInput' placeholder='Last Name'>";
						echo "<label for='floatingInput'>Last Name</label>";
					echo "</div>";

					echo "<div class='form-floating'>";
						echo "<input type='email' class='form-control' name='email' id='floatingInput' placeholder='name@example.com'>";
						echo "<label for='floatingInput'>Email address</label>";
					echo "</div>";

					echo "<div class='form-floating'>";
						echo "<input type='date' class='form-control' name='dob' id='floatingPassword' placeholder='date of birth'>";
						echo "<label for='floatingPassword'>Date of Birth</label>";
					echo "</div><br />";

					echo "<input type='submit' value='Sign Up' class='btn btn-lg btn-dark btn-outline-light w-100 py-2'>";					
				echo "</form>";
			echo "</div>";
		}
	echo "</div>";
	
	$pageTitle = "Exam";
	require_once 'testfooter.php';
?>