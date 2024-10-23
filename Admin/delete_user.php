<?php
include('../registerpage/db_connection.php');

$message = ""; // Variable to hold alert message
$alertType = ""; // Variable to hold alert type

if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    if ($stmt->execute()) {
        $message = "User deleted successfully!";
        $alertType = "success"; // Success alert
    } else {
        $message = "Something went wrong!";
        $alertType = "error"; // Error alert
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
    <title>Delete User</title>
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
        .alert-box button {
            background-color: #007BFF; /* Primary color */
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .alert-box button:hover {
            background-color: #0056b3; /* Darker blue */
        }

        /* Fade In Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <div class="overlay" id="overlay" style="<?= !empty($message) ? 'display: flex;' : ''; ?>">
        <div class="alert-box">
            <h2><?= $alertType === "success" ? 'Success!' : 'Error!' ?></h2>
            <p><?= htmlspecialchars($message) ?></p>
            <button onclick="closeAlert()">OK</button>
        </div>
    </div>

    <script>
        function closeAlert() {
            document.getElementById('overlay').style.display = 'none'; // Hide the alert box
            window.location.href="admin.php";
        }

        // Auto-close alert after 3 seconds (optional)
        setTimeout(closeAlert, 3000);
    </script>
</body>
</html>
