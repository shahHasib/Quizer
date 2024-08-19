<?php
include('../registerpage/db_connection.php'); // Ensure this path is correct

$dom = new DOMDocument();
@$dom->loadHTMLFile('./question.php'); // Suppress warnings due to malformed HTML

// Find the input element by its ID
$inputElement = $dom->getElementById('final-score');
$inputValue = $inputElement->getAttribute('value');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['user']);
    $score = $inputValue;

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
