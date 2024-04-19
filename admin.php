<?php
// Initialize the session.
session_start();
// Check if the user is not logged in, redirect them to the login page.
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("Location: admin-login.php");
  exit();
}
?>

<?php
$pageTitle = "Admin";
require_once 'header.php';
?>

<div class="container mt-5">
  <h1 class="text-center mb-4">Admin Dashboard</h1>

  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Manage Users</h5>
          <p class="card-text">View and manage user accounts.</p>
          <!-- <a href="#" class="btn btn-bd-red">Go to Users</a> -->
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="./admin-user.php" class="btn btn-bd-red btn-lg px-4 me-md-2">Go to Users</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Manage Products</h5>
          <p class="card-text">Add, edit, and delete products.</p>
          <a href="#" class="btn btn-bd-red">Go to Products</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">View Reports</h5>
          <p class="card-text">Access and analyze sales reports.</p>
          <a href="#" class="btn btn-bd-red">Go to Reports</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End of Main-->

<?php
// Include footer.
require_once 'footer.php';
?>