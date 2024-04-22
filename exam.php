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