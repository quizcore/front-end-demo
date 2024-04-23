<?php
	session_start();

	$_SESSION['score'] = 0;

	$conn = mysqli_connect($_SESSION['servername'], $_SESSION['username'], $_SESSION['password'], $_SESSION['dbname']);
	
	$select = "SELECT * FROM questions WHERE difficulty = '1'";
	$result = $conn->query($select);
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$a1 = $_POST['1'];
		$a2 = $_POST['2'];
		$a3 = $_POST['3'];
		$a4 = $_POST['4'];
		$a5 = $_POST['5'];
		
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				if($a1 == $row['question_answer']) {
					$_SESSION['score'] = $_SESSION['score'] + 1;
				}
				if($a2 == $row['question_answer']) {
					$_SESSION['score'] = $_SESSION['score'] + 1;
				}
				if($a3 == $row['question_answer']) {
					$_SESSION['score'] = $_SESSION['score'] + 1;
				}
				if($a4 == $row['question_answer']) {
					$_SESSION['score'] = $_SESSION['score'] + 1;
				}
				if($a5 == $row['question_answer']) {
					$_SESSION['score'] = $_SESSION['score'] + 1;
				}
			}
		}
		if(isset($_COOKIE["student"])) {
			$sql = "UPDATE students SET question_1 = '$a1', question_2 = '$a2', question_3 = '$a3', question_4 = '$a4', question_5 = '$a5' WHERE email = '$_COOKIE[student]';";
			mysqli_query($conn, $sql);
		} else {
			$sql = "INSERT INTO students(email, question_1, question_2, question_3, question_4, question_5) VALUES('temp', '$a1', '$a2', '$a3', '$a4', '$a5');";
			setcookie("student", "temp", time() + 3600);
			$_COOKIE["student"] = "temp";
			mysqli_query($conn, $sql);
		}
		header("Location: CS110Q2.php");
	}

	$pageTitle = "Exam";
	require_once 'testheader.php';
?>
<!--Main-->
<!--Main Div-->
	<div class="container shadow p-3 my-5 bg-body-tertiary rounded">
		<h2>Exam Questions 1</h2>
	</div>
	
	<!--Questions pulled from database-->
	<form id="Q1" method="post" action="#">
			<?php
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo '<div class="container shadow p-3 my-5 bg-body-tertiary rounded">';
						echo '<h4>' . $row["question_body"] . '</h4>';
						echo '<input type="radio" id="'  . $row["question_id"] . '-A" name="' . $row["question_id"] . '" value="' . $row["answer_1"] . '" required/><label for="'  . $row["question_id"] . '-A">A: ' . $row["answer_1"] . '</label><br>';
						echo '<input type="radio" id="'  . $row["question_id"] . '-B" name="' . $row["question_id"] . '" value="' . $row["answer_2"] . '" required/><label for="'  . $row["question_id"] . '-B">B: ' . $row["answer_2"] . '</label><br>';
						echo '<input type="radio" id="'  . $row["question_id"] . '-C" name="' . $row["question_id"] . '" value="' . $row["answer_3"] . '" required/><label for="'  . $row["question_id"] . '-C">C: ' . $row["answer_3"] . '</label><br>';
						echo '<input type="radio" id="'  . $row["question_id"] . '-D" name="' . $row["question_id"] . '" value="' . $row["answer_4"] . '" required/><label for="'  . $row["question_id"] . '-D">D: ' . $row["answer_4"] . '</label><br>';
						echo '</div>';
					}
				}
			?>
			<input type="submit" value="Next" class="btn btn-lg btn-bd-red" style="margin-left:35%;">
	</form>	
	
<?php
// Include footer.
require_once 'testfooter.php';
?>