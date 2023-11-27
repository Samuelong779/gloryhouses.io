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
    <title>News</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="news.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">

    <style>
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
    <nav class="navbar navbar-below">
        <div class="container">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="news_buying.php">BUYING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news_selling.php">SELLING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news_finance.php">FINANCE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news_newsandtrends.php">NEWS & TRENDS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news_video.php">VIDEO</a>
                </li>
            </ul>
            <form class="form-inline">
                <div class="input-group">
                    <input id="search-input" class="form-control" type="text" placeholder="Search articles" aria-label="Search" />
                    <button id="search-button" class="btn btn-outline-light" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
            <div id="search-results"></div>
        </div>
    </nav>
    <div class="latest-news">
        <p class="latest-news-text">Latest News</p>
    </div>
    <div class="container pt-0 py-5">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4">
                        <a href="NF1.php">
                            <img src="news_images/article1.jpg" alt="article1" class="img-fixed-size img-fluid">
                        </a>
                        <p class="p1">The Future of Real Estate: Trends to Watch</p>
                        <span class="s1">Finance News</span>
                        <span class="s2">alia</span>
                        <span class="s3">10 Nov 2023</span>
                        <div class="description pt-3">
                            <span class="s4">In the complex realm of real estate challenges, a confluence of cutting-edge technologies and shifting demographic dynamics is poised to reshape the industry.</span>
                        </div>
                        <div class="cr pt-3">
                            <span><a href="NF1.php" class="s5">Continue reading</a></span>
                            <span class="s6">9 min read</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a href="NS1.php">
                            <img src="news_images/sellinghouseimages1.jpg" alt="Image 2" class="img-fixed-size img-fluid">
                        </a>
                        <p class="p1">Effective Home Staging Tips: Make Your Property Irresistible</p>
                        <span class="s1">Selling News</span>
                        <span class="s2">alia</span>
                        <span class="s3">19 Sep 2023</span>
                        <div class="description pt-3">
                            <span class="s4">When it comes to selling your home, first impressions matter</span>
                        </div>
                        <div class="cr pt-3">
                            <span><a href="NS1.php" class="s5">Continue reading</a></span>
                            <span class="s6">13 min read</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a href="NT1.php">
                            <img src="news_images/trend1.jpg" alt="Image 3" class="img-fixed-size img-fluid">
                        </a>
                        <p class="p1">Exploring Sustainable Living: Eco-Friendly Homes</p>
                        <span class="s1">News and Trends News</span>
                        <span class="s2">alia</span>
                        <span class="s3">15 Nov 2023</span>
                        <div class="description pt-3">
                            <span class="s4">In a world increasingly focused on environmental sustainability, the housing industry is undergoing a remarkable
                                transformation.</span>
                        </div>
                        <div class="cr pt-3">
                            <span><a href="NT1.php" class="s5">Continue reading</a></span>
                            <span class="s6">5 min read</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <nav class="navbar navbar-light bg-light custom-navbar">
                    <h1 class="title">Most Read This Month</h1>
                    <hr class="line">
                    <a href="NB1.php" class="additional-text">
                        Tips for Buying Property in a Competitive Market
                    </a>
                    <p class="date">19 Sep 2023</p>

                    <hr class="line">
                    <a href="NV1.php" class="additional-text">
                        Finance Tips for First-time Homebuyers
                    </a>
                    <p class="date">15 Sep 2023</p>
                    
                    <hr class="line">
                    <a href="NT2.php" class="additional-text">
                        The Rise of Smart Homes: A Tech-Driven Lifestyle
                    </a>
                    <p class="date">02 Nov 2023</p>

                    <hr class="line">
                    <a href="NS4.php" class="additional-text">
                        Marketing Your Property: Proven Techniques for Maximum Exposure
                    </a>
                    <p class="date">01 Oct 2023</p>

                    <hr class="line">
                    <a href="NS3.php" class="additional-text">
                        Navigating the Real Estate Market as a Seller: What to Expect
                    </a>
                    <p class="date">05 May 2023</p>
                    
                </nav>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="news.js"></script>
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