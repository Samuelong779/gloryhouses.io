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
    <title>Seller Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Seller Profile.css">
</head>
<body>
    <nav class="navbar" id="navbar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a class="navbar-brand mx-auto" href="home.php">
                        <img src="logo.png" alt="Image Alt Text">
                        Glory House
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4" id="welcome-container">
        <p class="welcome-text">Welcome Back</p>
    </div>

    <div class="container mt-4" id="form-container">
        <form id="login-form">
            <p class="form-text">Log in to SellerNet</p>
            <div class="form-group">
                <input type="email" class="form-control no-border-radius" id="email" placeholder="Email">
            </div>
            <div class="form-group mt-3 password-input">
                <div class="password-input-container">
                    <i class="fa fa-eye-slash form-icon" id="password-toggle" onclick="togglePasswordVisibility()"></i>
                    <input type="password" class="form-control no-border-radius" id="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group mt-3">
                <a href="Seller Profile 2.php" class="btn btn-login">Login</a>
            </div>            
            <div class="row mt-3 my-4">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input custom-checkbox" type="checkbox" id="remember-me">
                        <label class="form-check-label custom-label" for="remember-me">Remember me</label>
                    </div>
                </div>
                <div class="col text-end">
                    <a href="#" class="forgot-password-link">Forgot Password?</a>
                </div>
            </div>
        </form>
    </div>

    <script src="Seller Profile.js"></script>
</body>
</html>