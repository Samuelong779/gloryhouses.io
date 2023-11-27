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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="news_finance.css">
</head>
<style>
    .imgf {
        max-width: 100%;
        height: auto;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .finance {
        font-family: 'Karma', sans-serif;
        font-size: 28px;
        color: #000000;
        font-weight: bold;
        text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.7);
    }

    .explaination {
        font-family: 'Inter', sans-serif;
        font-size: 15px;
        color: #000000;
    }

    .test {
        font-family: 'Inter', sans-serif;
        text-decoration: none;
        font-size: 14px;
    }

</style>
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
           
        </div>
    </nav>
    <div style="margin-top: 20px;"></div>
    <div class="finance-content">
        <h2 class="finance">Finance</h2>
        <p class="explaination">Ready to manage your finances effectively in the real estate market? <br> Explore our comprehensive guides and expert
            advice to navigate the financial aspects <br> of property ownership and investment in Malaysia.</p>
    </div>

    <main class="finance-news-articles">
        <section class="article-list">
            <div class="article">
                <a href="NF1.php">
                    <img class="imgf" src="news_images/article1.jpg" alt="Article Image 1">
                    <h3 class="test" style="font-size: 14px;">The Future of Real Estate: Trends to Watch</h3>
                    <p class="explaination" style="font-size: 13px;">Explore upcoming trends in the real estate market, from innovative technology integrations to sustainable
                        design practices. Stay informed about evolving industry dynamics and anticipate changes that may impact
                        your property investments.</p>
                </a>
            </div>

            <div class="article">
                <a href="NF2.php">
                    <img class="imgf" src="news_images/article2.jpg" alt="Article Image 2">
                    <h3 class="test" style="font-size: 14px;">Smart Homes: Revolutionizing the Real Estate Industry</h3>
                    <p class="explaination" style="font-size: 13px;">Discover how smart home technologies are transforming the way people buy and sell properties. From
                        automated security systems to energy-efficient solutions, smart homes offer a glimpse into the future
                        of modern living and real estate transactions.</p>
                </a>
            </div>

            <div class="article">
                <a href="NF3.php">
                    <img class="imgf" src="news_images/article3.jpg" alt="Article Image 3">
                    <h3 class="test" style="font-size: 14px;">Effective Home Staging Tips for a Quick Sale</h3>
                    <p class="explaination" style="font-size: 13px;">Learn the art of home staging and how it can accelerate the selling process in the real estate market.
                        Presentation matters, and these tips will help you showcase your property in the best possible
                        light.</p>
                </a>
            </div>

        </section>
    </main>

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
</body>

</html>