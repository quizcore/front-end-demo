<?php
$pageTitle = "Self-Placement Quiz";
require_once 'header.php';
?>

<!--Main-->
<!--Hero-->
<div class="container-fluid col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="img/cwu-des-moines.jpg" class="d-block mx-lg-auto img-fluid rounded" alt="Bootstrap Themes" width="800" loading="lazy" />
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">
        Self-Placement Testing for Computer Science Students
      </h1>
      <p class="lead">
        CWU provides two entry-level computer science courses, CS110 and CS111. The online self-placement tool assists students in determining the appropriate path to take: CS110, CS111, or none at all!
      </p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <!-- Get Started button-->
        <a href="exam.php" class="btn btn-bd-red btn-lg px-4 me-md-2">Get Started</a>
        <!-- View More button-->
        <!-- <form class="d-grid gap-1 d-md-flex justify-content-md-start">
          <button type="submit" class="btn btn-outline-secondary btn-lg px-4">
            View More
          </button>
        </form> -->
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
<!--End of Main-->

<?php
// Include footer.
require_once 'footer.php';
?>