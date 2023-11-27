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
    <title>Privacy Policy - Glory House</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="navfooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
    <style>
        header {
        background-color: #ffffff;
        color: #000000;
        text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2.5em;
        }

        section {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            border-radius: 8px;
            font-size: 1.1em;
            line-height: 1.6;
            color: #333;
        }

        h2 {
            color: #007bff;
            margin-bottom: 20px;
            font-size: 1.8em;
        }

        ul {
            list-style-type: decimal;
            margin-bottom: 20px;
        }

        p, li {
            margin-bottom: 15px;
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
                font-size: 15px;
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
                font-size: 13px;
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
</head>
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
        <h1 class="title pt-3">Privacy Policy</h1>
    </header>

    <section>
        <h2 class="subtitle">1. Information We Collect</h2>
        <p class="title2" style="color: red;">We may collect personal information from you when you visit our website, register for an account, fill out a form, or interact with our services. This information may include, but is not limited to:</p>
        <ul>
            <li class="test">Name</li>
            <li class="test">Email address</li>
            <li class="test">Phone number</li>
            <li class="test">Address</li>
            <li class="test">IP address</li>
            <li class="test">Cookies and usage data</li>
        </ul>

        <h2 class="subtitle">2. How We Use Your Information</h2>
        <p class="title2" style="color: red;">We may use the collected information for various purposes, including but not limited to:</p>
        <ul>
            <li class="test">Providing and maintaining our services</li>
            <li class="test">Improving our services</li>
            <li class="test">Sending newsletters or promotional materials</li>
            <li class="test">Responding to your inquiries or requests</li>
            <li class="test">Conducting analytics to better understand our users</li>
        </ul>

        <h2 class="subtitle">3. Cookies and Tracking Technologies</h2>
        <p class="subtitle2">We use cookies and similar tracking technologies to track the activity on our website and hold certain information. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent.</p>

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
