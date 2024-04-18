<?php
$pageTitle = "Self-Placement Quiz";
require_once 'header.php';
?>

<!--Main-->
<!--Hero-->
<div class="container-fluid col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="img/image.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy" />
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">
        Responsive left-aligned hero with image
      </h1>
      <p class="lead">
        Quickly design and customize responsive mobile-first sites with
        Bootstrap, the world’s most popular front-end open source toolkit,
        featuring Sass variables and mixins, responsive grid system,
        extensive prebuilt components, and powerful JavaScript plugins.
      </p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <!-- Get Started button-->
        <a href="guideLines.html" class="btn btn-bd-red btn-lg px-4 me-md-2">Get Started</a>
        <form class="d-grid gap-1 d-md-flex justify-content-md-start">
          <!-- View More button-->
          <button type="submit" class="btn btn-outline-secondary btn-lg px-4">
            View More
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Featured-->
<div class="container-fluid px-4 py-5" id="featured-3">
  <h2 class="pb-2 border-bottom"></h2>
  <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    <div class="feature col">
      <div class="feature-icon bg-red bg-gradient">
        <svg class="bi" width="1em" height="1em">
          <use xlink:href="#collection" />
        </svg>
      </div>
      <h2>Featured title</h2>
      <p>
        Paragraph of text beneath the heading to explain the heading.
        We'll add onto it with another sentence and probably just keep
        going until we run out of words.
      </p>
      <a href="#" class="icon-link">
        <!-- Call to action 1 -->
        Call to action
        <svg class="bi" width="1em" height="1em">
          <use xlink:href="#chevron-right" />
        </svg>
      </a>
    </div>
    <div class="feature col">
      <div class="feature-icon bg-red bg-gradient">
        <svg class="bi" width="1em" height="1em">
          <use xlink:href="#people-circle" />
        </svg>
      </div>
      <h2>Featured title</h2>
      <p>
        Paragraph of text beneath the heading to explain the heading.
        We'll add onto it with another sentence and probably just keep
        going until we run out of words.
      </p>
      <a href="#" class="icon-link">
        <!-- Call to action 2 -->
        Call to action
        <svg class="bi" width="1em" height="1em">
          <use xlink:href="#chevron-right" />
        </svg>
      </a>
    </div>
    <div class="feature col">
      <div class="feature-icon bg-red bg-gradient">
        <svg class="bi" width="1em" height="1em">
          <use xlink:href="#toggles2" />
        </svg>
      </div>
      <h2>Featured title</h2>
      <p>
        Paragraph of text beneath the heading to explain the heading.
        We'll add onto it with another sentence and probably just keep
        going until we run out of words.
      </p>
      <a href="#" class="icon-link">
        <!-- Call to action 3 -->
        Call to action
        <svg class="bi" width="1em" height="1em">
          <use xlink:href="#chevron-right" />
        </svg>
      </a>
    </div>
  </div>
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
<!--End of Main-->

<?php
// Include footer.
require_once 'footer.php';
?>