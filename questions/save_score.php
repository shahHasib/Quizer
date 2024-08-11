<?php
include('../registerpage/db_connection.php'); // Ensure this path is correct

// Check if POST variables are set
if (isset($_POST['user']) && isset($_POST['score'])) {
    $user = $_POST['user'];
    //$score = $_POST['score'];

    // Prepare and execute SQL query
    $sql = "INSERT INTO leaderboard (username) VALUES (?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("s", $user);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Score saved successfully.";
        } else {
            echo "Error saving score.";
        }

        $stmt->close();
    } else {
        echo "Error preparing statement.";
    }
} else {
    echo "User and score are required.";
}

$conn->close();
?>
