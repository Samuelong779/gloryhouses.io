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
    <title>Buyer 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Buyer 2.css">
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

        .sold-button {
            background-color: #F50505; 
            color: #FFFFFF;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 15px;
            font-family: 'Inter', sans-serif;
            height: 35px;
            width: 100px;
        }

        .sold-button:hover {
            background-color: #F50505; 
        }
    </style>
</head>
<body id="top">
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
    <div class="container pt-4">
        <div class="row">
            <div class="col-6">
                <p class="dream-home-text">Discover Your Dream Home</p>
                <p class="welcome-text">Welcome to the ultimate resource for finding houses for sale in your desired location. Whether you're in search of a new home close to work, a family-friendly neighborhood, or a serene retreat away from the hustle and bustle, we've got you covered.</p>
            </div>
            <div class="col-6">
                <img src="Buyer House.png" alt="Your Image" class="dream-home-image">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <form class="search-form">
                    <div class="form-group">
                        <label for="locationText" class="location-label">Location</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="locationText" placeholder="City, Zip or Neighborhood">
                            <div class="input-group-append">
                                <span class="input-group-text search-icon">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-5">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle caret-down" type="button" id="priceDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Price 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0"></path>
                        </svg>
                    </button>                    
                    <ul class="dropdown-menu" aria-labelledby="priceDropdown">
                        <li><a class="dropdown-item" href="#">Price Range</a></li>
                        <li>
                            <div class="button-container">
                                <button class="dropdown-button-left">List Price</button>
                                <button class="dropdown-button-right">Monthly Payment</button>
                            </div>
                        </li>
                        <li>
                            <div class="text-container">
                                <span class="min-text">Minimum</span>
                                <span class="max-text">Maximum</span>
                            </div>
                        </li>
                        <li>
                            <div class="form-container">
                                <form class="dropdown-form-left">
                                    <label>
                                        No Min
                                        <input type="number" class="people-input-left" min="0" step="1" value="0">
                                    </label>
                                </form>
                                <span class="divider">-</span> 
                                <form class="dropdown-form-right">
                                    <label class="label-max">
                                        No Max
                                        <input type="number" class="people-input-right" min="0" step="1" value="0">
                                    </label>
                                </form>
                            </div>
                        </li>  
                        <div class="apply-button-container"> 
                            <button class="apply-button">Apply</button>
                        </div>                                                               
                    </ul>                                                         
                </div>
                <div class="dropdown type-dropdown">
                    <button class="btn btn-secondary dropdown-toggle caret-down" type="button" id="typeDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Type 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0"></path>
                        </svg>
                    </button>                    
                    <ul class="dropdown-menu" aria-labelledby="priceDropdown">
                        <li><a class="dropdown-item" href="#">Type of Houses</a></li>
                        <li>
                            <div class="button-container">
                                <button class="dropdown-button-left">Condos</button>
                                <button class="dropdown-button-center">House</button>
                                <button class="dropdown-button-right">Apartment</button>
                            </div>
                        </li>
                        <li>
                            <div class="text-container">
                                <span class="min-text">Minimum Room</span>
                                <span class="max-text2">Maximum Room</span>
                            </div>
                        </li>
                        <li>
                            <div class="form-container">
                                <form class="dropdown-form-left">
                                    <label>
                                        No Room
                                        <input type="number" class="people-input-left" min="0" step="1" value="0">
                                    </label>
                                </form>
                                <span class="divider">-</span> 
                                <form class="dropdown-form-right">
                                    <label class="label-max">
                                        No Room
                                        <input type="number" class="people-input-right" min="0" step="1" value="0">
                                    </label>
                                </form>
                            </div>
                        </li>  
                        <div class="apply-button-container"> 
                            <button class="apply-button">Apply</button>
                        </div>                                                               
                    </ul>                                                         
                </div>
            </div> 
            <div class="col-4 search-col">
                <button class="btn btn-search" id="searchButton" onclick="redirectToBuyer()">
                    Search
                </button>
            </div>         
        </div>
    </div>  
    <div class="container">
        <div class="row">
            <div class="col pt-3">
                <div class="text-below-button">
                    <p class="text-below-button-text">Houses for sale</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-3">
                <a href="#" class="card-link">
                    <div class="card">
                        <a href="Johor House.php">
                            <img src="Johor House.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <div class="bed-info">
                                <p class="additional-info">
                                    <span class="price">RM780,000</span><br><br>
                                    <span class="icon-with-margin">5 <i class="fas fa-bed"></i></span>
                                    <span class="icon-with-margin">5 <i class="fas fa-bath"></i></span>
                                    <span class="dot"> • </span>
                                    <span>1,875 sqft</span>
                                    <span class="dot"> • </span>
                                    <span>RM 375 psf</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart love-icon" viewBox="0 0 20 20">
                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                    </svg>
                                </p>
                            </div>
                            <p class="state-of-malaysia py-2">
                                Johor Darul Ta'zim
                                <img src="Johor.png" class="ms-2" alt="Image Description">
                            </p>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center mt-3">
                                    <button class="buy-button" id="buyButton" onclick="buyHouse()">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="#" class="card-link">
                    <div class="card">
                        <a href="Johor Second House.php">
                            <img src="Johor House 4.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body pt-4">
                            <div class="bed-info">
                                <p class="additional-info">
                                    <span class="price">RM540,000</span><br><br>
                                    <span class="icon-with-margin">2 <i class="fas fa-bed"></i></span>
                                    <span class="icon-with-margin">2 <i class="fas fa-bath"></i></span>
                                    <span class="dot"> • </span>
                                    <span>1,105 sqft</span>
                                    <span class="dot"> • </span>
                                    <span>RM 338 psf</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart love-icon" viewBox="0 0 20 20">
                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.920 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                                    </svg>                                                                      
                                </p>
                            </div>
                            <p class="state-of-malaysia py-2">
                                Johor Darul Ta'zim
                                <img src="Johor.png" class="ms-2" alt="Image Description">
                            </p>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center mt-3">
                                    <button class="buy-button" id="buyButton" onclick="buyHouse()">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="#" class="card-link">
                    <div class="card">
                        <a href="Johor Third House.php">
                            <img src="Johor House 7.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <div class="bed-info">
                                <p class="additional-info my-3">
                                    <span class="price">RM480,000</span><br><br>
                                    <span class="icon-with-margin">4 <i class="fas fa-bed"></i></span>
                                    <span class="icon-with-margin">3 <i class="fas fa-bath"></i></span>
                                    <span class="dot"> • </span>
                                    <span>1,670 sqft</span>
                                    <span class="dot"> • </span>
                                    <span>RM 588 psf</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart love-icon" viewBox="0 0 20 20">
                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.920 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                                    </svg>                                                                      
                                </p>
                            </div>
                            <p class="state-of-malaysia py-1">
                                Johor Darul Ta'zim
                                <img src="Johor.png" class="ms-2" alt="Image Description">
                            </p>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center mt-3">
                                    <button class="buy-button" id="buyButton" onclick="buyHouse()">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="#" class="card-link">
                    <div class="card">
                        <a href="Johor Fourth House.php">
                            <img src="Johor House 10.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <div class="bed-info">
                                <p class="additional-info my-3">
                                    <span class="price">RM288,000</span><br><br>
                                    <span class="icon-with-margin">1+1 <i class="fas fa-bed"></i></span>
                                    <span class="icon-with-margin">1 <i class="fas fa-bath"></i></span>
                                    <span class="dot"> • </span>
                                    <span>670 sqft</span>
                                    <span class="dot"> • </span>
                                    <span>RM 58 psf</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart love-icon" viewBox="0 0 20 20">
                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.920 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                                    </svg>                                                                      
                                </p>
                            </div>
                            <p class="state-of-malaysia py-1">
                                Johor Darul Ta'zim
                                <img src="Johor.png" class="ms-2" alt="Image Description">
                            </p>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center mt-3">
                                    <button class="sold-button" id="soldButton" onclick="markAsSold()">Sold Out</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <p class="result-text">Viewing 1-4 of 16 property results</p>
                </div>
                <div class="col-6">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="Buyer.php" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="Buyer.php">1</a></li>
                            <li class="page-item"><a class="page-link" href="Buyer 2.php">2</a></li>
                            <li class="page-item"><a class="page-link" href="Buyer 3.php">3</a></li>
                            <li class="page-item"><a class="page-link" href="Buyer 4.php">4</a></li>
                            <li class="page-item">
                                <a class="page-link" href="Buyer 3.php" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

    <footer class="second-footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-end">
                    <div class="line"></div>
                    <p class="return-to-top" id="returnToTop">Return to Top</p>
                </div>
            </div>
        </div>
    </footer>    

    <nav class="black-navbar">
        <div class="container">
            <div class="row">
                <div class="col-12 text-end">
                    <div class="follow-icons">
                        <p class="follow-text">Follow Us</p>
                        <ul class="social-icons-list">
                            <li><a href="https://www.facebook.com/people/Glory-House/61553811544755/"><i class="fa fa-facebook me-2"></i></a></li>
                            <li><a href="https://www.instagram.com/gloryhouse072/"><i class="fab fa-instagram me-2"></i></a></li>
                            <li><a href="https://www.youtube.com"><i class="fab fa-youtube me-2"></i></a></li>
                            <li><a href="https://www.linkedin.com"><i class="fab fa-linkedin me-2"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <nav class="gray-navbar mt-1">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <p class="company-name">Glory House Group</p>
                    <a class="content" href="About.php">About us</a>
                    <a class="content" href="News.php">Latest News</a>
                    <a class="content" href="Careers.php">Careers</a>
                </div>
                <div class="col-3">
                    <p class="contact-us">Contact Us: </p>
                    <p class="content">Email: <a href="mailto:gloryhouse072@gmail.com" class="content">gloryhouse072@gmail.com</a></p>
                    <p class="content">Phone: <a href="tel:+15551234567" class="content">+1 (555) 123-4567</a></p>
                </div>
            </div>
        </div>
    </nav>
        
    <nav class="second-navbar mt-1">
        <div class="container">
            <div class="row">
                <div class="col-4 mt-1">
                    <p class="nav-text">Popular Properties For Sale</p>
                    <a class="sub-text" href="Second House.php">Properties for sale in Malaysia</a>
                    <a class="sub-text" href="SelangorFirstHouse.php">Properties for sale in Selangor</a>
                    <a class="sub-text" href="Penang Fourth House.php">Properties for sale in Penang</a>
                </div>                               
                <div class="col-4 mt-1">
                    <p class="nav-text">Popular States</p>
                    <a class="sub-text" href="SelangorFourthHouse.php">Kuala Lumpur Properties</a>
                    <a class="sub-text" href="Penang House.php">Penang Properties</a>
                    <a class="sub-text" href="Malacca Fourth House.php">Malacca Properties</a>
                </div>
                <div class="col-4 mt-1">
                    <p class="nav-text">Popular Properties Types For Sale</p>
                    <a class="sub-text" href="First House.php">Apartment For Sales</a>
                    <a class="sub-text" href="Penang Third House.php">Condos For Sales</a>
                    <a class="sub-text" href="Third House.php">House For Sales</a>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js" integrity="sha384-XXXXX" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#priceDropdown").click(function() {
                $("#priceDropdown .bi-caret-down").toggleClass("up");
            });
        });

        $(document).ready(function() {
            $(".chevron-icon-left, .chevron-icon-right").click(function() {
                $(this).toggleClass("rotate");
                
                var inputField = $(this).closest("form").find("input");

                var currentValue = parseInt(inputField.val());

                if ($(this).hasClass("rotate")) {
                    currentValue++;
                } else {
                    if (currentValue > 0) {
                        currentValue--;
                    }
                }

                inputField.val(currentValue);
            });
        });

        $(document).ready(function() {
            $("#typeDropdown").click(function() {
                $("#typeDropdown .bi-caret-down").toggleClass("up");
            });
        });
        
        $(document).ready(function() {
            $("#moreDropdown").click(function() {
                $("#moreDropdown .bi-caret-down").toggleClass("up");
            });
        });

        const searchButton = document.getElementById("searchButton");

        searchButton.addEventListener("click", function() {
            searchButton.style.backgroundColor = "#E9FC9F"; 
        });

        document.addEventListener("DOMContentLoaded", function () {
            const loveIcons = document.querySelectorAll(".love-icon");
            
            loveIcons.forEach(function (icon) {
                icon.addEventListener("click", function () {
                    icon.classList.toggle("heart-pink");
                });
            });
        });

        const paginationItems = document.querySelectorAll(".page-link");
        
        paginationItems.forEach(item => {
            item.addEventListener("click", () => {
                paginationItems.forEach(item => {
                    item.parentElement.classList.remove("active");
                });
                
                item.parentElement.classList.add("active");
            });
        });
        var returnToTop = document.getElementById("returnToTop");
        
        returnToTop.addEventListener("click", function () {
            document.body.scrollTop = 0; 
            document.documentElement.scrollTop = 0; 
        });
       
        document.getElementById('priceDropdown').addEventListener('change', function () {
            var selectedValue = this.value;
            console.log('Selected Price: ' + selectedValue);
        });
        
        document.getElementById('typeDropdown').addEventListener('change', function () {
            var selectedValue = this.value;
            console.log('Selected Type: ' + selectedValue);
        });

        function buyHouse() {
            alert('Congratulations! You have successfully bought the house.');
        }

        function markAsSold() {
            alert('This house has been marked as sold.');
        }

        function redirectToBuyer() {
            var locationInput = document.getElementById("locationText").value.toLowerCase();

            var locationMapping = {
                'selangor': 'Buyer.php',
                'johor': 'Buyer 2.php',
                'penang': 'Buyer 3.php',
                'malacca': 'Buyer 4.php'
            };

            if (locationMapping.hasOwnProperty(locationInput)) {
                window.location.href = locationMapping[locationInput];
            } else {
                alert("Location not found!");
            }
        }
    </script>

</body>
</html>