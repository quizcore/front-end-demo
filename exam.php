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
			
			$sql = "INSERT INTO students(first_name, last_name, dob, email) VALUES('$first_name', '$last_name', '$dob', '$email');";
			
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
			header("Location: exam2.php");
		}
	}
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	$pageTitle = "Exam";
	require_once 'testheader.php';
?>

<!--Main-->
<!--Main Div-->
<div class="d-grid gap-2 d-md-flex justify-content-md-start">
  <!--Form-->
  <div id="myForm" class="form-signin w-100 m-auto">
    <form id="studentForm" method="post" action="#">
      <h1 class="h3 mb-3 fw-normal">Please provide your information</h1>

      <div class="form-floating">
        <input type="text" class="form-control" name="firstName" id="floatingInput" placeholder="First Name">
        <label for="floatingInput">First Name</label>
      </div>

      <div class="form-floating">
        <input type="text" class="form-control" name="lastName" id="floatingInput" placeholder="Last Name">
        <label for="floatingInput">Last Name</label>
      </div>

      <div class="form-floating">
        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>

      <div class="form-floating">
        <input type="date" class="form-control" name="dob" id="floatingPassword" placeholder="date of birth">
        <label for="floatingPassword">Date of Birth</label>
      </div><br />

      <input type="submit" value="Sign Up" class="btn btn-lg btn-dark btn-outline-light w-100 py-2"> 
	  <!--<button class="btn btn-lg btn-dark w-100 py-2" type="submit">Sign Up</button>-->
    </form>
  </div>

  <!--Quick Start Button>-->
  <div id="quickStartBtn>" class="form-signin w-100 m-auto">
    <!--add some text-->
    <div>
      <h1></h1>
    </div>
    <a href="exam2.php" class="btn btn-lg btn-bd-red w-100 py-2">Quick Start</a>
  </div>
</div>

<script>
  document
    .getElementById("quickStartBtn")
    .addEventListener("submit", function(event) {
      // Prevents the default form submission behavior.
      event.preventDefault();
      // Redirect to exam2.php.
      window.location.href = "exam2.php";
    });
</script>
<!--End of Main-->

<?php
// Include footer.
require_once 'testfooter.php';
?>