<?php
    include("connect.php");

    session_start();
    if (!isset($_SESSION["client_name"])) {
        header("location: signIn.php");
        exit();
    }

    $loggedIn = isset($_SESSION['client_name']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Terms of Service - Glory House</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="navfooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
</head>
    <style>
            header {
                color: #000000;
                text-align: center;
            }

            h1 {
                margin-bottom: 20px;
            }

            section {
                max-width: 800px;
                margin: auto;
                padding: 20px;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin-top: 20px;
                border-radius: 8px;
            }

            h2 {
                color: #007bff;
                margin-bottom: 20px;
            }

            ol {
                list-style-type: decimal;
                margin-bottom: 20px;
            }

            p, li {
                margin-bottom: 10px;
            }

            .title {
                font-family: 'Karma', sans-serif;
                font-size: 28px;
                color: #000000;
                font-weight: bold;
                text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.7);
            }

            .title2 {
                font-family: 'Karma', sans-serif;
                font-size: 28px;
                font-weight: bold;
                text-shadow: 4px 4px 6px rgba(233, 142, 15, 0.7);
            }

            .explaination {
                font-family: 'Inter', sans-serif;
                font-size: 14px;
                color: #000000;
            }

            .subtitle {
                font-family: 'Inter', sans-serif;
                font-size: 22px;
                color: darkblue;
                text-shadow: 4px 4px 6px rgba(182, 222, 230, 0.7);
                transition: text-shadow 0.5s;
                font-weight: bold;
            }

            .subtitle2 {
                font-family: 'Inter', sans-serif;
                font-size: 18px;
                color: darkgreen;
                text-shadow: 4px 4px 6px rgba(140, 232, 132, 0.7);
                transition: text-shadow 0.5s;
                font-weight: bold;
            }

            .test {
                font-family: 'Inter', sans-serif;
                font-size: 14px;
                text-decoration: none;
                text-shadow: none;
            }

    </style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="Buyer.php">Buy</a>
                </li>
            </ul>
            
            <a class="navbar-brand mx-auto" href="home.php">
                <img src="logo.png" alt="Image Alt Text"> Glory House
            </a> 
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="Help.php">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="News.php">News</a>
                </li>
                <?php if ($loggedIn): ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="signIn.php">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="register.php">New Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

        <header>
            <h1 class="title pt-3">Terms of Service</h1>
        </header>
    
        <section>
            <h2 class="subtitle">1. Acceptance of Terms</h2>
            <p class="explaination">By accessing or using the Glory House website and services (the "Service"), you agree to comply with and be bound by these Terms of Service. If you do not agree to these terms, please do not use the Service.</p>
    
            <h2 class="subtitle">2. Changes to Terms</h2>
            <p class="explaination">Glory House reserves the right to modify or revise these Terms of Service at any time. Your continued use of the Service after any changes indicates your acceptance of the updated terms. It is your responsibility to review these Terms of Service regularly.</p>
    
            <h2 class="subtitle">3.User Conduct</h2>
            <p class="explaination">You agree to use the Service in accordance with all applicable laws and regulations. You are solely responsible for your conduct and any data, text, information, graphics, photos, profiles, audio, and video clips ("Content") that you submit, post, and display on the Service.</p>

            <h2 class="subtitle">4.Privacy Policy</h2>
            <p class="explaination">Your use of the Service is also governed by our Privacy Policy. By using the Service, you consent to the terms of the Privacy Policy.</p>

            <h2 class="subtitle">5.Termination</h2>
            <p class="explaination">Glory House reserves the right to terminate or suspend your access to the Service at any time, for any reason, with or without notice.</p>

            <h2 class="subtitle">6.Intellectual Property</h2>
            <p class="explaination">The content on the Service, including without limitation, the text, graphics, photos, and other materials, is owned by Glory House and is protected by copyright and other intellectual property laws. You may not use, modify, reproduce, or distribute any of the content without the written consent of Glory House.</p>

            <h2 class="subtitle">7. Disclaimer of Warranties</h2>
            <p class="explaination">The Service is provided "as is" without any warranties, expressed or implied. Glory House does not warrant that the Service will be error-free or uninterrupted.</p>

            <h2 class="subtitle">8. Limitation of Liability</h2>
            <p class="explaination">In no event shall Glory House be liable for any direct, indirect, incidental, special, or consequential damages, or damages for loss of profits, revenue, data, or use, incurred by you or any third party, whether in an action in contract or tort, arising from your access to, or use of, the Service.</p>

            <h2 class="subtitle">9. Governing Law</h2>
            <p class="explaination">These Terms of Service are governed by and construed in accordance with the laws of [Your Jurisdiction]. Any disputes arising under or in connection with these terms shall be subject to the exclusive jurisdiction of the courts in [Your Jurisdiction].</p>

            <h2 class="subtitle">10. Contact Information</h2>
            <p class="explaination">If you have any questions about these Terms of Service, please contact us.</p>
        </section>
    
        <div style="margin-top: 20px;"></div>
    
</body>



<footer class="footer">
    <p class="test"> Contact Us: 
        <a href="mailto:gloryhouse072@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a> | 
        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=gloryhouse072@gmail.com" target="_blank"><i class="fab fa-google"></i></a> | 
        <a href="https://compose.mail.yahoo.com/?to=gloryhouse072@gmail.com" target="_blank"><i class="fab fa-yahoo"></i></a> | 
        <i class="fas fa-phone"></i> +60 (198193527)
    </p>
    <div>
        <a href="home.php" class="test">Home</a>
        <a href="About.php" class="test">About Us</a>
        <a href="Terms of Service.php" class="test">Terms of Service</a>
        <a href="Privacy.php" class="test">Privacy Policy</a>
    </div>
    <div>
        <a href="https://www.facebook.com/people/Glory-House/61553811544755/" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/gloryhouse072/" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
    <p class="test">&copy; 2023 Glory House. All rights reserved.</p>
</footer>
</html>