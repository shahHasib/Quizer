<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit();
}
include('../registerpage/db_connection.php');

if (isset($_GET['id'])) {
    $leaderboard_id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM leaderboard WHERE id = ?");
    $stmt->bind_param("i", $leaderboard_id);

    if ($stmt->execute()) {
        echo "Leaderboard entry deleted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
}
?>
