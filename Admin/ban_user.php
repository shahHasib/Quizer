<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit();
}
include('../registerpage/db_connection.php');

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $stmt = $conn->prepare("UPDATE users SET banned = 1 WHERE id = ?");
    $stmt->bind_param("i", $user_id);

    if ($stmt->execute()) {
        echo "User banned successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
}
?>
