let currentQuestionIndex = 0;
let score = 0;
let timer;
const totalQuestions = 10;
const timePerQuestion = 30; // 30 seconds
let questions = []; // Array to store fetched questions

function fetchQuizData(subject) {
  const subjectMap = {
    'computer science': 18, // Example category ID
    'entertainment': 11 // Example category ID
  };

  const categoryId = subjectMap[subject.toLowerCase()];
  if (!categoryId) {
    console.error('Invalid subject');
    return;
  }

  fetch(`https://opentdb.com/api.php?amount=${totalQuestions}&category=${categoryId}&difficulty=medium&type=multiple`)
    .then(response => response.json())
    .then(data => {
      questions = data.results;
      displayQuiz(); // Start displaying questions
    })
    .catch(error => {
      console.error(`Error: ${error}`);
    });
}

function displayQuiz() {
  if (currentQuestionIndex >= totalQuestions) {
    displayScore();
    return;
  }

  const questionData = questions[currentQuestionIndex];
  const questionContainer = document.getElementById('question-container');
  
  if (questionContainer) {
    // Set question text
    const questionElement = questionContainer.querySelector('.question');
    questionElement.textContent = questionData.question;

    // Get buttons for options
    const buttons = questionContainer.querySelectorAll('.options button');
    
    // Combine correct and incorrect answers and shuffle
    const allOptions = [questionData.correct_answer, ...questionData.incorrect_answers];
    allOptions.sort(() => Math.random() - 0.5);

    buttons.forEach((button, i) => {
      if (i < allOptions.length) {
        button.textContent = allOptions[i];
        button.onclick = () => handleAnswer(button.textContent, questionData.correct_answer);
      }
    });

    startTimer();
  }
}

function handleAnswer(selectedOption, correctAnswer) {
  if (selectedOption === correctAnswer) {
    score++;
  }
  clearInterval(timer); // Stop the timer
  currentQuestionIndex++;
  setTimeout(displayQuiz, 1000); // Wait for 1 second before displaying the next question
}

function startTimer() {
  let timeLeft = timePerQuestion;
  const timerElement = document.getElementById('timer');
  timerElement.textContent = `Time left: ${timeLeft} seconds`;

  timer = setInterval(() => {
    timeLeft--;
    timerElement.textContent = `Time left: ${timeLeft} seconds`;
    
    if (timeLeft <= 0) {
      clearInterval(timer);
      currentQuestionIndex++;
      setTimeout(displayQuiz, 1000); // Move to the next question after 1 second
    }
  }, 1000);
}

function displayScore() {
  const quizContainer = document.getElementById('quiz');
  quizContainer.innerHTML = `<h2>Your Score: ${score}/${totalQuestions}</h2>`;
}

// Call the function to start the quiz with a specific subject
fetchQuizData('computer science'); // Replace with the desired subject in lowercase
