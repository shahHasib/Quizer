<?php
include('../registerpage/db_connection.php'); // Ensure this path is correct

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $score = $_POST['score'];

    // Validate input
    if (empty($username) || !is_numeric($score)) {
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
        echo json_encode(['success' => true]);
    } else {
        error_log("Error executing statement: " . $stmt->error);
        echo json_encode(['success' => false, 'message' => 'Database error']);
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
