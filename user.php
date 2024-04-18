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