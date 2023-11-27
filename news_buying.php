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
    <title>Buying</title>
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
    <link rel="stylesheet" type="text/css" href="news_buying.css">

    <style>
        .buying {
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

        .explaination2 {
            font-family: 'Inter', sans-serif;
            font-weight: bold;
        }

        .test {
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            text-decoration: none;
        }

        .latest {
            font-family: 'Karma', sans-serif;
            font-size: 28px;
            color: red;
            font-weight: bold;
            text-shadow: 4px 4px 6px rgba(255, 0, 0, 0.7);
        }

        .news-title {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            text-decoration: none;
            font-weight: 600;
        }

        .news-description {
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            text-decoration: none;
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
            
        </div>
    </nav>

    <div style="margin-top: 20px;"></div>
    <section id="buying-section">
        <div class="container">
            <div class="buying-content">
                <h2 class="buying">Buying</h2>
                <p class="explaination">Unlock the door to your perfect property in Malaysia with our insightful guides.</p>
            </div>
            <div class="buying-details">
                <div class="image-box">
                    <img src="news_images/buyingnewstitle.jpg" alt="Buying News Title Image">
                </div>
                <div class="popular-readings-box">
                    <h3 class="explaination2">Popular Readings</h3>
                        <ul class="my-3">
                            <li class="test"><a href="NB1.php" style="color: blue; text-decoration: none;">1. Tips for Buying Property in a Competitive Market</a></li>
                            <li class="test"><a href="NB2.php" style="color: blue; text-decoration: none;">2. Understanding Mortgage Options: A Comprehensive Guide</a></li>
                            <li class="test"><a href="NB3.php" style="color: blue; text-decoration: none;">3. Navigating the Real Estate Market in Malaysia: What You Need to Know</a></li>
                            <li class="test"><a href="NB4.php" style="color: blue; text-decoration: none;">4. How to Choose the Right Neighborhood for Your Home</a></li>
                            <li class="test"><a href="NB5.php" style="color: blue; text-decoration: none;">5. Budgeting for Your Dream Home: Practical Advice</a></li> 
                        </ul>
                </div>
            </div>
        </div>
    </section>

    <div style="margin-top: 20px;"></div>
    <section id="buying-section">
        <div class="container">
            <h2 class="latest">Latest Buying Guides</h2>
     <div class="news-box">
        <img src="news_images/buyinghouseimages1.jpg" alt="News Thumbnail 1" class="thumbnail">
        <div class="news-content">
            <h3 class="news-title"><a href="NB1.php">Tips for Buying Property in a Competitive Market</a></h3>
            <p class="news-description">The real estate market can be fiercely competitive, especially in areas where demand outweighs the available housing supply. If you're navigating a seller's market, where properties receive multiple offers and sell quickly, it's essential to approach the home-buying process strategically. Here are some valuable tips to help you secure the property you want in a competitive market.</p>
        </div>
     </div>

      <div class="news-box">
        <img src="news_images/buyinghouseimages2.jpg" alt="News Thumbnail 2" class="thumbnail">
        <div class="news-content">
            <h3 class="news-title"><a href="NB2.php">Understanding Mortgage Options: A Comprehensive Guide</a></h3>
            <p class="news-description">The journey to homeownership is an exciting and significant milestone, but it often involves navigating a complex landscape of mortgage options. Understanding the various mortgage types, terms, and considerations is crucial for making informed decisions that align with your financial goals. In this comprehensive guide, we will explore the key aspects of mortgages to empower you in the homebuying process.</p>
        </div>
       </div>

       <div class="news-box">
        <img src="news_images/buyinghouseimages3.jpg" alt="News Thumbnail 3" class="thumbnail">
        <div class="news-content">
            <h3 class="news-title"><a href="NB3.php">Navigating the Real Estate Market in Malaysia: What You Need to Know</a></h3>
            <p class="news-description">Malaysia's real estate market offers diverse opportunities for both investors and homebuyers. Whether you are considering buying, selling, or investing in property, understanding the nuances of the Malaysian real estate market is essential for making informed decisions. In this comprehensive guide, we'll explore key aspects of navigating the real estate landscape in Malaysia.</p>
        </div>
       </div>

       <div class="news-box">
        <img src="news_images/buyinghouseimages4.jpg" alt="News Thumbnail 4" class="thumbnail">
        <div class="news-content">
            <h3 class="news-title"><a href="NB4.php">How to Choose the Right Neighborhood for Your Home</a></h3>
            <p class="news-description">Choosing the right neighborhood is a crucial step in the home-buying process. Your neighborhood will not only affect your daily life but also play a significant role in the future value of your home. Here are some essential tips to help you make an informed decision when selecting the perfect neighborhood for your new home.</p>
        </div>
       </div>

       <div class="news-box">
        <img src="news_images/buyinghouseimages5.jpg" alt="News Thumbnail 5" class="thumbnail">
        <div class="news-content">
            <h3 class="news-title"><a href="NB5.php">Budgeting for Your Dream Home: Practical Advice</a></h3>
            <p class="news-description">Turning your dream home into a reality requires careful financial planning and budgeting. Here are some practical pieces of advice to help you navigate the budgeting process and make informed decisions on your home-buying journey.</p>
        </div>
       </div>
  </section>

  
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