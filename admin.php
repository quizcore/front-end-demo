<?php
    $pageTitle = "Admin";
    require_once 'header.php';
?>

<!--Main-->
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
                    <a href="#" class="btn btn-bd-red btn-lg px-4 me-md-2">Go to Users</a>
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

<?php
    // Include footer.
    require_once 'footer.php';
?>
