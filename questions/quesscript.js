document.addEventListener('DOMContentLoaded', () => {
    const startPage = document.getElementById('start-page');
    const quizPage = document.getElementById('quiz-page');
    const endPage = document.getElementById('end-page');
    const nameModal = document.getElementById('name-modal');
    const closeModal = document.querySelector('.close');
    var Errortext=document.getElementById("err");
    const submitScoreButton = document.getElementById('submit-score');
    const usernameInput = document.getElementById('username');
    const finalScoreElement = document.getElementById('final-score');
    const pauseButton = document.getElementById('pause-button');
    const restartButton = document.getElementById('restart-button');
    const backButton = document.getElementById('back-button');
    const timerElement = document.getElementById('time-left');
    const options = document.getElementById('options');
    const loader = document.getElementById('loader');
    const scoreElement = document.getElementById('score');
    const music = new Audio("../resources/play.mp3");
    
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
            Errortext.innerHTML='Error : '+ error+"\nPlease check your internet connection.";
        }
        
        finally {
            loader.style.display = 'none'; // 
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
            finalScoreElement.value = score;
            nameModal.style.display = 'block'; // Show the modal for name entry
            return;
        }
        let num=currentQuestionIndex+1;
        const question = questions[currentQuestionIndex];
        document.getElementById('question').innerHTML = "Q"+num+". "+question.question;
        const allOptions = [...question.incorrect_answers, question.correct_answer];
        shuffleArray(allOptions);
        options.innerHTML = ''; 

        allOptions.forEach(option => {
            const button = document.createElement('button');
            button.innerHTML = option;
            button.classList.add('option');
            button.addEventListener('click', () => handleOptionClick(button, option));
            options.appendChild(button);
        });

        startTimer();
    }

    function handleOptionClick(button, selectedOption) {
        const correctAnswer = questions[currentQuestionIndex].correct_answer;

        
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

        
        document.querySelectorAll('.option').forEach(btn => btn.disabled = true);

        setTimeout(() => {
            currentQuestionIndex++;
            loadQuestion();
        }, 1500); // Delay to allow user to see the result
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

    submitScoreButton.addEventListener('click', () => {
        const username = usernameInput.value.trim();
        if (username) {
            submitScore(username, score);
        } else {
            alert('Please enter your name!');
        }
    });

    closeModal.addEventListener('click', () => {
        nameModal.style.display = 'none';
    });


    restartButton.addEventListener('click', () => {
        startQuiz(); // Restart the quiz
    });

    backButton.addEventListener('click', () => {
        window.location.href = '../homepage/index.html'; 
    });

    function getQueryParams() {
        const params = new URLSearchParams(window.location.search);
        return {
            category: params.get('category'),
            grade: params.get('grade'),
            level: params.get('level'),
            type: params.get('type')
        };
    }

    const { category, grade, level } = getQueryParams();

    fetchTriviaQuestions(category, level, grade);

   
});
