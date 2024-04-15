<?php
include 'questions2.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Self-Placement Exam Website</title>
  <link rel="stylesheet" href="styles.css" />
  <link href="headers.css" rel="stylesheet" />
  <link href="heroes.css" rel="stylesheet" />
  <link href="features.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" />
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, 0.1);
      border: solid rgba(0, 0, 0, 0.15);
      border-width: 1px 0;
      box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
        inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -0.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
      display: block !important;
    }
  </style>
  <style>
    .navbar-toggler {
      background-color: #212121;
      /* Your desired background color */
      color: #ffffff;
      /* Your desired text color */

    }

    .red-btn {
      background-color: #ab0032;
      /* Your desired background color */
      color: #ffffff;
      /* Your desired text color */
      /* Add any other styles you want */
    }

    .bg-red {
      background-color: #ab0032;
      /* Your desired background color */
    }

    .btn-bd-red {
      --bd-violet-bg: #ab0032;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #ab0033d1;
      --bs-btn-hover-border-color: #b0033d1;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #ab0033c0;
      --bs-btn-active-border-color: #ab0033c0;
    }

    /* Add this CSS code to your existing stylesheet or in a <style> tag in your HTML file */

    img.code-snippet-image {
      height: 25rem;
      /* Set the desired height for the image (e.g., 200px) */
      width: auto;
      /* Maintain aspect ratio by setting width to auto */
      display: block;
      /* Ensure the image is displayed as a block element */
      margin-top: 10px;
      /* Add margin space at the top of the image */
    }
  </style>
  <script src="./assets/js/color-modes.js"></script>
</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
    <symbol id="people-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
    </symbol>
    <symbol id="collection" viewBox="0 0 16 16">
      <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z" />
    </symbol>
    <symbol id="toggles2" viewBox="0 0 16 16">
      <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z" />
      <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z" />
      <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z" />
    </symbol>
  </svg>

  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
      <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
  </svg>

  <!-- Main -->
  <main>

    <!-- Nav -->
    <nav class="navbar navbar-expand-md navbar-dark bg-red" aria-label="Fourth navbar example">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Example04" aria-controls="navbarsExample04" aria-expanded="false" navbars aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a style="margin-left: 30px;" class="navbar-brand" href="/">
          <img height="40px" src="img/cwu-wildcat-spirit-mark-single-color-reversed.png" />
        </a>
        <div class="collapse navbar-collapse" id="navbarsExample04">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/exam.html">Exam</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin.html">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/guidelines.html">Guidelines</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact.html">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/faq.html">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <!--<button type="button" class="btn btn-light me-2" id="loginButton">Login / Sign-up</button> -->
        </div>

        <button type="button" class="btn btn-light me-2" id="loginButton">Login / Sign-up</button>
      </div>
    </nav>

    <!--Main Container-->
    <div class="container">
      <!-- Display User info-->
      <div class="container shadow p-3 my-5 bg-body-tertiary rounded">
        <h1 id="userInfo"></h1>
      </div>

      <!--Guidelines Div-->
      <div id=guidelinesDiv class="container shadow p-3 my-5 bg-body-tertiary rounded">
        <h2>Guidelines for Taking the Exam</h2>
        <ul>
          <li>Read each question carefully before selecting an answer.</li>
          <li>Answer questions to the best of your ability.</li>
          <li>Do not use any external resources during the exam.</li>
        </ul>
        <h3>Preparation Tips:</h3>
        <p>
          Prepare for the exam by reviewing basic programming concepts and
          practicing coding tasks in various languages.
        </p>
      </div>

      <!--Questionnaire Div-->
      <div id=questionnaireDiv style="display:none" class="container shadow p-3 my-5 bg-body-tertiary rounded">
        <h2 id="levelDifficulty"></h2>

        <!--progressbar-->
        <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
          <div id="progressBars" class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 0%"></div>
        </div>

      </div>

      <!--Result Div-->
      <h2><span id="resultDiv"></span></h2>
      <br />

      <!--Question Container-->
      <div id="questionContainer">
        <!-- Questions and answer choices will be dynamically updated here -->
      </div>

      <form id="answerForm" class="d-grid gap-2 d-md-grid justify-content-md-start">
        <!-- Add an element to display answer choices -->
        <div id="answerChoices"></div>
        <br />

        <button class="btn btn-lg btn-bd-red" type="button" id="startBtn">Start</button> <br />

        <button type="submit" class="btn btn-lg btn-bd-red" id="submitBtn" style="display:none;">Submit</button> <br />

        <button class="btn btn-lg btn-bd-red" type="button" id="replaceQuestionsBtn" style="display:none;">Next (medium Questions)</button>

        <button class="btn btn-lg btn-bd-red" type="button" id="hardQuestionsBtn" style="display:none;">Next (Hard Questions)</button>

      </form>
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

    <!--Footer-->
    <div class="container-fluid py-5">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">
          &copy; 2024 Central Washington University
        </p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
          <img src="img/cwu-logo-full-color-rgb-transparent.png" height="40px" />
        </a>

        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-body-secondary">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-body-secondary">Exam</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-body-secondary">Guidelines</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-body-secondary">FAQs</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-body-secondary">About</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-body-secondary">Contact</a>
          </li>
        </ul>
      </footer>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script>
    let users = <?php echo json_encode($users); ?>; // PHP array of users
    let questions = <?php echo json_encode($questions); ?>; // PHP array of questions

    let difficultyLevels = ['easy', 'medium', 'hard', 'very hard'];
    let currentDifficultyIndex = 0;
    let randomQuestions = [];
    let score = 0;
    let totalScore = 0;
    let sectionStartTimes = [];
    let sectionEndTimes = [];

    //function display user information
    function getUser() {
      const userLastName = users[0].lname;
      const userFirstName = users[0].fname;

      return `${userFirstName} ${userLastName}`;
    };

    // display user information
    const userInfo = getUser();
    const displayUser = document.getElementById('userInfo');
    displayUser.innerHTML = `Hello ${userInfo}`;


    // function getRandomQuestionsByDifficulty
    function getRandomQuestionsByDifficulty(difficulty, numQuestions) {
      const filteredQuestions = questions.filter(question => question.difficulty === difficulty);
      const randomQuestions = [];

      for (let i = 0; i < numQuestions; i++) {
        const randomIndex = Math.floor(Math.random() * filteredQuestions.length);
        randomQuestions.push(filteredQuestions.splice(randomIndex, 1)[0]);
      }

      return randomQuestions;
    }

    // function displayQuestions
    function displayQuestions() {

      const difficulty = difficultyLevels[currentDifficultyIndex];

      if (currentDifficultyIndex >= 0 && currentDifficultyIndex <= 2) {
        randomQuestions = getRandomQuestionsByDifficulty(difficulty, 5);
      }


      for (let i = 0; i < randomQuestions.length; i++) {
        const question = randomQuestions[i];
        const questionDiv = document.createElement('div');
        questionDiv.innerHTML = `
                <h2>Question #${i+1}</h2>
                <h4>${question.question}</h4>
                <p>Topic: ${question.topic}</p>
            `;
        // if question has codeSnippetImage
        if (question.codeSnippetImage) {
          const imageContainer = document.createElement('div');
          imageContainer.classList.add('code-snippet-image-container');
          const codeImage = document.createElement('img');
          codeImage.src = question.codeSnippetImage;
          codeImage.alt = 'Code Snippet Image';
          codeImage.classList.add('img-fluid', 'code-snippet-image');
          imageContainer.appendChild(codeImage);
          questionDiv.appendChild(imageContainer); // Add the code snippet image below the answer choices
        }
        questionDiv.classList.add('question-list');
        questionDiv.classList.add('shadow', 'p-3', 'mb-5', 'bg-body-tertiary', 'rounded');


        const answersContainer = document.createElement('div');
        answersContainer.classList.add('answers-container');

        for (const [index, value] of question.answers.entries()) {
          const answerDiv = document.createElement('div');
          answerDiv.classList.add('form-check');
          const radioBtn = document.createElement('input');
          radioBtn.classList.add('form-check-input');
          radioBtn.type = 'radio';
          radioBtn.name = `answer${i}`;
          radioBtn.value = value;
          radioBtn.id = `flexRadio${i}-${index + 1}`;

          const label = document.createElement('label');
          label.classList.add('form-check-label');
          label.textContent = value;
          label.for = `flexRadio${i}-${index + 1}`;

          answerDiv.appendChild(radioBtn);
          answerDiv.appendChild(label);
          answersContainer.appendChild(answerDiv);
        }

        questionDiv.appendChild(answersContainer);
        document.getElementById('questionContainer').appendChild(questionDiv);
      }
    }

    // function set Difficulty And Display Questions
    function setDifficultyAndDisplayQuestions(difficultyIndex) {
      currentDifficultyIndex = difficultyIndex;
      totalScore -= score; // Deduct previous score
      score = 0;

      sectionStartTimes[currentDifficultyIndex] = new Date();

      document.getElementById('replaceQuestionsBtn').style.display = 'none'; // Hide replace button
      document.getElementById('hardQuestionsBtn').style.display = 'none'; // Hide hard questions button
      document.getElementById('submitBtn').style.display = 'block'; // Show submit button
      // Clear previous questions
      document.getElementById('questionContainer').innerHTML = '';

      // Display level of difficulty
      const levelDifficulty = document.getElementById('levelDifficulty');
      levelDifficulty.innerHTML = `Level of Difficulty: ${difficultyLevels[currentDifficultyIndex]}`;

      displayQuestions();
    }

    // function scroll To Top
    function scrollToTop() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    }

    // function start By Getting Easy Questions
    function startByGettingEasyQuestions() {
      displayQuestions();
      sectionStartTimes[currentDifficultyIndex] = new Date(); // Record start time for the current section
      document.getElementById('startBtn').style.display = 'none'; // Hide hard questions button
      document.getElementById('submitBtn').style.display = 'block'; // Show submit button
      // Display level of difficulty
      const levelDifficulty = document.getElementById('levelDifficulty');
      levelDifficulty.innerHTML = `Level of Difficulty: ${difficultyLevels[currentDifficultyIndex]}`;
      const progressBar = document.getElementById('progressBars');
      progressBar.style.width = '25%';

      document.getElementById('guidelinesDiv').style.display = 'none'; // Hide guidelinesDiv
      document.getElementById('questionnaireDiv').style.display = 'block'; // Show questionnaireDiv
      scrollToTop();

    }

    // function get Medium Questions
    function getMediumQuestions() {
      setDifficultyAndDisplayQuestions(1); // Set difficulty to medium
      const progressBar = document.getElementById('progressBars');
      progressBar.style.width = '50%';
    }

    // function get Hard Questions
    function getHardQuestions() {
      setDifficultyAndDisplayQuestions(2); // Set difficulty to hard
      const progressBar = document.getElementById('progressBars');
      progressBar.style.width = '75%';
    }

    // startBtn got clicked 
    document.getElementById('startBtn').addEventListener('click', startByGettingEasyQuestions);
    // replaceQuestionsBtn got clicked 
    document.getElementById('replaceQuestionsBtn').addEventListener('click', function() {
      getMediumQuestions();
      scrollToTop();
    });
    // hardQuestionsBtn got clicked 
    document.getElementById('hardQuestionsBtn').addEventListener('click', function() {
      getHardQuestions();
      scrollToTop();
    });

    // answerForm EventListener submit
    document.getElementById('answerForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent default form submission

      sectionEndTimes[currentDifficultyIndex] = new Date(); // Record end time for the current section

      const timeTaken = (sectionEndTimes[currentDifficultyIndex] - sectionStartTimes[currentDifficultyIndex]) / 1000;

      // check selectedAnswer with correctAnswer
      for (let i = 0; i < randomQuestions.length; i++) {
        const selectedAnswer = document.querySelector(`input[name="answer${i}"]:checked`);
        if (selectedAnswer) {
          const selectedValue = selectedAnswer.value;
          const correctAnswer = randomQuestions[i].correctedAnswer;

          if (selectedValue === correctAnswer) {
            score++;
          }
        }
      }

      totalScore += score;

      if (currentDifficultyIndex === 0) { // Check if current section is easy questions
        const progressBar = document.getElementById('progressBars');

        // check if score >= 3
        if (score >= 3) {
          document.getElementById('replaceQuestionsBtn').style.display = 'block'; // Show the 'Replace Questions' button
          document.getElementById('submitBtn').style.display = 'none';
        } else {
          // display resultDiv
          questionContainer.innerHTML = '';
          document.getElementById('submitBtn').style.display = 'none';
          resultDiv.innerHTML = 'CS110: Consider attending CS110 for foundational knowledge.';
          progressBar.style.width = '100%';
        }
      }

      if (currentDifficultyIndex === 1) { // Check if current section is medium questions
        const progressBar = document.getElementById('progressBars');

        if (score >= 3) {
          document.getElementById('hardQuestionsBtn').style.display = 'block'; // Show the 'Replace Questions' button
          document.getElementById('submitBtn').style.display = 'none';
        } else {
          questionContainer.innerHTML = '';
          document.getElementById('submitBtn').style.display = 'none';
          progressBar.style.width = '100%';
          resultDiv.innerHTML = 'CS110: You might benefit from attending CS110 to acquire additional foundational knowledge.';
        }
      }

      if (currentDifficultyIndex === 2) { // Check if current section is hard questions
        const progressBar = document.getElementById('progressBars');

        if (score >= 3) {
          questionContainer.innerHTML = '';
          document.getElementById('submitBtn').style.display = 'none';
          resultDiv.innerHTML = "You've passed, so there's no need for you to enroll in CS110 or CS111.";
          progressBar.style.width = '100%';
        } else {
          questionContainer.innerHTML = '';
          document.getElementById('submitBtn').style.display = 'none';
          resultDiv.innerHTML = 'CS111: You should consider taking CS111 for more advanced topics';
          progressBar.style.width = '100%';
        }

      }
      // alert score
      alert(`Your score for this section is: ${score}/5 and took ${timeTaken}s`);
    });
  </script>

</body>

</html>