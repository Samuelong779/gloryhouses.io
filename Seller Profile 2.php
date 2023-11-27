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
    <title>Seller Profile 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Seller Profile 2.css">
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

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <form>
                    <div class="form-group">
                        <div class="image-container">
                            <img id="user-image" src="Seller People.png" alt="User Image">
                        </div>
                        <div class="review-section">
                            <div class="rating">
                                <span class="rating-text">4.0</span>
                                <div class="stars">
                                    <span class="star active" id="star-1"><i class="fas fa-star"></i></span>
                                    <span class="star active" id="star-2"><i class="fas fa-star"></i></span>
                                    <span class="star active" id="star-3"><i class="fas fa-star"></i></span>
                                    <span class="star active" id="star-4"><i class="fas fa-star"></i></span>
                                    <span class="star" id="star-5"><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="additional-info">
                            <p class="info">Name: John</p>
                            <p class="info">Age: 25</p>
                            <p class="info">Phone Number: 0198451234</p>
                            <p class="info">Email: <a href="mailto:john765@mail.com" style="text-decoration: none; color: #000000; font-family: 'Intel', sans-serif;">john765@mail.com</a></p>
                        </div>
                
                        <div class="social-icons">
                            <a class="round-icon" href="https://www.facebook.com" style="background-color: lightgrey; color: #1877F2;">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                            <a class="round-icon" href="https://www.twitter.com" style="background-color: lightgrey; color: #1DA1F2;">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="round-icon" href="https://www.linkedin.com" style="background-color: lightgrey; color: #0072b1;">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                        
                        <div class="button-container">
                            <a href="#" class="edit-profile-button">Edit Profile</a>
                        </div>
                        <div class="buyers-info">
                            <p class="buyers-info-text">Seller's Information &lt;&lt;GLORY HOUSE&gt;&gt;</p>
                        </div>
                        <br><br>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col">
                        <form>
                            <p class="property-status">Property status</p>
                            <div class="form-left">
                                <p class="form-text">Total Listings</p>
                                <p class="form-text2">1200</p>
                            </div>
                            <div class="form-center">
                                <p class="form-text">Property sold</p>
                                <p class="form-text2">900</p>
                            </div>
                        </form>
                    </div>                                       
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#" class="card-link">
                                        <div class="card">
                                            <img src="Seller House 1.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <div class="bed-info">
                                                    <p class="additional-info">
                                                        <span class="price">RM1,522,000</span><br><br>
                                                        <span class="icon-with-margin">4 <i class="fas fa-bed"></i></span>
                                                        <span class="icon-with-margin">5 <i class="fas fa-bath"></i></span>
                                                        <span class="dot"> • </span>
                                                        <span>2827 sqft</span>
                                                        <span class="dot"> • </span>
                                                        <span>RM 543.57 psf</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="card-link">
                                        <div class="card">
                                            <img src="Seller House 2.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <div class="bed-info">
                                                    <p class="additional-info">
                                                        <span class="price">RM588,000.00</span><br><br>
                                                        <span class="icon-with-margin">4 <i class="fas fa-bed"></i></span>
                                                        <span class="icon-with-margin">2 <i class="fas fa-bath"></i></span>
                                                        <span class="dot"> • </span>
                                                        <span>1450 sqft</span>
                                                        <span class="dot"> • </span>
                                                        <span>RM 405.52 psf</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="Seller Profile 2.js"></script>
</body>
</html>