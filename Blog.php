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
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Blog.css">
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

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article class="blog-post">
                    <h2 class="blog-post-title">Discover the Latest Trends in Malaysian Real Estate</h2>
                    <p class="blog-post-meta">March 20, 2023 by <a href="https://www.iproperty.com.my/news/" class="iProperty">iProperty Malaysia Team</a></p>

                    <p class="text">
                        Malaysia continues to be a hotspot for real estate, with diverse offerings ranging from bustling urban centers to serene suburban landscapes. As the leading property portal in the country, iProperty Malaysia is excited to share the latest trends shaping the real estate market.
                    </p>

                    <p class="text">
                        <strong class="text2">1. Sustainable Living</strong><br>
                        Homebuyers are increasingly prioritizing eco-friendly and sustainable living. Developers are responding by integrating green technologies, energy-efficient features, and eco-friendly designs into new projects. Discover homes that blend modern luxury with environmental responsibility.
                    </p>

                    <p class="text">
                        <strong class="text2">2. Smart Homes</strong><br>
                        The era of smart homes has arrived. From integrated security systems to smart lighting and temperature control, technology is transforming the way we live. Explore properties equipped with the latest smart home innovations, providing convenience and efficiency for homeowners.
                    </p>

                    <p class="text">
                        <strong class="text2">3. Co-living Spaces</strong><br>
                        With changing lifestyles and work patterns, co-living spaces are gaining popularity. These purpose-designed spaces offer a sense of community, shared amenities, and flexible living arrangements. Discover the benefits of co-living for both young professionals and retirees.
                    </p>

                    <p class="text">
                        <strong class="text2">4. Virtual Property Tours</strong><br>
                        Embracing technology, virtual property tours have become a norm. Explore homes from the comfort of your device, allowing for efficient property hunting. iProperty Malaysia is at the forefront of this trend, offering virtual tours for a wide range of listings.
                    </p>
                </article>

                <div class="comments-section mt-4">
                    <h3>Comments</h3>
                </div>

                <div class="comment-form mt-4">
                    <h3>Leave a Comment</h3>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="comment" class="form-label">Comment</label>
                            <textarea class="form-control" id="comment" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary submit" onclick="showSuccessMessage()">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="additional-links text-center mt-4">
        <h3 class="pt-2 more">Explore More Real Estate Blogs</h3>
        <div class="container">
            <div class="row justify-content-center pt-2">
                <div class="col-md-4 mb-3">
                    <a href="https://www.propertyguru.com.my/property-news" class="btn btn-info text3" target="_blank">Real Estate Blog 1</a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="https://www.edgeprop.my/news" class="btn btn-info text3" target="_blank">Real Estate Blog 2</a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="https://www.starproperty.my/" class="btn btn-info text3" target="_blank">Real Estate Blog 3</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="mt-3">
        <div class="row">
            <div class="col-12 text-left">
                <a href="home.php" class="go-back-button">Go back</a>
            </div>
        </div>
    </footer>

    <script src="Blog.js"></script>
</body>
</html>