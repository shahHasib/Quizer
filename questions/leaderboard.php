<?php
include('../registerpage/db_connection.php'); // Ensure this path is correct

// Fetch leaderboard data
$sql = "SELECT username, score FROM leaderboard ORDER BY score DESC LIMIT 10";
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
            width: 100%;
        }
        table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table th, table td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 10px;
}

table th {
    background-color: #003366;
    color: #ffffff;
}

table tr:hover {
    background-color: #f1f1f1;
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
            <th colspan='3'>Rank</th>
            <th colspan='3'>Username</th>
            <th colspan='3'>Score</th>
        </tr>
        <?php
      
        if ($result->num_rows > 0) {
            $rank = 1;
            
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td class='rank' colspan='3'>" . $rank . "</td>";
                echo "<td class='username'colspan='3'>" . htmlspecialchars($row['username']) . "</td>";
                echo "<td class='score'colspan='3'>" . htmlspecialchars($row['score']) . "</td>";
                echo "</tr>";
                if($rank <= 10){
                    $rank++;
                }
               
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
