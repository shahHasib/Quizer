<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Game</title>
    <link rel="stylesheet" href="ques.css">
</head>

<?php 
if(isset($_SESSION['username'])){
    header("Location:../registerpage/register.html");
    exit();
}
else{
    
}

?>
<body>
    <header>
    
        <?php include('../partials/header.php'); ?>
    </header>
    <div class="container">
        <div id="start-page">
            <button id="err"></button>
        </div>
        
        <div id="quiz-page" style="display:none;">
            
            <div id="question-container">
                <h2 id="question"></h2>
                <div id="options"></div>
                <div id="timer">Time left: <span id="time-left">5</span>s</div>
            </div>
            <button id="pause-button">Pause</button>
            <button id="restart-button">Restart</button>
            <button id="back-button">Back</button>
            <div id="scoreboard">Score: <span id="score">0</span></div>
        </div>
        <div id="end-page" style="display:none;">
           
            <!-- Modal -->
            <div id="name-modal" class="modal">
                <div class="modal-content">
                    <form action="./save_score.php" method="post">
                    <span class="close">&times;</span>
                    <h2>Enter Your Name</h2>
                    Your score is :<p id="final-score"></p>
                    <input type="text" id="username" placeholder="Enter your name" name="user" />
                    <button id="submit-score" type="submit">Submit Score</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Loader -->
        <div id="loader" class="loader" style="display:block;">
            <div class="spinner"></div>
            <p>Loading...</p>
        </div>
    </div>
    <script src="quesscript.js" defer></script>
</body>
</html>
