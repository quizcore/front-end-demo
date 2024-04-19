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
$pageTitle = "Guidelines";
require_once 'header.php';
?>

<!--Main-->
<div class="container">
  <h2>User Information</h2>
  <!-- Listing all users. -->
  <table class="table table-striped">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Date of Birth</th>
        <th>Test Result</th>
      </tr>
    </thead>
    <tbody>
      <!-- Sample data, replace with dynamic data from your application -->
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john.doe@example.com</td>
        <td>1990-01-01</td>
        <td>CS110</td>
      </tr>
      <tr>
        <td>Jane</td>
        <td>Smith</td>
        <td>jane.smith@example.com</td>
        <td>1995-05-15</td>
        <td>CS111</td>
      </tr>
      <tr>
        <td>Tu</td>
        <td>Ho</td>
        <td>tu.ho@example.com</td>
        <td>1995-05-15</td>
        <td>Passed</td>
      </tr>
      <tr>
        <td>John</td>
        <td>Smith</td>
        <td>john.smith@example.com</td>
        <td>1994-05-15</td>
        <td>Passed</td>
      </tr>
      <!-- Add more rows for additional users -->
    </tbody>
  </table>

  <!-- Student Self-Placement Distribution Pie Chart -->
  <canvas id="classPieChart" width="200" height="200" style="max-width: 300px; max-height: 300px"></canvas>
</div>

<script>
  document
    .getElementById("myForm")
    .addEventListener("submit", function(event) {
      event.preventDefault(); // Prevents the default form submission behavior
      window.location.href = "exam.php"; // Redirect to exam.html
    });
</script>

<script>
  // Get data from table rows.
  let tableRows = document.querySelectorAll('table tbody tr');
  let classData = {
    CS110: 0,
    CS111: 0,
    Passed: 0
  };

  tableRows.forEach(row => {
    let recommendedClass = row.cells[4].textContent;
    classData[recommendedClass]++;
  });

  // Create Student Self-Placement Distribution Pie Chart.
  let ctx = document.getElementById('classPieChart').getContext('2d');
  let myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: Object.keys(classData),
      datasets: [{
        data: Object.values(classData),
        backgroundColor: [
          'rgba(255, 99, 132, 0.6)',
          'rgba(54, 162, 235, 0.6)',
          'rgba(75, 192, 192, 0.6)'
        ]
      }]
    },
    options: {
      plugins: {
        title: {
          display: true,
          text: 'Student Self-Placement Distribution'
        }
      }
    },
  });
</script>

<!--End of Main-->

<?php
// Include footer.
require_once 'footer.php';
?>