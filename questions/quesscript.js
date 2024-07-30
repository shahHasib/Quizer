document.addEventListener("DOMContentLoaded", function () {
    const playNowButton = document.getElementById("play-now");
    const quizPage = document.getElementById("quiz-page");
    const startPage = document.getElementById("start-page");
    const questionElement = document.getElementById("question");
    const options = document.querySelectorAll(".option");
    const timerElement = document.getElementById("time-left");
    const scoreElement = document.getElementById("score");
    const leaderboard = document.getElementById("leaderboard");
    const music = new Audio('path/to/music.mp3'); // replace with actual music file path

    let currentQuestionIndex = 0;
    let score = 0;
    let timer;
    let questions = [];

    const fetchQuestions = async () => {
        const response = await fetch('https://opentdb.com/api.php?amount=10&category=18&type=multiple');
        const data = await response.json();
        return data.results.map(question => ({
            text: decodeURIComponent(question.question),
            options: shuffleArray([
                decodeURIComponent(question.correct_answer),
                ...question.incorrect_answers.map(answer => decodeURIComponent(answer))
            ]),
            correctOption: decodeURIComponent(question.correct_answer)
        }));
    };

    const shuffleArray = (array) => {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
        return array;
    };

    const startQuiz = async () => {
        startPage.style.display = "none";
        quizPage.style.display = "block";
        music.play();
        questions = await fetchQuestions();
        currentQuestionIndex = 0;
        score = 0;
        scoreElement.textContent = score;
        showQuestion(questions[currentQuestionIndex]);
    };

    const showQuestion = (question) => {
        questionElement.textContent = question.text;
        options.forEach((button, index) => {
            button.textContent = question.options[index];
            button.onclick = () => selectAnswer(question.options[index], question.correctOption);
        });
        startTimer();
    };

    const startTimer = () => {
        let timeLeft = 10;
        timerElement.textContent = timeLeft;
        timer = setInterval(() => {
            timeLeft--;
            timerElement.textContent = timeLeft;
            if (timeLeft === 0) {
                clearInterval(timer);
                currentQuestionIndex++;
                if (currentQuestionIndex < questions.length) {
                    showQuestion(questions[currentQuestionIndex]);
                } else {
                    endQuiz();
                }
            }
        }, 1000);
    };

    const selectAnswer = (selectedOption, correctOption) => {
        clearInterval(timer);
        if (selectedOption === correctOption) {
            score++;
            scoreElement.textContent = score;
        }
        currentQuestionIndex++;
        if (currentQuestionIndex < questions.length) {
            showQuestion(questions[currentQuestionIndex]);
        } else {
            endQuiz();
        }
    };

    const endQuiz = () => {
        music.pause();
        quizPage.style.display = "none";
        startPage.style.display = "block";
        saveScore();
        displayLeaderboard();
    };

    const saveScore = () => {
        const name = prompt("Enter your name:");
        const leaderboardData = JSON.parse(localStorage.getItem("leaderboard")) || [];
        leaderboardData.push({ name, score });
        localStorage.setItem("leaderboard", JSON.stringify(leaderboardData));
    };

    const displayLeaderboard = () => {
        const leaderboardData = JSON.parse(localStorage.getItem("leaderboard")) || [];
        leaderboard.innerHTML = "<h2>Leaderboard</h2>";
        leaderboardData.sort((a, b) => b.score - a.score);
        leaderboardData.forEach(entry => {
            const div = document.createElement("div");
            div.textContent = `${entry.name}: ${entry.score}`;
            leaderboard.appendChild(div);
        });
    };

    playNowButton.addEventListener("click", startQuiz);
    displayLeaderboard();
});
