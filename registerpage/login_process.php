<?php
include 'db_connection.php';

session_start();

// Check if the request is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // SQL for user/admin login
    $sql = "SELECT id,username, email, password, admin FROM users WHERE email = ? LIMIT 1";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Check if a matching username was found
    if ($stmt->num_rows > 0) {
        // Bind result variables
        $stmt->bind_result($id,$username, $email, $hashed_password, $is_admin);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, initiate session
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $id;

            // Check if the user is an admin
            if ($is_admin == 1) {
                // Redirect to admin panel
                $_SESSION['admin_logged_in']=TRUE;
                header("Location:../Admin/admin.php");
                exit;
            } else {
                // Redirect to user homepage or dashboard
                header("Location: ../homepage/index.php");
                exit;
            }
        } else {
            // Incorrect password
            $error_message = "Invalid username or password!";
        }
    } else {
        //user not exists
        $error_message = "No users found!";
    }

   
    $stmt->close();
    $conn->close();
    
    // Redirect back to login page with error message
    if (isset($error_message)) {
        $_SESSION['error_message'] = $error_message;
        header("Location: login.php");
        exit;
    }
} else {
    // Invalid request method
    header("Location: login.php");
    exit;
}
?>
