<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <title>DemoTitle</title>
</head>

<body id="home">
    <nav>
      <div class="userprofile">
        <img src="../resources/logo.png" alt="image" class="userImage" />
       
      </div>
      <div class="links">
        <a href="#home">Home</a>
        <a href="#container">Quizes</a>
       
        <a href="../aboutus/about.php">About Us</a>
        <a href="../contacus/contac.php">Feedback</a>
        <!-- </div>
        <div class="colors"> -->
        <!-- <span class="colorName">Color :</span> <select name="color" id="color">

          <option value="red" selected>Red</option>
          <option value="blue">Blue</option>
          <option value="green">Green</option>
          <option value="black">black</option>
          <option value="gray">Gray</option>
          <option value="aqua">Aqua</option>
        </select> -->
      </div>
      <div class="menu">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>
      <div class="user-status">
          <?php
          session_start();
          if (isset($_SESSION['username'])) {
              echo '<h6 class="userName" style="font-size:18px;">Hi, ' . htmlspecialchars($_SESSION['username']) . '</h6>';
              echo '<a href="logout.php"  id="signin">Logout</a>';
          } else {
              echo '<a href="../registerpage/register.html" id="signin">Login</a>';
          }
          ?>
        </div>
    </nav>
  <div class="bg">
  <p class="text">Great collection of <i> Quizes</i> </br> to acquire computer knowledge.</p>
    <img src="../resources/web.jpg" alt="" />
    <button onclick="window.location.href='#container'">Get Started</button>
  </div>

  <div class="container" id="container">
    <div class="intro">
      <div>
        <!-- <h1>Coding quizzes for kids and teens</h1> -->
        
      </div>
      <div class="switchbtn">
        <button class="btnQuizzes">All Practice Quizzes</button>
        <button class="btnLeaderboard">Leaderboard</button>
      </div>
    </div>
    <div class="cards">

      <div class="card" data-category="9" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/general_knowledge.png" alt="General Knowledge img" />
        </div>
        <div class="items">
          <h2>General Knowledge</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="9" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/general_knowledge.png" alt="General Knowledge img" />
        </div>
        <div class="items">
          <h2>General Knowledge</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="9" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/general_knowledge.png" alt="General Knowledge img" />
        </div>
        <div class="items">
          <h2>General Knowledge</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>

      <!-- Entertainment: Books -->
      <div class="card" data-category="10" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/entertainment_books.png" alt="Entertainment Books img" />
        </div>
        <div class="items">
          <h2>Entertainment: Books</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="10" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/entertainment_books.png" alt="Entertainment Books img" />
        </div>
        <div class="items">
          <h2>Entertainment: Books</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="10" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/entertainment_books.png" alt="Entertainment Books img" />
        </div>
        <div class="items">
          <h2>Entertainment: Books</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>

      <!-- Entertainment: Film -->
      <div class="card" data-category="11" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/entertainment_film.png" alt="Entertainment Film img" />
        </div>
        <div class="items">
          <h2>Entertainment: Film</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="11" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/entertainment_film.png" alt="Entertainment Film img" />
        </div>
        <div class="items">
          <h2>Entertainment: Film</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="11" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/entertainment_film.png" alt="Entertainment Film img" />
        </div>
        <div class="items">
          <h2>Entertainment: Film</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>

      <!-- Entertainment: Music -->
      <div class="card" data-category="12" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/entertainment_music.png" alt="Entertainment Music img" />
        </div>
        <div class="items">
          <h2>Entertainment: Music</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="12" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/entertainment_music.png" alt="Entertainment Music img" />
        </div>
        <div class="items">
          <h2>Entertainment: Music</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="12" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/entertainment_music.png" alt="Entertainment Music img" />
        </div>
        <div class="items">
          <h2>Entertainment: Music</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>

      <!-- Entertainment: Musicals & Theatres -->
      <div class="card" data-category="13" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/entertainment_musicals.png" alt="Entertainment Musicals img" />
        </div>
        <div class="items">
          <h2>Entertainment: Musicals & Theatres</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="13" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/entertainment_musicals.png" alt="Entertainment Musicals img" />
        </div>
        <div class="items">
          <h2>Entertainment: Musicals & Theatres</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="13" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/entertainment_musicals.png" alt="Entertainment Musicals img" />
        </div>
        <div class="items">
          <h2>Entertainment: Musicals & Theatres</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <!-- Entertainment: Video Games -->
      <div class="card" data-category="14" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/entertainment_television.png" alt="Entertainment Television img" />
        </div>
        <div class="items">
          <h2>Entertainment: Television</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="14" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/entertainment_television.png" alt="Entertainment Television img" />
        </div>
        <div class="items">
          <h2>Entertainment: Television</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="14" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/entertainment_television.png" alt="Entertainment Television img" />
        </div>
        <div class="items">
          <h2>Entertainment: Television</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <!-- Entertainment: Video Games -->
      <div class="card" data-category="15" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/entertainment_video_games.png" alt="Entertainment Video Games img" />
        </div>
        <div class="items">
          <h2>Entertainment: Video Games</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="15" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/entertainment_video_games.png" alt="Entertainment Video Games img" />
        </div>
        <div class="items">
          <h2>Entertainment: Video Games</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="15" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/entertainment_video_games.png" alt="Entertainment Video Games img" />
        </div>
        <div class="items">
          <h2>Entertainment: Video Games</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>

      <!-- Entertainment: Board Games -->
      <div class="card" data-category="16" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/entertainment_board_games.png" alt="Entertainment Board Games img" />
        </div>
        <div class="items">
          <h2>Entertainment: Board Games</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="16" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/entertainment_board_games.png" alt="Entertainment Board Games img" />
        </div>
        <div class="items">
          <h2>Entertainment: Board Games</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="16" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/entertainment_board_games.png" alt="Entertainment Board Games img" />
        </div>
        <div class="items">
          <h2>Entertainment: Board Games</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>

      <!-- Science & Nature -->
      <div class="card" data-category="17" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/science_nature.png" alt="Science & Nature img" />
        </div>
        <div class="items">
          <h2>Science & Nature</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="17" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/science_nature.png" alt="Science & Nature img" />
        </div>
        <div class="items">
          <h2>Science & Nature</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="17" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/science_nature.png" alt="Science & Nature img" />
        </div>
        <div class="items">
          <h2>Science & Nature</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>

      <!-- Science: Computers -->
      <div class="card" data-category="18" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/computers.png" alt="Science: Computers img" />
        </div>
        <div class="items">
          <h2>Science: Computers</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="18" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/computers.png" alt="Science: Computers img" />
        </div>
        <div class="items">
          <h2>Science: Computers</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="18" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/computers.png" alt="Science: Computers img" />
        </div>
        <div class="items">
          <h2>Science: Computers</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>



      <!-- Science: Mathematics -->
      <div class="card" data-category="19" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/mathematics.png" alt="Science: Mathematics img" />
        </div>
        <div class="items">
          <h2>Science: Mathematics</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="19" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/mathematics.png" alt="Science: Mathematics img" />
        </div>
        <div class="items">
          <h2>Science: Mathematics</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="19" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/mathematics.png" alt="Science: Mathematics img" />
        </div>
        <div class="items">
          <h2>Science: Mathematics</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>

      <!-- Science: Nature -->
      <div class="card" data-category="20" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/mythology.png" alt="Mythology img" />
        </div>
        <div class="items">
          <h2>Mythology</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="20" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/mythology.png" alt="Mythology img" />
        </div>
        <div class="items">
          <h2>Mythology</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="20" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/mythology.png" alt="Mythology img" />
        </div>
        <div class="items">
          <h2>Mythology</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <!-- Science: Technology -->
      <div class="card" data-category="21" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/sports.png" alt="Science: Technology img" />
        </div>
        <div class="items">
          <h2>Sports</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="21" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/sports.png" alt="Science: Technology img" />
        </div>
        <div class="items">
          <h2>Sports</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="21" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/sports.png" alt="Science: Technology img" />
        </div>
        <div class="items">
          <h2>Sports</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <!-- Science: Nature -->
      <div class="card" data-category="22" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/geography.png" alt="Science: Nature img" />
        </div>
        <div class="items">
          <h2>Geography</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="22" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/geography.png" alt="Science: Nature img" />
        </div>
        <div class="items">
          <h2>Geography</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="22" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/geography.png" alt="Science: Nature img" />
        </div>
        <div class="items">
          <h2>Geography</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <!-- Science: Biology -->
      <div class="card" data-category="23" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/history.png" alt="Science: Biology img" />
        </div>
        <div class="items">
          <h2>History</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="23" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/history.png" alt="Science: Biology img" />
        </div>
        <div class="items">
          <h2>History</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="23" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/history.png" alt="Science: Biology img" />
        </div>
        <div class="items">
          <h2>History</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>

      <!-- Politics -->
      <div class="card" data-category="24" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/politics.png" alt="Politics img" />
        </div>
        <div class="items">
          <h2>Politics</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="24" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/politics.png" alt="Politics img" />
        </div>
        <div class="items">
          <h2>Politics</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="24" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/politics.png" alt="Politics img" />
        </div>
        <div class="items">
          <h2>Politics</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <!-- Science: Physics -->
      <div class="card" data-category="25" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/art.png" alt="Science: Physics img" />
        </div>
        <div class="items">
          <h2>Art</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="25" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/art.png" alt="Science: Physics img" />
        </div>
        <div class="items">
          <h2>Art</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="25" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/art.png" alt="Science: Physics img" />
        </div>
        <div class="items">
          <h2>Art</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>

      <!-- Science: Chemistry -->
      <div class="card" data-category="26" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/celebrities.png" alt="Science: Chemistry img" />
        </div>
        <div class="items">
          <h2>Celebrities</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="26" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/celebrities.png" alt="Science: Chemistry img" />
        </div>
        <div class="items">
          <h2>Celebrities</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="26" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/celebrities.png" alt="Science: Chemistry img" />
        </div>
        <div class="items">
          <h2>Celebrities</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>


      <!-- Animals -->
      <div class="card" data-category="27" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/animals.png" alt="Animals img" />
        </div>
        <div class="items">
          <h2>Animals</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="27" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/animals.png" alt="Animals img" />
        </div>
        <div class="items">
          <h2>Animals</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="27" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/animals.png" alt="Animals img" />
        </div>
        <div class="items">
          <h2>Animals</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>

      <!-- Vehicles -->
      <div class="card" data-category="28" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/vehicles.png" alt="Vehicles img" />
        </div>
        <div class="items">
          <h2>Vehicles</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="28" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/vehicles.png" alt="Vehicles img" />
        </div>
        <div class="items">
          <h2>Vehicles</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="28" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/vehicles.png" alt="Vehicles img" />
        </div>
        <div class="items">
          <h2>Vehicles</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>

      <!-- Comics -->
      <div class="card" data-category="29" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/comics.png" alt="Comics img" />
        </div>
        <div class="items">
          <h2>Comics</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="29" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/comics.png" alt="Comics img" />
        </div>
        <div class="items">
          <h2>Comics</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="29" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/comics.png" alt="Comics img" />
        </div>
        <div class="items">
          <h2>Comics</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <!-- Gadgets -->
      <div class="card" data-category="30" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/gadgets.png" alt="Gadgets img" />
        </div>
        <div class="items">
          <h2>Gadgets</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="30" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/gadgets.png" alt="Gadgets img" />
        </div>
        <div class="items">
          <h2>Gadgets</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="30" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/gadgets.png" alt="Gadgets img" />
        </div>
        <div class="items">
          <h2>Gadgets</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <!-- Japanese Anime & Manga -->
      <div class="card" data-category="31" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/anime_manga.png" alt="Japanese Anime & Manga img" />
        </div>
        <div class="items">
          <h2>Japanese Anime & Manga</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="31" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/anime_manga.png" alt="Japanese Anime & Manga img" />
        </div>
        <div class="items">
          <h2>Japanese Anime & Manga</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="31" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/anime_manga.png" alt="Japanese Anime & Manga img" />
        </div>
        <div class="items">
          <h2>Japanese Anime & Manga</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <!-- Cartoons & Animations -->
      <div class="card" data-category="32" data-grade="10" data-level="easy">
        <div class="img">
          <img src="../resources/cartoons_animations.png" alt="Cartoons & Animations img" />
        </div>
        <div class="items">
          <h2>Cartoons & Animations</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Beginner Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="32" data-grade="10" data-level="medium">
        <div class="img">
          <img src="../resources/cartoons_animations.png" alt="Cartoons & Animations img" />
        </div>
        <div class="items">
          <h2>Cartoons & Animations</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Medium Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>
      <div class="card" data-category="32" data-grade="10" data-level="hard">
        <div class="img">
          <img src="../resources/cartoons_animations.png" alt="Cartoons & Animations img" />
        </div>
        <div class="items">
          <h2>Cartoons & Animations</h2>
          <div class="grade">
            <img src="../resources/icons8-graduation-48.png" alt="Grade" /><span>Grade: 10</span>
          </div>
          <div class="level">
            <img src="../resources/icons8-levels-32.png" alt="Level" /><span>Hard Level</span>
          </div>
          <button class="btnPlay">Play Now</button>
        </div>
      </div>


    </div>
    <div id="ld" style="display:none;">
      <?php
  include("../questions/leaderboard.php");
  ?>
    </div>
    <footer>
      <div class="footer-container">
        <div class="footer-links">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="../registerpage/register.html">Login</a></li>
            <li><a href="../aboutus/about.html">About Us</a></li>
            <li><a href="../contacus/conatc.html">Feedback</a></li>
          </ul>
        </div>
        <div class="footer-social">
          <h3>Follow Us</h3></br>
          <a href="https://www.facebook.com/"><img src="../resources/facebook_icon.png" alt="Facebook"></a>
          <a href="https://www.twitter.com/"><img src="../resources/twitter_icon.png" alt="Twitter"></a>
          <a href="https://www.instagram.com/"><img src="../resources/instagram_icon.png" alt="Instagram"></a>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2024 Quizer. All Rights Reserved.</p>
      </div>
    </footer>

    <script src="script.js"></script>


</body>

</html>