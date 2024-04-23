<?php
	session_start();

	$conn = mysqli_connect($_SESSION['servername'], $_SESSION['username'], $_SESSION['password'], $_SESSION['dbname']);	
	
	$select = "SELECT * FROM questions WHERE difficulty = '4'";
	$result = $conn->query($select);
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$a16 = $_POST['16'];
		$a17 = $_POST['17'];
		$a18 = $_POST['18'];
		$a19 = $_POST['19'];
		$a20 = $_POST['20'];
		
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				if($a16 == $row['question_answer']) {
					$_SESSION['score'] = $_SESSION['score'] + 1;
				}
				if($a17 == $row['question_answer']) {
					$_SESSION['score'] = $_SESSION['score'] + 1;
				}
				if($a18 == $row['question_answer']) {
					$_SESSION['score'] = $_SESSION['score'] + 1;
				}
				if($a19 == $row['question_answer']) {
					$_SESSION['score'] = $_SESSION['score'] + 1;
				}
				if($a20 == $row['question_answer']) {
					$_SESSION['score'] = $_SESSION['score'] + 1;
				}
			}
		}
		
		$sql = "UPDATE students SET question_16 = '$a16', question_17 = '$a17', question_18 = '$a18', question_19 = '$a19', question_20 = '$a20' WHERE email = '$_COOKIE[student]';";
		mysqli_query($conn, $sql);
		
		header("Location: CS111Q2.php");
	}

	$pageTitle = "Exam";
	require_once 'testheader.php';
?>
<!--Main-->
<!--Main Div-->
	<div class="container shadow p-3 my-5 bg-body-tertiary rounded">
		<h2>Exam Questions 4</h2>
	</div>
	
	<!--Questions pulled from database-->
	<form id="Q3" method="post" action="#">
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