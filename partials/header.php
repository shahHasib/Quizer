<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Headers</title>

  <style>
   :root {
    --main-color: #B798F6;
    --form-bg: #fff;
    --text-color: #333;
    --input-bg: #f0f0f0;
    --border: #ccc;
    --button-bg: var(--main-color);
    --button-hover-bg: #a57ae5;
    --navbar-bg: rgba(0, 0, 0, 0.7);
    --navbar-text-color: #fff;
}

    * {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      color: black;
      font-size: 15pt;
      background-color: var(--main-color);
      height: 100vh;
    }

    select {
      border: none;
      background-color: var(--input-bg);
  color: var(--text-color);
      font-size: 20px;
    }

    option {
      background-color: var(--input-bg);
      font-variant: small-caps;
      padding: 5px 20px;
      text-align: center;
      border: 2px solid white;
    }

    header {
      width: 100%;
    }

    body header nav {
      top:0;
      
      height: 10vh;
      background-color: var(--navbar-bg);
      color: var(--navbar-text-color);
      display: flex;
      justify-content: space-around;
      align-items: center;
      width: 100%;
      position: fixed;
      z-index: 1000;
      border-bottom: 2px solid white;
    }

    #signin {
      background-color: var(--button-bg);
      color: white;
      font-size: 20px;
      border-radius: 1vh;
      padding: 0.5vh 1.5vw;
      line-height: 1.5;
      font-weight: 500;
    }

    #signin:hover {
      background: var(--button-hover-bg);
      color: #dadada;
    }

    #home img {
      height: 6vh;
      align-items: center;
      color: white;
      border: none;
    }


    nav a:hover {
      border-bottom: 2px solid white;
    }

    nav .logo {
      height: 10vh;
      background-size: cover;

    }

    .logout {
      margin-left: 20px;
      color: white;
      cursor: pointer;
      background-color:var(--main-color);
    }
  </style>
</head>

<body>
  <header>
    <nav>
      <div class="userprofile">
        <img src="../resources/logo.png" alt="image" class="logo" />

      </div>
      <div class="links">
        <a href="../homepage/index.php" id="home"><img src="../resources/home.png" alt="" /></a>
      </div>
      
      <div class="user-status" style="display:flex;align-items:center;">
        <?php
          session_start();
          if (isset($_SESSION['username'])) {
              echo '<h6 class="userName" style="font-size:20px;">Hi, ' . htmlspecialchars($_SESSION['username']) . '</h6>';
              echo '<a href="../homepage/logout.php"  class="logout"><img src="../resources/exit.png" alt="" style="height: 6vh;"></a>';
          } else {
              echo '<a href="../registerpage/register.html" id="signin">Login</a>';
          }
          ?>

      </div>
      

      <div class="menu">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>
    </nav>
  </header>


  <script>
    var hamberger = document.querySelector(".menu");
    var menu = document.querySelector(".links");
    var color = document.querySelector("#color");
    hamberger.addEventListener('click', () => {
      menu.classList.toggle("active");
      // Add any class toggle animations for bars here if desired
    });

    color.addEventListener('change', (e) => {
      document.documentElement.style.setProperty('--main-color', e.target.value);
    });
  </script>
</body>

</html>