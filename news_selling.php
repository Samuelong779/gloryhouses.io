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
    <title>Selling</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="news_selling.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        .selling {
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
    <section id="selling-section">
        <div class="container">
            <div class="selling-content">
                <h2 class="selling">Selling</h2>
                <p class="explaination">Ready to sell your property in Malaysia? Explore our guides to make the selling process smoother.</p>
            </div>
            <div class="selling-details">
                <div class="image-box">
                    <img src="news_images/sellingnewstitle.jpg" alt="Selling News Title Image">
                </div>
                <div class="popular-readings-box">
                    <h3 class="explaination2">Popular Readings</h3>
                        <ul class="my-3">
                            <li class="test"><a href="NS1.php" style="color: blue; text-decoration: none;">1. Effective Home Staging Tips: Make Your Property Irresistible</a></li>
                            <li class="test"><a href="NS2.php" style="color: blue; text-decoration: none;">2. Pricing Strategies for a Quick Sale: Find the Sweet Spot</a></li>
                            <li class="test"><a href="NS3.php" style="color: blue; text-decoration: none;">3. Navigating the Real Estate Market as a Seller: What to Expect</a></li>
                            <li class="test"><a href="NS4.php" style="color: blue; text-decoration: none;">4. Marketing Your Property: Proven Techniques for Maximum Exposure</a></li>
                            <li class="test"><a href="NS5.php" style="color: blue; text-decoration: none;">5. Understanding Property Valuation: Set the Right Asking Price</a></li>
                        </ul>
                </div>
            </div>
        </div>
    </section>

    <div style="margin-top: 20px;"></div>
    <section id="selling-section">
        <div class="container">
            <h2 class="latest">Latest Selling Guides</h2>
     <div class="news-box">
        <img src="news_images/sellinghouseimages1.jpg" alt="News Thumbnail 1" class="thumbnail">
        <div class="news-content">
            <h3 class="news-title"><a href="NS1.php">Effective Home Staging Tips: Make Your Property Irresistible</a></h3>
            <p class="news-description">When it comes to selling your home, first impressions matter. Effective home staging can make a significant difference in attracting potential buyers and maximizing the appeal of your property. Here are some essential tips to make your home irresistible to potential buyers</p>
        </div>
     </div>

      <div class="news-box">
        <img src="news_images/sellinghouseimages2.jpg" alt="News Thumbnail 2" class="thumbnail">
        <div class="news-content">
            <h3 class="news-title"><a href="NS2.php">Pricing Strategies for a Quick Sale: Find the Sweet Spot</a></h3>
            <p class="news-description">Setting the right price for your home is a crucial factor in ensuring a quick and successful sale. Finding the sweet spot that attracts buyers while maximizing your property's value requires strategic pricing. Here are effective pricing strategies to expedite the selling process.</p>
        </div>
       </div>

       <div class="news-box">
        <img src="news_images/sellinghouseimages3.jpg" alt="News Thumbnail 3" class="thumbnail">
        <div class="news-content">
            <h3 class="news-title"><a href="NS3.php">Navigating the Real Estate Market as a Seller: What to Expect</a></h3>
            <p class="news-description">Selling your home can be a significant undertaking, and understanding what to expect in the real estate market is crucial for a successful and smooth process. Whether you're a first-time seller or have experience in real estate transactions, here's a guide to help you navigate the market as a seller.</p>
        </div>
       </div>

       <div class="news-box">
        <img src="news_images/sellinghouseimages4.jpg" alt="News Thumbnail 4" class="thumbnail">
        <div class="news-content">
            <h3 class="news-title"><a href="NS4.php">Marketing Your Property: Proven Techniques for Maximum Exposure</a></h3>
            <p class="news-description">Successfully selling your property goes beyond listing it on real estate platforms. Effective marketing is key to attracting potential buyers and maximizing your property's exposure in the market. Here are proven techniques to ensure your property gets the attention it deserves.</p>
        </div>
       </div>

       <div class="news-box">
        <img src="news_images/sellinghouseimages5.jpg" alt="News Thumbnail 5" class="thumbnail">
        <div class="news-content">
            <h3 class="news-title"><a href="NS5.php">Understanding Property Valuation: Set the Right Asking Price</a></h3>
            <p class="news-description">Setting the right asking price is a critical step in selling your home. It requires a thorough understanding of property valuation to ensure that your listing is competitive and attracts potential buyers. Here's a guide to help you navigate the intricacies of property valuation.</p>
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