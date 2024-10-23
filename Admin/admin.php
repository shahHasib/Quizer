<?php

include('../registerpage/db_connection.php');

// Get total users
function getTotalUsers() {
    global $conn;
    $sql = "SELECT COUNT(*) as total_users FROM users WHERE admin='0'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo $row['total_users'];
}

// Fetch users for management
function getUsers() {
    global $conn;
    $sql = "SELECT * FROM users WHERE admin='0';";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['username']}</td>
            <td>{$row['email']}</td>
            <td>
               
                <button onclick=\"deleteUser({$row['id']})\">Delete User</button>
            </td>
        </tr>";
    }
}

// Fetch leaderboard for management
function getLeaderboard() {
    global $conn;
    $sql = "SELECT * FROM leaderboard ORDER BY score DESC";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['username']}</td>
            <td>{$row['score']}</td>
            <td>
                
                <button onclick=\"deleteLeaderboard({$row['id']})\">Delete</button>
            </td>
        </tr>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzer Admin Panel</title>
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>
    <div class="admin-container">
        <!-- Header -->
        <header>
            <h1>Quizzer </h1>
            <nav>
                <ul>
                    <li><a href="#leaderboard_management">Leaderboard Management</a>
                </li>
           <li>        
          <?php
          session_start();
          if (!isset($_SESSION['admin_logged_in'])) {
            header('Location: login.php');
            exit();
          }
          if (isset($_SESSION['username'])) {
              echo '<h6 class="userName" style="font-size:20pt;">Hi, ' . htmlspecialchars($_SESSION['username']) . '</h6>';
              echo '<a href="../homepage/logout.php"  class="logout"><img src="../resources/exit.png" alt="" title="logout" style="height: 9vh;border:noen;border-radius:50%;overflow:hidden;outline:none;padding:10px;"></a>';
          } else {
              echo '<a href="../registerpage/login.html" id="signin">Login</a>';
          }
          ?>
        </li>
        </ul>
            </nav>

        </header>

        <!-- Main content -->
        <main>
            <!-- Dashboard Section -->
            <section id="dashboard">
                <h2>Dashboard</h2>
                <div class="dashboard-info">
                    <div>Total Users: <?php echo getTotalUsers(); ?></div>
                </div>
            </section>

            <!-- Manage Users Section -->
            <section id="manage_users">
                <h2>Manage Users</h2>
                <table>
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php getUsers(); ?>
                    </tbody>
                </table>
            </section>
           
            <section id="leaderboard_management">
                <h2>Leaderboard Management</h2>
                <table>
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Score</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php getLeaderboard(); ?>
                    </tbody>
                </table>
            </section>
        </main>

       
        <footer>
            <p>&copy; 2024 Quizzer Admin Panel</p>
        </footer>
    </div>
    <script src="admin_script.js"></script>
</body>
</html>
