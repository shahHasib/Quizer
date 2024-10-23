<?php
session_start();
session_unset(); 
session_destroy(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged Out</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            user-select: none;
            background: linear-gradient(135deg, #c850c0, #4158d0);
        }

        .message-box {
            text-align: center;
            padding: 50px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .message-box h1 {
            color: white;
            font-size: 24px;
            margin-bottom: 10px;
            background:#c850c0;
            border-radius:10px;
           display:block;
          
           
            padding:5px;
        }

        .message-box p {
            color: #ccc;
            font-size: 20px;
        }
    </style>
    <script>
        setTimeout(function() {
            window.location.href = " ../registerpage/login.html"; // Redirect after 3 seconds
        }, 3000);
    </script>
</head>
<body>

    <div class="message-box">
        <h1>Logged Out</h1>
        <p>You have been successfully logged out. Redirecting to the login page...</p>
    </div>

</body>
</html>
