<?php
include 'db_connection.php';

session_start();

// Check if the request is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted username and password, with basic sanitation
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Prepare SQL query to check the user's credentials
    $sql = "SELECT id, username, password FROM users WHERE username = ? LIMIT 1";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters and execute the query
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        // Check if a matching username was found
        if ($stmt->num_rows > 0) {
            // Bind result variables
            $stmt->bind_result($id, $username, $hashed_password);
            $stmt->fetch();

            // Verify the password
            if (password_verify($password, $hashed_password)) {
                // Password is correct, initiate session
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $id;

                // Redirect to homepage or user dashboard
                header("Location: ../homepage/index.php");
                exit;
            } else {
                // Incorrect password
                $error_message = "Invalid username or password!";
            }
        } else {
            // No such user exists
            $error_message = "Invalid username or password!";
        }

        // Close statement
        $stmt->close();
    } else {
        // SQL query failed
        $error_message = "Error connecting to the database. Please try again later.";
    }
    
    // Close database connection
    $conn->close();
    
    // Redirect back to login page with error message
    if (isset($error_message)) {
        $_SESSION['error_message'] = $error_message;
        header("Location: login.php");
        exit;
    }
} else {
    // Invalid request method
    header("Location:login.php");
    exit;
}
?>
