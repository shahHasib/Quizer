<?php
session_start();
include('../registerpage/db_connection.php');

// Check if user is logged in
if (!isset($_SESSION['admin_logged_in'])) {
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Unauthorized access']);
    exit();
}

// Check if 'id' parameter is passed and the necessary data to update is provided
if (isset($_POST['id']) && isset($_POST['username']) && isset($_POST['email'])) {
    $userId = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Prepare and execute the update query
    $sql = "UPDATE users SET username = ?, email = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $username, $email, $userId);
    
    // Execute the statement
    if ($stmt->execute()) {
        // If the update was successful
        header('Content-Type: application/json');
        echo json_encode(['success' => 'User details updated successfully']);
    } else {
        // If the query execution fails
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Failed to update user details']);
    }
} else {
    // If required parameters are missing
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Missing required parameters']);
}
?>
