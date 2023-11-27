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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="home.css">
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
            
            <a class="navbar-brand mx-auto" href="#">
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
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="navbar bg-light">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fs-text m-0 px-3 py-2 mx-3">Discover a place you'll love to live</p>
                            <p class="fs-text1 m-0 px-3 py-2 mt-2 mx-5">Let's find a home that's <br> perfect for you</p>
                        </div>
                        <img src="Most-Beautiful-House-in-the-World.jpg" height="250px" width="500px" class="mx-5 house1" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="navbar bg-white">
            <div class="col-12">
                <p class="fs-text2 m-0 px-3 py-2 mx-5">Enter a location</p>
            </div>
            <div class="col-6">
                <div class="input-group">
                    <input type="text" class="form-control" id="searchInput" placeholder="">
                    <button class="btn btn-primary search" onclick="searchFunction()">Search</button>
                </div>
            </div>
        </div>
    </div>    
    <div class="container">
        <div class="row">
            <div class="col-start">
                <p class="subang text-start m-0 px-2 py-3">Browse house in Subang</p>
            </div>
            <div id="chatContainer" class="col-end d-flex align-items-center">
                <a href="ChatWithBot.php" class="btn btn-primary chat-button">
                    Chat with Bot
                </a>
                <img src="1538298822.svg" alt="Your SVG Image" class="svg-icon ms-2 my-2">
            </div>
        </div>
    </div>        
    <div class="container">
        <div class="row">
            <div class="col-4 text-start mb-4">
                <a href="First House.php">
                    <img src="images/First House.jpg" alt="Image 1" class="img1">
                </a>
            </div>
            <div class="col-4 text-center mb-4">
                <a href="Second House.php">
                    <img src="images/Second House.jpg" alt="Image 2" class="img1">
                </a>
            </div>
            <div class="col-4 text-end mb-4">
                <a href="Penang Third House.php">
                    <img src="images/Penang House 7.jpg" alt="Image 3" class="img1">
                </a>
            </div>
        </div>
    </div>       
    <div class="container mt-4">
        <div class="row justify-content-between">
            <div class="col-md-4 mb-3 me-2">
                <div class="rounded-square border text-center p-3 pt-5">
                    <img src="Buy a house.png" alt="Image Alt Text">
                    <h3 class="text-right mt-3 mx-5">Buy a house</h3>
                    <p class="text-right mt-3 mx-5">Find your place with an immersive photo experience and the most listings, including things you want to find.</p>
                    <a href="Buyer.php" class="btn btn-outline-primary text-right">Browse a houses</a>
                </div>
            </div>
            <div class="col-md-4 mb-3 ms-2">
                <div class="rounded-square border text-center p-3 pt-5">
                    <img src="Sell a house.png" alt="Image Alt Text">
                    <h3 class="text-right mt-3 mx-5">Sell a house</h3>
                    <p class="text-right mt-3 mx-5">No matter what path you take to sell your unit, we can help you navigate a successful sale.</p>
                    <a href="Seller page.php" class="btn btn-outline-primary text-right">See your options</a>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <ul class="footer-links">
                        <li><a href="About.php">About Us</a></li>
                        <li><a href="Research.php">Research</a></li>
                        <li><a href="Careers.php">Careers</a></li>
                        <li><a href="Advertise.php">Advertise</a></li>
                        <li><a href="Privacy Portal.php">Privacy Portal</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <ul class="footer-links">
                        <li><a href="Cookie Preference.php">Cookie Preference</a></li>
                        <li><a href="Blog.php">Blog</a></li>
                        <li><a href="AI.php">AI</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="footer-line"> 
        <div class="centered-text pt-3">
            <div class="text-container">
                <p class="footer-text">Glory House is a Real Estate purchase website conception. It provides the four state houses that would like to be vended in Malaysia such as Penang, <br> Selangor, Malacca, and Johor when clients want to buy a house in this country.</p>
                <p class="footer-text">At Glory House, we believe that finding your dream home is not just a transaction; it's a journey filled with hope, excitement, and the promise of a <br> brighter future. Our mission is simple: to guide you on this path and help you discover the place you'll proudly call home.</p>
            </div>

            <p class="follow-us py-5">Follow us:
            <a href="https://www.facebook.com/people/Glory-House/61553811544755/" class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                    <style>svg{fill:#1b1ba9}</style>
                    <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/>
                </svg>
            </a>
            <a href="https://www.instagram.com/gloryhouse072/" class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512">
                    <style>svg{fill:#1b1ba9}</style>
                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                </svg>
            </a>
            <a href="https://www.twitter.com/" class="icon1">
                <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                    <style>svg{fill:#1b1ba9}</style>
                    <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
                </svg>
            </a>
            </p>
            <img src="images/Glory House.png" alt="Image Alt Text" class="city">
        </div>
    </footer>

    <script src="home.js"></script>
</body>
</html>