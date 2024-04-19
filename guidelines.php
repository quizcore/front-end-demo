<?php
$pageTitle = "Guidelines";
require_once 'header.php';
?>

<!--Main-->
<div class="container-fluid">
  <section class="guidelines">
    <h2>Guidelines for Taking the Exam</h2>
    <ul>
      <li>Read each question carefully before selecting an answer.</li>
      <li>Answer questions to the best of your ability.</li>
      <li>Do not use any external resources during the exam.</li>
    </ul>
    <h3>Preparation Tips:</h3>
    <p>
      Prepare for the exam by reviewing basic programming concepts and
      practicing coding tasks in various languages.
    </p>
  </section>
  <div class="d-grid gap-2 d-md-flex justify-content-md-start">
    <a href="exam.html" class="btn btn-bd-red btn-lg px-4 me-md-2">Take Exam</a>
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