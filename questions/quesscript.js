document.addEventListener('DOMContentLoaded', () => {
    const startPage = document.getElementById('start-page');
    const quizPage = document.getElementById('quiz-page');
    const endPage = document.getElementById('end-page');
    const nameModal = document.getElementById('name-modal');
    const closeModal = document.querySelector('.close');
    const submitScoreButton = document.getElementById('submit-score');
    const usernameInput = document.getElementById('username');
    const finalScoreElement = document.getElementById('final-score');
    const leaderboardList = document.getElementById('leaderboard-list');
    const pauseButton = document.getElementById('pause-button');
    const restartButton = document.getElementById('restart-button');
    const backButton = document.getElementById('back-button');
    const timerElement = document.getElementById('time-left');
    const options = document.getElementById('options');
    const loader = document.getElementById('loader');
    const scoreElement = document.getElementById('score');

    let questions = [];
    let currentQuestionIndex = 0;
    let score = 0;
    let timer;
    let isPaused = false;

    async function fetchTriviaQuestions(category = 18, difficulty = 'easy', amount = 10) {
        loader.style.display = 'flex'; // Show the loader
        const url = `https://opentdb.com/api.php?amount=${amount}&category=${category}&difficulty=${difficulty}&type=multiple`;
        try {
            const response = await fetch(url);
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            const data = await response.json();
            questions = data.results;
            startQuiz();
        } catch (error) {
            console.error('There has been a problem with your fetch operation:', error);
        } finally {
            loader.style.display = 'none'; // Hide the loader
        }
    }

    function startQuiz() {
        startPage.style.display = 'none';
        quizPage.style.display = 'block';
        endPage.style.display = 'none';
        score = 0;
        currentQuestionIndex = 0;
        scoreElement.textContent = score;
        loadQuestion();
    }

    function loadQuestion() {
        if (currentQuestionIndex >= questions.length) {
            // Quiz finished
            quizPage.style.display = 'none';
            endPage.style.display = 'block';
            finalScoreElement.textContent = score;
            nameModal.style.display = 'block'; // Show the modal for name entry
            return;
        }

        const question = questions[currentQuestionIndex];
        document.getElementById('question').textContent = question.question;
        const allOptions = [...question.incorrect_answers, question.correct_answer];
        shuffleArray(allOptions);
        options.innerHTML = ''; // Clear previous options

        allOptions.forEach(option => {
            const button = document.createElement('button');
            button.textContent = option;
            button.classList.add('option');
            button.addEventListener('click', () => handleOptionClick(button, option));
            options.appendChild(button);
        });

        startTimer();
    }

    function handleOptionClick(button, selectedOption) {
        const correctAnswer = questions[currentQuestionIndex].correct_answer;

        // Highlight buttons based on correctness
        document.querySelectorAll('.option').forEach(btn => {
            if (btn.textContent === correctAnswer) {
                btn.style.backgroundColor = 'lightgreen'; // Green for correct answer
            } else if (btn.textContent === selectedOption) {
                btn.style.backgroundColor = 'salmon'; // Red for incorrect answer
            }
        });

        // Check if the selected option is correct and update the score
        if (selectedOption === correctAnswer) {
            score++;
            scoreElement.textContent = score;
        }

        // Disable buttons after selection
        document.querySelectorAll('.option').forEach(btn => btn.disabled = true);

        setTimeout(() => {
            currentQuestionIndex++;
            loadQuestion();
        }, 1000); // Delay to allow user to see the result
    }

    function startTimer() {
        let timeLeft = 30; // Set timer for 30 seconds
        timerElement.textContent = timeLeft;
        clearInterval(timer);
        timer = setInterval(() => {
            if (!isPaused) {
                timeLeft--;
                timerElement.textContent = timeLeft;
                if (timeLeft <= 0) {
                    clearInterval(timer);
                    currentQuestionIndex++;
                    loadQuestion();
                }
            }
        }, 1000);
    }

    function shuffleArray(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
    }

    function addScoreToLeaderboard(username, score) {
        const listItem = document.createElement('li');
        listItem.textContent = `${username}: ${score}`;
        leaderboardList.appendChild(listItem);
    }

    submitScoreButton.addEventListener('click', () => {
        const username = usernameInput.value.trim();
        if (username) {
            addScoreToLeaderboard(username, score);
            nameModal.style.display = 'none'; // Hide the modal
            usernameInput.value = ''; // Clear the input field
        } else {
            alert('Please enter your name!');
        }
    });

    closeModal.addEventListener('click', () => {
        nameModal.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target === nameModal) {
            nameModal.style.display = 'none'; 
        }
    });

    pauseButton.addEventListener('click', () => {
        isPaused = !isPaused;
        if (isPaused) {
            pauseButton.textContent = 'Resume';
        } else {
            pauseButton.textContent = 'Pause';
            startTimer(); // Resume timer
        }
    });

    restartButton.addEventListener('click', () => {
        startQuiz(); // Restart the quiz
    });

    backButton.addEventListener('click', () => {
        window.location.href = '../homepage/index.html'; 
    });

    fetchTriviaQuestions(); 
});
