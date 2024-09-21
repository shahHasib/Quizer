<?php
session_start(); // Start the session
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate that passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match!";
        exit;
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL statement
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    // Execute the statement
    if ($stmt->execute()) {
        // Store user information in session
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        // Redirect to homepage
        header("Location: ../homepage/index.php");
        exit;
    } else {
        echo "Error: " . $stmt->error; // More specific error
    }

    // Close the statement and connection
    $stmt->close();
}

$conn->close();
?>
