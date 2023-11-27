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
        <title>Advertise</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="Advertise.css">
        <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
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
        
        <section class="advertisement pt-3">
            <div class="container">
                <h2 class="title text-center py-3">Discover Your Dream Home with Glory House Real Estate</h2>
                <p class="text text-start">
                    Welcome to Glory House Real Estate, where your dream home journey begins! Whether you're buying, selling, or investing in real estate, we are your trusted partner every step of the way.
                </p>
                <p class="text text-start">
                    Our team of experienced professionals is dedicated to helping you find the perfect property that aligns with your unique needs and preferences. From cozy apartments to luxurious estates, we have a diverse portfolio to suit every lifestyle.
                </p>
                <p class="text text-start">
                    Why choose Glory House Real Estate?
                </p>
                <ul class="features-list">
                    <li class="feature-item wide-selection">Wide Selection: Explore a vast range of properties in prime locations.</li>
                    <li class="feature-item expert-guidance">Expert Guidance: Our team provides personalized guidance for a seamless experience.</li>
                    <li class="feature-item trustworthy-transactions">Trustworthy Transactions: Enjoy transparent and secure real estate transactions.</li>
                    <li class="feature-item innovative-technology">Innovative Technology: Access cutting-edge tools for a modern and efficient property search.</li>
                </ul>              
                <p class="text text-start">
                    Whether you're a first-time buyer, a seasoned investor, or a homeowner looking to sell, Glory House Real Estate is your key to unlocking real estate success. Let's make your property dreams a reality!
                </p>
                <p class="text text-start">
                    Get started today. Browse our listings or contact our team to discuss your real estate goals.
                </p>
                <div class="cta-button text-center">
                    <a href="Contact.php" class="special-button">Contact Us</a>
                </div>
            </div>
        </section>
        
        <footer class="mt-3">
            <div class="row">
              <div class="col-12 text-left" >
                <a href="home.php" class="go-back-button">Go back</a>
              </div>
            </div>
        </footer>
    </body>
</html>