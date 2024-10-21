<?php
include('../registerpage/db_connection.php'); // Ensure this path is correct




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['user']);
    $score = trim($_POST['score']);

    if (empty($username)) {
        echo json_encode(['success' => false, 'message' => 'Invalid input']);
        exit;
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO leaderboard (username, score) VALUES (?, ?)");
    if ($stmt === false) {
        error_log("Error preparing statement: " . $conn->error);
        echo json_encode(['success' => false, 'message' => 'Database error']);
        exit;
    }
    $stmt->bind_param("si", $username, $score);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: ../homepage/index.php");
    } 
    else{
        
    }

    
    $stmt->close();
    $conn->close();
}
?>
