<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    
    <title>Feedback - Quizer</title>
</head>
<body>
    <header>
        <<?php include('../partials/header.php'); ?>
    </header>

    <div class="container" id="contact">
        <h1>Feedback</h1>
        <form id="contactForm" class="contact-form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="button" class="submit-btn" onclick="sendMail()">Send Message</button>
        </form>
        
        
    </div>

    <footer>
        <div class="footer-container">
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="../homepage/index.php">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="#contact">Feedback</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>Email: info@quizer.com</p>
                <p>Phone: +123 456 7890</p>
                <p>Address: 123 Quiz St, Knowledge City</p>
            </div>
            <div class="footer-social">
                <h3>Follow Us</h3>
                <a href="https://www.facebook.com/"><img src="../resources/facebook_icon.png" alt="Facebook"></a>
                <a href="https://www.twitter.com/"><img src="../resources/twitter_icon.png" alt="Twitter"></a>
                <a href=""><img src="../resources/instagram_icon.png" alt="Instagram"></a>
                <a href="https://www.youtube.com/channel/UCOCScPo7DRLcDDWHQOs1_Hw"><img src="../resources/youtube_icon.png" alt="Youtube"></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Quizer. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        function sendMail() {
            var name = encodeURIComponent(document.getElementById('name').value);
            var email = encodeURIComponent(document.getElementById('email').value);
            var message = encodeURIComponent(document.getElementById('message').value);
            
            var mailtoLink = 'mailto:bhaihassu@gmail.com?subject=Contact%20Form%20Submission&body=Name:%20' + name + '%0AEmail:%20' + email + '%0AMessage:%0A' + message;
            
            window.location.href = mailtoLink;
        }
        </script>
        
</body>
</html>
