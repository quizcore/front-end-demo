<?php
    $pageTitle = "FAQ";
    require_once 'header.php';
?>

<!--Main-->
<main class="container mt-5">
  <h1 class="text-center mb-4">Frequently Asked Questions</h1>

  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button
          class="accordion-button"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapseOne"
          aria-expanded="true"
          aria-controls="collapseOne"
        >
          Accordion Item #1
        </button>
      </h2>
      <div
        id="collapseOne"
        class="accordion-collapse collapse show"
        data-bs-parent="#accordionExample"
      >
        <div class="accordion-body">
          <strong>This is the first item's accordion body.</strong> It is
          shown by default, until the collapse plugin adds the appropriate
          classes that we use to style each element. These classes control
          the overall appearance, as well as the showing and hiding via CSS
          transitions. You can modify any of this with custom CSS or
          overriding our default variables. It's also worth noting that just
          about any HTML can go within the <code>.accordion-body</code>,
          though the transition does limit overflow.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button
          class="accordion-button collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapseTwo"
          aria-expanded="false"
          aria-controls="collapseTwo"
        >
          Accordion Item #2
        </button>
      </h2>
      <div
        id="collapseTwo"
        class="accordion-collapse collapse"
        data-bs-parent="#accordionExample"
      >
        <div class="accordion-body">
          <strong>This is the second item's accordion body.</strong> It is
          hidden by default, until the collapse plugin adds the appropriate
          classes that we use to style each element. These classes control
          the overall appearance, as well as the showing and hiding via CSS
          transitions. You can modify any of this with custom CSS or
          overriding our default variables. It's also worth noting that just
          about any HTML can go within the <code>.accordion-body</code>,
          though the transition does limit overflow.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button
          class="accordion-button collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapseThree"
          aria-expanded="false"
          aria-controls="collapseThree"
        >
          Accordion Item #3
        </button>
      </h2>
      <div
        id="collapseThree"
        class="accordion-collapse collapse"
        data-bs-parent="#accordionExample"
      >
        <div class="accordion-body">
          <strong>This is the third item's accordion body.</strong> It is
          hidden by default, until the collapse plugin adds the appropriate
          classes that we use to style each element. These classes control
          the overall appearance, as well as the showing and hiding via CSS
          transitions. You can modify any of this with custom CSS or
          overriding our default variables. It's also worth noting that just
          about any HTML can go within the <code>.accordion-body</code>,
          though the transition does limit overflow.
        </div>
      </div>
    </div>
  </div>
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
