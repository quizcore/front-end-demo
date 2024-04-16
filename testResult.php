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

<!--Dark mode-->
<div
  class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle"
>
  <button
    class="btn btn-secondary py-2 dropdown-toggle d-flex align-items-center"
    id="bd-theme"
    type="button"
    aria-expanded="false"
    data-bs-toggle="dropdown"
    aria-label="Toggle theme (auto)"
  >
    <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
      <use href="#circle-half"></use>
    </svg>
    <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
  </button>
  <ul
    class="dropdown-menu dropdown-menu-end shadow"
    aria-labelledby="bd-theme-text"
  >
    <li>
      <button
        type="button"
        class="dropdown-item d-flex align-items-center"
        data-bs-theme-value="light"
        aria-pressed="false"
      >
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
      <button
        type="button"
        class="dropdown-item d-flex align-items-center"
        data-bs-theme-value="dark"
        aria-pressed="false"
      >
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
      <button
        type="button"
        class="dropdown-item d-flex align-items-center active"
        data-bs-theme-value="auto"
        aria-pressed="true"
      >
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
    .addEventListener("submit", function (event) {
      event.preventDefault(); // Prevents the default form submission behavior
      window.location.href = "exam.php"; // Redirect to exam.html
    });
</script>
<!--End of Main-->

<?php
    // Include footer.
    require_once 'footer.php';
?>
