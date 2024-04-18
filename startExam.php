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
    <div class="d-grid gap-1 justify-content-md-start">
      <a href="exam2.php" class="btn btn-lg btn-bd-red w-100 py-2">Quick Start</a>
    </div>
  </div>
</div>




<!--Dark mode-->
<div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
  <button class="btn btn-secondary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
    <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
      <use href="#circle-half"></use>
    </svg>
    <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
  </button>
  <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
    <li>
      <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
        <svg class="bi me-2 opacity-50" width="1em" height="1em">
          <use href="#sun-fill"></use>
        </svg>
        Light
        <svg class="bi ms-auto d-none" width="1em" height="1em">
          <use href="#check2"></use>
        </svg>
      </button>
    </li>
    <li>
      <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
        <svg class="bi me-2 opacity-50" width="1em" height="1em">
          <use href="#moon-stars-fill"></use>
        </svg>
        Dark
        <svg class="bi ms-auto d-none" width="1em" height="1em">
          <use href="#check2"></use>
        </svg>
      </button>
    </li>
    <li>
      <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
        <svg class="bi me-2 opacity-50" width="1em" height="1em">
          <use href="#circle-half"></use>
        </svg>
        Auto
        <svg class="bi ms-auto d-none" width="1em" height="1em">
          <use href="#check2"></use>
        </svg>
      </button>
    </li>
  </ul>
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