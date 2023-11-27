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
        <title>Careers</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="Careers.css">
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

        <div class="container description">
            <div class="row">
                <div class="col">
                    <h1 class="title text-center pt-3">Join Our Team</h1>
                    <p class="text text-start">
                        Welcome to Glory House Real Estate! We are constantly looking for passionate, talented individuals to join our team and contribute to our success. If you're ready to make a difference and thrive in a dynamic environment, explore the exciting career opportunities below.
                    </p>
        
                    <h2 class="mission">Current Openings</h2>
                    <ul class="text text-start">
                        <li>Real Estate Agent</li>
                        <li>Property Manager</li>
                        <li>Marketing Specialist</li>
                    </ul>
        
                    <p class="text text-start">
                        We believe in fostering a collaborative and inclusive workplace where every team member is valued. At Glory House Real Estate, you'll have the opportunity to grow both personally and professionally. Join us on our mission to redefine the real estate experience!
                    </p>
        
                    <h2 class="mission">Why Join Glory House Real Estate?</h2>
                    <ul class="text text-start">
                        <li>Exciting and challenging work environment</li>
                        <li>Opportunities for career advancement</li>
                        <li>Competitive compensation and benefits</li>
                        <li>Commitment to professional development</li>
                        <li>Inclusive and diverse company culture</li>
                    </ul>
        
                    <p class="text text-start">
                        If you're passionate about real estate and ready to take your career to new heights, we want to hear from you! Check our current openings and apply today.
                    </p>
                    
                    <p class="text text-start">
                        To apply, please send your resume and cover letter to <a href="mailto:gloryhouse072@gmail.com" class="email">gloryhouse072@gmail.com</a>. Please include the position you are applying for in the subject line.
                    </p>
                </div>
            </div>
        </div>

        <footer class="mt-3">
            <div class="row">
              <div class="col-12 text-left" >
                <a href="home.php" class="go-back-button">Go back</a>
              </div>
            </div>
        </footer>
    </body>
</html>