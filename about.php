<?php
    $pageTitle = "About";
    require_once 'header.php';
?>

<!--Main-->
<main class="container mt-5">
  <section>
    <h2>Our Story</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac urna
      sit amet est tristique elementum. Vestibulum ante ipsum primis in
      faucibus orci luctus et ultrices posuere cubilia Curae; Proin
      tristique tortor sit amet ex eleifend, sed vestibulum sapien congue.
      Nulla ut velit in odio ultricies sodales. Duis id consectetur risus.
    </p>
  </section>

  <section>
    <h2>Our Team</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img
            src="team-member1.jpg"
            class="card-img-top"
            alt="Team Member 1"
          />
          <div class="card-body">
            <h5 class="card-title">John Doe</h5>
            <p class="card-text">Web Developer</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img
            src="team-member2.jpg"
            class="card-img-top"
            alt="Team Member 2"
          />
          <div class="card-body">
            <h5 class="card-title">Jane Smith</h5>
            <p class="card-text">Designer</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img
            src="team-member3.jpg"
            class="card-img-top"
            alt="Team Member 3"
          />
          <div class="card-body">
            <h5 class="card-title">Mike Johnson</h5>
            <p class="card-text">Marketing Specialist</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

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
