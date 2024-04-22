<?php
$pageTitle = "Exam";
require_once 'testheader.php';
?>

<!--Main-->


<!--Quick Start Button>-->
<div class="container shadow p-3 my-5 bg-body-tertiary rounded">
  <div id="quickStartBtn" class="d-grid gap-2 justify-content-md-start">
    <!--add some text-->
    <div>
      <p> Welcome to the Central Washington University Self-Placement Exam for the Computer Science department. This exam is designed to help assess your current level of proficiency in computer science concepts and programming skills. Whether you're a seasoned coder or just beginning your journey in computer science, this exam will assist you and your academic advisors in determining the appropriate level of coursework for your skill level.
      </p>
      <p>This exam consists of multiple-choice questions covering various topics from the introductory programming courses offered here at Central. This exam is designed to test your knowledge in areas such as variables, conditionals, basic program structure, object-oriented programming, and more. All exam questions will be written with the Java programming language in mind, but the aim of this exam is to gather your general programming knowledge more than anything else.
      </p>
      <p>Before you begin, ensure that you have a quiet and distraction-free environment to concentrate. Take your time to read each question carefully and select the answer that you believe is correct. Once you complete the exam, your results will be used to recommend appropriate courses for your skill level. Remember, the goal is to help you succeed and thrive here at Central. Good luck, and let's get started!
      </p>

    </div>
    <div class="d-grid gap-1 justify-content-md-center">
      <a href="exam.php" class="btn btn-lg btn-bd-red w-100 py-2">Quick Start</a>
    </div>
  </div>
</div>

<script>
  document
    .getElementById("myForm")
    .addEventListener("submit", function(event) {
      // Prevents the default form submission behavior.
      event.preventDefault();
      // Redirect to exam2.php.
      window.location.href = "exam2.php";
    });

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