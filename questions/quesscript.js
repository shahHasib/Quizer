document.addEventListener('DOMContentLoaded', () => {
    const startPage = document.getElementById('start-page');
    const quizPage = document.getElementById('quiz-page');
    const endPage = document.getElementById('end-page');
    const nameModal = document.getElementById('name-modal');
    const closeModal = document.querySelector('.close');
    const submitScoreButton = document.getElementById('submit-score');
    const usernameInput = document.getElementById('username');
    const pauseButton = document.getElementById('pause-button');
    const restartButton = document.getElementById('restart-button');
    const backButton = document.getElementById('back-button');
    const timerElement = document.getElementById('time-left');
    const options = document.getElementById('options');
    const loader = document.getElementById('loader');
    const scoreElement = document.getElementById('score');
    const music = new Audio("../resources/play.mp3");
    const sc=document.querySelector('#final-score');

    let questions = [];
    let currentQuestionIndex = 0;
    let score = 0;
    let timer;
    let isPaused = false;

    async function fetchTriviaQuestions(category, level, amount = 10) {
        loader.style.display = 'flex'; // Show the loader
        const url = `https://opentdb.com/api.php?amount=${amount}&category=${category}&difficulty=${level}&type=multiple`;
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
        music.play();
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
            button.addEventListener('click', () => handleOptionClick(option));
            options.appendChild(button);
        });

        startTimer();
    }

    function handleOptionClick(selectedOption) {
        const correctAnswer = questions[currentQuestionIndex].correct_answer;

        // Highlight buttons based on correctness
        document.querySelectorAll('.option').forEach(btn => {
            if (btn.textContent === correctAnswer) {
                btn.style.backgroundColor = 'green'; // Green for correct answer
            } else if (btn.textContent === selectedOption) {
                btn.style.backgroundColor = 'red'; // Red for incorrect answer
            }
        });

        if (selectedOption === correctAnswer) {
            score += 10;
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

    async function submitScore(username, score) {
        try {
            const response = await fetch('save_score.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: new URLSearchParams({
                    username: username,
                    score: score
                })
            });
            const result = await response.json();
            if (result.success) {
                addScoreToLeaderboard(username, score);
                nameModal.style.display = 'none'; // Hide the modal
                usernameInput.value = ''; // Clear the input field
            } else {
                alert(result.message);
            }
        } catch (error) {
            console.error('Error submitting score:', error);
        }
    }

   
    async function loadLeaderboard() {
        try {
            const response = await fetch('./leaderboard.php');
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            const data = await response.json();
            if (Array.isArray(data)) {
                leaderboardList.innerHTML = ''; // Clear previous leaderboard
                data.forEach(entry => {
                    const listItem = document.createElement('li');
                    listItem.textContent = `${entry.username}: ${entry.score}`;
                    leaderboardList.appendChild(listItem);
                });
            } else {
                console.error('Unexpected data format:', data);
            }
        } catch (error) {
            console.error('Error fetching leaderboard:', error);
        }
    }

    submitScoreButton.addEventListener('click', () => {
        const username = usernameInput.value.trim();
        if (username) {
           // submitScore(username, score);
        } else {
            alert('Please enter your name!');
            return false;
        }
    });

    closeModal.addEventListener('click', () => {
        nameModal.style.display = 'none';
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
        window.location.href = '../homepage/index.php'; 
    });

     sc.value=scoreElement;

    function getQueryParams() {
        const params = new URLSearchParams(window.location.search);
        return {
            category: params.get('category'),
            grade: params.get('grade'),
            level: params.get('level'),
            type: params.get('type')
        };
    }

    const { category, grade, level} = getQueryParams();

    fetchTriviaQuestions(category, level, grade);
});
