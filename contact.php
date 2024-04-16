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
      <textarea
        class="form-control"
        id="message"
        rows="5"
        required
      ></textarea>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
      <!-- Submit button (Add back end code to save contact info) -->
      <a type="submit" class="btn btn-bd-red btn-lg px-4 me-md-2">Submit</a>
    </div>
  </form>
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
<!--End of Main-->

<?php
    // Include footer.
    require_once 'footer.php';
?>
