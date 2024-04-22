<?php
$pageTitle = "Exam";
require_once 'testheader.php';
include 'questions2.php';
?>

<!-- Main -->
<main>




  <!--Main Container-->
  <div class="container">

    <!--Quick Start-->
    <div id=guidelinesDiv class="container shadow p-3 my-5 bg-body-tertiary rounded">
      <div id="quickStartBtn" class="d-grid gap-2 justify-content-md-start">

        <div>
          <p> Welcome to the Central Washington University Self-Placement Exam for the Computer Science department. This exam is designed to help assess your current level of proficiency in computer science concepts and programming skills. Whether you're a seasoned coder or just beginning your journey in computer science, this exam will assist you and your academic advisors in determining the appropriate level of coursework for your skill level.
          </p>
          <p>This exam consists of multiple-choice questions covering various topics from the introductory programming courses offered here at Central. This exam is designed to test your knowledge in areas such as variables, conditionals, basic program structure, object-oriented programming, and more. All exam questions will be written with the Java programming language in mind, but the aim of this exam is to gather your general programming knowledge more than anything else.
          </p>
          <p>Before you begin, ensure that you have a quiet and distraction-free environment to concentrate. Take your time to read each question carefully and select the answer that you believe is correct. Once you complete the exam, your results will be used to recommend appropriate courses for your skill level. Remember, the goal is to help you succeed and thrive here at Central. Good luck, and let's get started!
          </p>

        </div>
        <div class="d-grid gap-1 justify-content-md-center">
          <button class="btn btn-lg btn-bd-red" type="button" id="startBtn">Quick Start</button>
        </div>
      </div>
    </div>


    <!-- Display User info-->
    <div style="display:none;" class="container shadow p-3 my-5 bg-body-tertiary rounded">
      <h1 id="userInfo"></h1>
    </div>



    <!--Questionnaire Div-->
    <h2 id="levelDifficulty"></h2>
    <div id=questionnaireDiv style="display:none" class="container shadow p-3 my-5 bg-body-tertiary rounded">

      <div>
        <!-- Content for the other column -->
        <h2 class="d-none d-md-block">Progress</h2>
        <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">

          <div id="progressBars" class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 0%"></div>
        </div>
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

      <button type="submit" class="btn btn-lg btn-bd-red" id="submitBtn" style="display:none;">Submit</button> <br />

      <button class="btn btn-lg btn-bd-red" type="button" id="replaceQuestionsBtn" style="display:none;">Next (medium Questions)</button>

      <button class="btn btn-lg btn-bd-red" type="button" id="hardQuestionsBtn" style="display:none;">Next (Hard Questions)</button>

    </form>

    <!--Form-->
    <div id="saveForm" style="display:none;">
      <h1 class="h3 mb-3 fw-normal">Please fill out the form below, and your information will be sent to your academic advisor. This will help us recommend the proper class to start your journey here at Central.</h1>
      <div class="form-signin w-100 m-auto">
        <form>
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
            <label for="floatingInput">First Name</label>
          </div>

          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="Last Name">
            <label for="floatingInput">Last Name</label>
          </div>

          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>

          <div class="form-floating">
            <input type="date" class="form-control" id="floatingPassword" placeholder="date of birth">
            <label for="floatingPassword">Date of Birth</label>
          </div><br />

          <button class="btn btn-lg btn-dark w-100 py-2" type="submit">Sign Up</button>
        </form>
      </div>
    </div>
  </div>

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
    displayUser.innerHTML = `Welcome ${userInfo}`;


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
          resultDiv.innerHTML = 'Your Course Recommendation: CS110';
          progressBar.style.width = '100%';
          document.getElementById('saveForm').style.display = 'block';

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
          resultDiv.innerHTML = 'Your Course Recommendation: CS110';
          document.getElementById('saveForm').style.display = 'block';
        }
      }

      if (currentDifficultyIndex === 2) { // Check if current section is hard questions
        const progressBar = document.getElementById('progressBars');

        if (score >= 3) {
          questionContainer.innerHTML = '';
          document.getElementById('submitBtn').style.display = 'none';
          resultDiv.innerHTML = "See Academic Advisor";
          progressBar.style.width = '100%';
        } else {
          questionContainer.innerHTML = '';
          document.getElementById('submitBtn').style.display = 'none';
          resultDiv.innerHTML = 'Your Course Recommendation: CS111';
          progressBar.style.width = '100%';
          document.getElementById('saveForm').style.display = 'block';
        }

      }
      // alert score
      alert(`Your score for this section is: ${score}/5 and took ${timeTaken}s`);
    });
  </script>
  <!--End of Main-->

  <?php
  // Include footer.
  require_once 'testfooter.php';
  ?>