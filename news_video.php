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
    <title>Video</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="news_video.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <script async src="https://static.addtoany.com/menu/page.js"></script>

    <style>
        .video {
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

        .title {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            color: #000000;
            font-weight: bold;
            text-shadow: none;
        }

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
        </div>
    </nav>

    <div style="margin-top: 20px;"></div>

    <div class="video-blog-content">
        <h2 class="video">Video Blog</h2>
        <p class="explaination">Explore our video blog for the latest in finance, industry insights, and more.</p>
    </div>

    <section id="video-blog-section">
        <div class="container">
            <div class="featured-video">
                <iframe src="https://www.youtube.com/embed/T9E9Pq9fGTc?si=xcrjIcZIANDSJMvl" frameborder="0" allowfullscreen></iframe>
                <h3 class="title">Featured Video: Real Estate Investment Strategies</h3>
                <p class="test" style="color: darkgrey;">Real estate investment can be a lucrative venture, but success often relies on employing effective strategies. Whether you're a seasoned investor or just entering the real estate market, understanding and implementing the right investment strategies is key to maximizing returns and minimizing risks. Here are some proven real estate investment strategies to consider</p>
            </div>

            <div class="video-list">
                    <div class="video">
                        <iframe src="https://www.youtube.com/embed/HLEEwG3dNcg?si=Q6KuYBFUwUIwbF6s" frameborder="0" allowfullscreen></iframe>
                        <h3 class="title" style="font-size: 16px; color: #000000; font-weight: bold;">Finance Tips for First-time Homebuyers</h3>
                        <p class="test" style="font-weight: 500; font-size: 14px; color: darkgrey;">Learn essential finance tips for those entering the real estate market for the first time. <br> <a href="NV1.php" class="read-more" style="color: darkmagenta; text-shadow: 4px 4px 6px rgba(159, 21, 201, 0.7); font-family: 'Inter', sans-serif; font-size: 15px;">Read More</a></p>
                        <div class="like-share d-flex align-items-center">
                            <div class="mr-2">
                                <button class="like-button" onclick="likeVideo(this)" style="background: none; border: none;"><i class="fas fa-thumbs-up"></i></button>
                            </div>
                            <div class="mr-2">
                                <button class="copy-link-button ml-auto" onclick="copyVideoLink()" style="background: none; border: none;"><i class="fas fa-copy"></i></button>
                            </div>
                            <div>
                                <button class="a2a_dd ml-auto" href="https://www.addtoany.com/share" style="background: none; border: none;"><i class="fas fa-share-alt"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="video">
                        <iframe src="https://www.youtube.com/embed/K6bAX4Tk6t4?si=9cYhLopAzc6NrXuA" frameborder="0" allowfullscreen></iframe>
                        <h3 class="title" style="font-size: 16px; color: #000000; font-weight: bold;">The Impact of Interest Rates on Real Estate</h3>
                        <p class="test" style="font-weight: 500; font-size: 14px; color: darkgrey;">Understand how changes in interest rates can affect the real estate market and your investment decisions. <br> <a href="NV2.php" class="read-more" style="color: darkmagenta; text-shadow: 4px 4px 6px rgba(159, 21, 201, 0.7); font-family: 'Inter', sans-serif; font-size: 15px;">Read More</a></p>
                        <div class="like-share d-flex align-items-center">
                            <div class="mr-2">
                                <button class="like-button" onclick="likeVideo(this)" style="background: none; border: none;"><i class="fas fa-thumbs-up"></i></button>
                            </div>
                            <div class="mr-2">
                                <button class="copy-link-button ml-auto" onclick="copyVideoLink()" style="background: none; border: none;"><i class="fas fa-copy"></i></button>
                            </div>
                            <div>
                                <button class="a2a_dd ml-auto" href="https://www.addtoany.com/share" style="background: none; border: none;"><i class="fas fa-share-alt"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="video">
                        <iframe src="https://www.youtube.com/embed/Hoif9LFoOv0?si=U7YdxhOMtrBmE5Yn" frameborder="0" allowfullscreen></iframe>
                        <h3 class="title" style="font-size: 16px; color: #000000; font-weight: bold;">Real Estate Investing Strategies That Will Pay Your Bills For Life</h3>
                        <p class="test" style="font-weight: 500; font-size: 14px; color: darkgrey;">Wise investments in real estate could provide endless streams of passive income that will pay your bills forever. <br> <a href="NV3.php" class="read-more" style="color: darkmagenta; text-shadow: 4px 4px 6px rgba(159, 21, 201, 0.7); font-family: 'Inter', sans-serif; font-size: 15px;">Read More</a></p>
                        <div class="like-share d-flex align-items-center">
                            <div class="mr-2">
                                <button class="like-button" onclick="likeVideo(this)" style="background: none; border: none;"><i class="fas fa-thumbs-up"></i></button>
                            </div>
                            <div class="mr-2">
                                <button class="copy-link-button ml-auto" onclick="copyVideoLink()" style="background: none; border: none;"><i class="fas fa-copy"></i></button>
                            </div>
                            <div>
                                <button class="a2a_dd ml-auto" href="https://www.addtoany.com/share" style="background: none; border: none;"><i class="fas fa-share-alt"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="video">
                        <iframe src="https://www.youtube.com/embed/_v115Lbn9vE?si=WO2GqDeeRbrsvH6K" frameborder="0" allowfullscreen></iframe>
                        <h3 class="title" style="font-size: 16px; color: #000000; font-weight: bold;">Is There Future For MALAYSIA REAL ESTATE?</h3>
                        <p class="test" style="font-weight: 500; font-size: 14px; color: darkgrey;">With the current trends of declining population, is there still a future for real estate investment? <br> <a href="NV4.php" class="read-more" style="color: darkmagenta; text-shadow: 4px 4px 6px rgba(159, 21, 201, 0.7); font-family: 'Inter', sans-serif; font-size: 15px;">Read More</a></p>
                        <div class="like-share d-flex align-items-center">
                            <div class="mr-2">
                                <button class="like-button" onclick="likeVideo(this)" style="background: none; border: none;"><i class="fas fa-thumbs-up"></i></button>
                            </div>
                            <div class="mr-2">
                                <button class="copy-link-button ml-auto" onclick="copyVideoLink()" style="background: none; border: none;"><i class="fas fa-copy"></i></button>
                            </div>
                            <div>
                                <button class="a2a_dd ml-auto" href="https://www.addtoany.com/share" style="background: none; border: none;"><i class="fas fa-share-alt"></i></button>
                            </div>
                        </div>
                    </div>

            </div>

            <div style="margin-top: 20px;"></div>
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

    <script>
            a2a_config = a2a_config || {};
            a2a_config.locale = "en";

            function copyVideoLink() {
            var videoUrl = window.location.href; 
            navigator.clipboard.writeText(videoUrl).then(function() {
                alert('Video link copied to clipboard!');
            }).catch(function(err) {
                console.error('Unable to copy video link', err);
            });
        }

        function likeVideo(button) {
            alert('Video Liked!');
        }
    </script>
</body>
</html>