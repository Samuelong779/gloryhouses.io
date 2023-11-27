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
        <title>Glory House</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/font/bootstrap-icons.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initMap"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="Seller 3.css">
        <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    
        <style>
            .buy-button {
                background-color: #87CEEB;
                color: #FFFFFF;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 15px;
                font-family: 'Inter', sans-serif;
                height: 35px;
                width: 100px;
            }

            .buy-button:hover {
                background-color: #5F9EA0; 
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

        <div class="container">
            <div class="row mt-4">
                <div class="col-md-6">
                    <img src="house plan view.jpg" alt="Image Alt Text" class="house-plan-view">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 form">
                            <form>
                                <p class="more-details-text pt-2 ps-2">More details</p>
                                <p class="left-text ps-2">Property Type <br>
                                    <span class="text1">2-storey Terraced House For Sale</span>
                                </p>
                                <p class="right-text">Developer <br>
                                    <span class="text2">Gamuda Land (T12) Sdn Bhd</span>
                                </p>
                                <hr class="line">
                                <p class="left-text ps-2">Tenure <br>
                                    <span class="text1">Lasehold</span>
                                </p>
                                <p class="right-text completion-year-text">Completion Year <br>
                                    <span class="text2">2026</span>
                                </p>
                                <hr class="line">
                                <p class="left-text ps-2">Total Units <br>
                                    <span class="text1">624</span>
                                </p>
                                <p class="right-text project-stage">Project Stage <br>
                                    <span class="text2">Open for registration</span>
                                </p>
                                <hr class="line">
                                <p class="left-text ps-2">Listing ID <br>
                                    <span class="text1">38215601</span>
                                </p>
                                <p class="right-text listed-on">Listed On <br>
                                    <span class="text2">1 week ago</span>
                                </p>
                                <hr class="line">
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 form">
                            <form>
                                <p class="available-text pt-2 ps-2">Available Unit Types</p>
                                <div class="unit-types">
                                    <p class="unit-type">3 Bedrooms</p>
                                    <p class="unit-type">4 Bedrooms</p>
                                </div>
                                <hr class="line1">

                                <div class="unit-info-container">
                                    <div class="unit-info-left">
                                        <a class="black-button" href="Seller 3.php">
                                            <p class="unit-info">Type A <br> 2080 sqft</p>
                                        </a>
                                        <a class="white-button mt-2" href="Seller 3B.php">
                                            <p class="unit-info">Type B <br> 3010 sqft</p>
                                        </a>
                                    </div>
                                    <div class="unit-info-right">
                                        <p class="price-text">RM750,000</p>
                                        <a class="starting-from-button" href="#">Starting From</a>
                                    </div>
                                </div>
                                <div class="property-info pt-2">
                                    <p class="property-info-text">3</p>
                                    <i class="fa fa-bed property-info-icon"></i>
                                    <p class="property-info-text">3</p>
                                    <i class="fa fa-bath property-info-icon"></i>
                                    <p class="property-info-text">2080 sqft - 3010 sqft</p>
                                    <p class="property-info-text">RM 477.95 psf</p>
                                </div>
                                <div class="fu-text pt-2 py-2">
                                    <span class="bold-text">Furnishing:</span> 
                                    <span class="light-grey-text">Unfurnished</span>
                                </div>
                                <div class="navbar2">
                                    <img src="research.png" alt="Image Alt Text" class="mt-3"><br>
                                    <a href="#" class="request-button mt-3">Request Floor Plan</a>
                                </div>   
                                <br>                             
                            </form>
                        </div>
                    </div>                                 
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-3">
                <button class="buy-button" id="buyButton" onclick="buyHouse()">Buy Now</button>
            </div>
        </div>

        <footer class="mt-3">
            <div class="row">
              <div class="col-12 text-left" >
                <a href="Seller 2.php" class="go-back-button">Go back</a>
              </div>
            </div>
        </footer>

        <script src="Seller 3.js"></script>

        <script>
            function buyHouse() {
                alert('Congratulations! You have successfully bought the house.');
            }
        </script>
    </body>
</html>