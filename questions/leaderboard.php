<?php
include('../registerpage/db_connection.php'); // Ensure this path is correct

// Fetch leaderboard data
$sql = "SELECT username, score FROM leaderboard ORDER BY score DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <style>
        header {
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            margin: 20px auto;
            border-collapse: collapse;
            text-align:center;
        }
        th, td {
            padding:10px 20px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .rank {
            font-weight: bold;
            color: #4CAF50;
        }
        .username {
            font-weight: bold;
        }
        .score {
            color: #555;
        }
    </style>
</head>
<body>

<header>
    <h1>Leaderboard</h1>
</header>

<div class="contains">
    <table>
        <tr>
            <th>Rank</th>
            <th>Username</th>
            <th>Score</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            $rank = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td class='rank'>" . $rank . "</td>";
                echo "<td class='username'>" . htmlspecialchars($row['username']) . "</td>";
                echo "<td class='score'>" . htmlspecialchars($row['score']) . "</td>";
                echo "</tr>";
                $rank++;
            }
        } else {
            echo "<tr><td colspan='3'>No data available</td></tr>";
        }
        ?>
    </table>
</div>

<?php
$result->free();
$conn->close();
?>

</body>
</html>
