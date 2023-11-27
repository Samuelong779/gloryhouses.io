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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/font/bootstrap-icons.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="SelangorFirstHouse.css">
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

        <div class="container pt-3">
            <div class="row">
                <div class="col">
                    <h1 class="description">Here are some photos for this property: </h1>
                </div>
            </div>
        </div>
        
        <div class="container images mt-3">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center align-items-center image-container" style="height: 300px;">
                            <img src="SelangorFirstHouse.jpg" class="d-block mx-auto img-fluid" alt="Image 1">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center image-container" style="height: 300px;">
                            <img src="SelangorFirstHouse2.jpg" class="d-block mx-auto img-fluid" alt="Image 2">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center image-container" style="height: 300px;">
                            <img src="SelangorFirstHouse3.jpg" class="d-block mx-auto img-fluid" alt="Image 3">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center image-container" style="height: 300px;">
                            <img src="SelangorFirstHouse4.jpg" class="d-block mx-auto img-fluid" alt="Image 4">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" data-bs-ride="carousel">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" data-bs-ride="carousel">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>  
        </div>     

        <div class="container">
            <div class="container mt-3 my-3">
                <div class="row">
                    <div class="col-md-3">
                        <img src="SelangorFirstHouse.jpg" alt="Image 1" class="img-thumbnail" data-bs-toggle="modal" data-bs-target="#imageModal1">
                    </div>
            
                    <div class="col-md-3">
                        <img src="SelangorFirstHouse2.jpg" alt="Image 2" class="img-thumbnail" data-bs-toggle="modal" data-bs-target="#imageModal2">
                    </div>
            
                    <div class="col-md-3">
                        <img src="SelangorFirstHouse3.jpg" alt="Image 3" class="img-thumbnail" data-bs-toggle="modal" data-bs-target="#imageModal3">
                    </div>
            
                    <div class="col-md-3">
                        <img src="SelangorFirstHouse4.jpg" alt="Image 4" class="img-thumbnail" data-bs-toggle="modal" data-bs-target="#imageModal4">
                    </div>
                </div>
            </div>            
        </div>
        
        <div class="modal fade" id="imageModal1" tabindex="-1" aria-labelledby="imageModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="SelangorFirstHouse.jpg" alt="Image 1" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="imageModal2" tabindex="-1" aria-labelledby="imageModalLabel2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="SelangorFirstHouse2.jpg" alt="Image 2" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="imageModal3" tabindex="-1" aria-labelledby="imageModalLabel3" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="SelangorFirstHouse3.jpg" alt="Image 3" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="imageModal4" tabindex="-1" aria-labelledby="imageModalLabel4" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="SelangorFirstHouse4.jpg" alt="Image 4" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <footer class="mt-3">
            <div class="row">
              <div class="col-12 text-left" >
                <a href="First House.php" class="go-back-button">Go back</a>
              </div>
            </div>
        </footer>

        <script>
            var imageModals = new bootstrap.Modal(document.getElementById('imageModal1'));
            var imageModals2 = new bootstrap.Modal(document.getElementById('imageModal2'));
            var imageModals3 = new bootstrap.Modal(document.getElementById('imageModal3'));
            var imageModals4 = new bootstrap.Modal(document.getElementById('imageModal4'));
        </script>
    </body>
</html>