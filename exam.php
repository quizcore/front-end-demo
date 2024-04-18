<?php
$pageTitle = "Exam";
require_once 'testheader.php';
?>

<!--Main-->
<!--Main Div-->
<div class="d-grid gap-2 d-md-flex justify-content-md-start">
  <!--Form-->
  <div id="myForm" class="form-signin w-100 m-auto">
    <form>
      <h1 class="h3 mb-3 fw-normal">Filling your information</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
        <label for="floatingInput">First Name</label>
      </div>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="Last Name">
        <label for="floatingInput">Last Name</label>
      </div>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>

      <div class="form-floating">
        <input type="date" class="form-control" id="floatingPassword" placeholder="date of birth">
        <label for="floatingPassword">Date of Birth</label>
      </div><br />

      <button class="btn btn-lg btn-dark w-100 py-2" type="submit">Sign Up</button>
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