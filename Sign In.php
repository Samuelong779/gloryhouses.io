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
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Sign In.css">
    <link href="https://fonts.googleapis.com/css?family=Adamina&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="pt-3 py-3">
    <div class="outer-container">
        <div class="form-container">
            <form action="your-action-url" method="POST" onsubmit="return validatePassword();">
                <div class="row mt-3">
                    <div class="col-12 text-left">
                        <a href="home.php">Go back</a>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <img src="logo.png" alt="Image" width="70" height="50">
                    </div>
                    <div class="col-12 text-center">
                        <h1 style="font-family: 'Inter', sans-serif;">Welcome to Glory House</h1>
                    </div>
                    <div class="col-12 text-center">
                        <h2 style="font-family: 'Inter', sans-serif;">Log in or sign up</h2>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Email Address">
                        </div>
                        <div class="mb-3">
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
                </div>

                <div class="row">
                    <div class="col-6">
                        <input class="form-check-input custom-checkbox" type="checkbox" name="remember" id="remember-me">
                        <label class="form-check-label custom-label mx-2" for="remember-me">
                            Remember-me
                        </label>
                    </div>
                    <div class="col-6 text-end">
                        <a href="#" class="forgot-password-link">Forgot Password?</a>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-primary">Continue</a>
                    </div>
                </div>

                <div class="row pt-4">
                    <div class="form-group col-5">
                        <hr class="my-4">
                    </div>
                    <div class="form-group col-2 text-center">
                        <span class="custom-or-text">or</span>
                    </div>
                    <div class="form-group col-5">
                        <hr class="my-4">
                    </div>
                </div>

                <div class="login-options text-center pb-0">
                    <a href="#" class="btn google-button btn-lg btn-block btn-primary mt-3 p-2">
                        <i class="fa fa-google me-2"></i>
                        Continue with Google
                    </a>
                    <a href="#" class="btn apple-button btn-lg btn-block btn-primary mt-3">
                        <i class="fa fa-apple me-2"></i>
                        Continue with Apple
                    </a>
                    <a href="#" class="btn facebook-button btn-lg btn-block btn-primary mb-2 p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3b5998" class="bi bi-facebook me-2" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                        </svg>
                        Continue with Facebook
                    </a>
                </div>
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <span style="font-family: 'Intel', sans-serif; color: black;">Are you a seller?</span>
                    </div>
                    <div class="col-12 text-center pt-3">
                        <a href="Seller Profile.php" class="seller-link">Log in to SellerNet</a>
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
    <script src="Sign In.js"></script>
</body>
</html>