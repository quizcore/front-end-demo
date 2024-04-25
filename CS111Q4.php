<?php
	session_start();
	
	$conn = mysqli_connect($_SESSION['servername'], $_SESSION['username'], $_SESSION['password'], $_SESSION['dbname']);
	
	$select = "SELECT * FROM questions WHERE difficulty = '7'";
	$result = $conn->query($select);
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$a31 = $_POST['31'];
		$a32 = $_POST['32'];
		$a33 = $_POST['33'];
		$a34 = $_POST['34'];
		$a35 = $_POST['35'];
		
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				if($a31 == $row['question_answer']) {
					$_SESSION['score'] = $_SESSION['score'] + 1;
				}
				if($a32 == $row['question_answer']) {
					$_SESSION['score'] = $_SESSION['score'] + 1;
				}
				if($a33 == $row['question_answer']) {
					$_SESSION['score'] = $_SESSION['score'] + 1;
				}
				if($a34 == $row['question_answer']) {
					$_SESSION['score'] = $_SESSION['score'] + 1;
				}
				if($a35 == $row['question_answer']) {
					$_SESSION['score'] = $_SESSION['score'] + 1;
				}
			}
		}
		
		$sql = "UPDATE students SET question_31 = '$a31', question_32 = '$a32', question_33 = '$a33', question_34 = '$a34', question_35 = '$a35' WHERE email = '$_COOKIE[student]';";
		mysqli_query($conn, $sql);
		
		header("Location: results.php");
	}

	$pageTitle = "Exam";
	require_once 'testheader.php';
?>
<!--Main-->
<!--Main Div-->
	<div class="container shadow p-3 my-5 bg-body-tertiary rounded">
		<h2>Exam Questions 7</h2>
	</div>
	
	<div class="container">
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
			<div class="container d-grid gap-2 d-md-grid justify-content-md-center">
				<input type="submit" value="Next" class="btn btn-lg btn-bd-red">
			</div>
		</form>	
	</div>
	
<?php
// Include footer.
require_once 'testfooter.php';
?>