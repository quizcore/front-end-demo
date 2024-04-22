<?php
$pageTitle = "Guidelines";
require_once 'header.php';
?>

<!--Main-->

<div class="container" id="testResults">
  <h1>Test Results</h1>
  <!-- Hardcoded user test results for demonstration -->
  <div class="userResult container shadow p-3 my-5 bg-body-tertiary rounded">
    <h3>Student 1</h3>
    <p>Easy Questions: 4 out of 5 correct</p>
    <p>Duration: 15 mins</p>
    <p>Medium Questions: 3 out of 5 correct</p>
    <p>Duration: 15 mins</p>
    <p>Hard Questions: 2 out of 5 correct</p>
    <p>Duration: 15 mins</p>
    <p>Recommended Class: CS111</p>
  </div>
</div>

<script>
  document
    .getElementById("myForm")
    .addEventListener("submit", function(event) {
      event.preventDefault(); // Prevents the default form submission behavior
      window.location.href = "exam.php"; // Redirect to exam.html
    });
</script>
<!--End of Main-->

<?php
// Include footer.
require_once 'footer.php';
?>