<?php
$pageTitle = "Contact Us";
require_once 'header.php';
?>

<!--Main-->
<div class="container">
  <h1>Contact Us</h1>
  <p>
    If you have any questions or feedback, feel free to reach out to us.
  </p>
  <form>
    <div class="mb-3">
      <label for="name" class="form-label">Your Name</label>
      <input type="text" class="form-control" id="name" required />
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email Address</label>
      <input type="email" class="form-control" id="email" required />
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Message</label>
      <textarea class="form-control" id="message" rows="5" required></textarea>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
      <!-- Submit button (Add back end code to save contact info) -->
      <a type="submit" class="btn btn-bd-red btn-lg px-4 me-md-2">Submit</a>
    </div>
  </form>
</div>
<!--End of Main-->

<?php
// Include footer.
require_once 'footer.php';
?>