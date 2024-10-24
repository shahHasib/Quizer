<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit();
}
include('../registerpage/db_connection.php');

$message = ""; // Variable to hold alert message
$alertType = ""; // Variable to hold alert type

if (isset($_GET['id'])) {
    $leaderboard_id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM leaderboard WHERE id = ?");
    $stmt->bind_param("i", $leaderboard_id);

    if ($stmt->execute()) {
        $message = "Leaderboard entry deleted successfully!";
        $alertType = "success"; // For success alert
    } else {
        $message = "Error: " . $conn->error;
        $alertType = "error"; // For error alert
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Delete Leaderboard Entry</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Overlay Background */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display: none; /* Hidden by default */
            justify-content: center;
            align-items: center;
            z-index: 999;
        }

        /* Alert Box */
        .alert-box {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: fadeIn 0.5s;
            width: 300px;
        }

        /* Heading Style */
        .alert-box h2 {
            margin: 0 0 10px;
            color: #333;
        }

        /* Message Style */
        .alert-box p {
            margin: 0 0 20px;
            color: #666;
        }

        /* Button Style */
        button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    color: #ffffff; 
    background: linear-gradient(105deg, #00BFFF, #FF6F61); 
    border: none;
    border-radius: 6px; 
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); 
    cursor: pointer;
    transition: all 0.3s ease; 
}

button:hover {
    background: linear-gradient(45deg, #00A3CC, #FF5B50);
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
}

button:active {
    transform: translateY(0); 
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); 
}
        /* Fade In Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-60px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

   
</body>
</html>
