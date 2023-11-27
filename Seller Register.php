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
    <title>Seller Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Seller Register.css">
    <link href="https://fonts.googleapis.com/css?family=Adamina&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="pt-3 py-3">
    <div class="outer-container">
        <div class="form-container">
            <form action="your-action-url" method="POST" onsubmit="return validatePassword();">
                <div class="row mt-2">
                    <div class="col-12 text-left">
                        <a href="home.php">Go back</a>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-12 text-center">
                        <img src="logo.png" alt="Image" width="70" height="50">
                    </div>
                    <div class="col-12 text-center">
                        <h1 style="font-family: 'Inter', sans-serif;">Welcome to Glory House</h1>
                    </div>
                    <div class="col-12 text-center">
                        <h2 style="font-family: 'Inter', sans-serif;">Register</h2>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-12">
                        <div class="mb-1">
                            <input type="text" class="form-control" id="username" placeholder="Username">
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-12">
                        <div class="mb-1">
                            <input type="email" class="form-control" id="email" placeholder="Email Address">
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-12">
                        <div class="mb-1">
                            <input type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number">
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-12">
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" placeholder="Password">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                    <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="passwordError" class="text-danger"></div>
                </div>
                
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="input-group">
                            <input type="password" class="form-control" id="retypePassword" placeholder="RE: Type Password">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="toggleRetypePassword">
                                    <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="retypePasswordError" class="text-danger"></div>
                </div>
                
                <div class="row mt-2">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-primary">Register</a>
                    </div>
                </div>

                <div class="row mt-2 pt-5">
                    <div class="col-12 text-center">
                        <a href="User Profile.php" class="seller-link">Register as a User</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <hr class="line-below">
                    </div>
                    <div class="col-12 text-center">
                        <p class="terms-policy-text">
                            I agree to Glory House
                            <a href="#" class="terms-link term-service">Terms of Service</a> and
                            <a href="#" class="terms-link privacy-policy">Privacy Policy</a> including the collection, use, and disclosure of my personal information.
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="Seller Register.js"></script>
</body>
</html>
