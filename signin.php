<?php
$pageTitle = "Sing In";
require_once 'testheader.php';
include 'questions2.php';
?>
<style>
  .form-floating.position-relative {
    position: relative;
  }
  
  .field-icon-b {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    z-index: 2;
  }
</style>


<main class="form-signin w-100 m-auto">
  <form>
    <!-- <img class="mb-4" src="img/cwu_wildcat_spirit_mark_rgb.png" alt="" width="80" height="80"> -->
    <h1 class="h3 mb-3 mt-5 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating position-relative">
      <input type="password" id="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
      <span toggle="#password" class="fa fa-fw fa-eye field-icon-b toggle-password"></span>
    </div>


    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-bd-red w-100 py-2" type="submit">Sign in</button>
  </form>
</main>

<script>
  document.querySelectorAll(".toggle-password").forEach(function(button) {
    button.addEventListener("click", function() {
      // Toggle the classes for the eye icon
      this.classList.toggle("fa-eye");
      this.classList.toggle("fa-eye-slash");

      // Get the input element based on the "toggle" attribute of the clicked element
      var input = document.querySelector(this.getAttribute("toggle"));

      // Toggle the input type between password and text
      if (input.getAttribute("type") === "password") {
        input.setAttribute("type", "text");
      } else {
        input.setAttribute("type", "password");
      }
    });
  });
</script>

<?php
// Include footer.
require_once 'testfooter.php';
?>