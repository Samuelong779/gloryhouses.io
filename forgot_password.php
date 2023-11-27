<?php
    
    $conn = new mysqli('localhost', 'root', '', 'web');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="forgot_password.css">
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="body">
    <div class="container pt-3">
        <div class="row">
            <div class="col">
                <form class="form-container">
                    <h1 class="title pt-3">Forgot Password:</h1>
                        <label class="emailaddress">Email Address:</label> <br>
                        <input type="email" class="email" name="email" placeholder="Enter Your Email Address">
                        <label class="resetpassword mt-3">Reset Password:</label> <br>
                            <div class="input-group">
                                <input type="password" class="reset" name="reset" id="passwordInput" placeholder="Enter Your New Password" required min="0">
                                <div class="input-group-append mt-3">
                                    <span class="input-group-text" style="background-color: transparent; border: none; margin-left: -10px; height: 35px;">
                                        <input type="checkbox" onclick="togglePassword()" style="margin-top: 0; width: 20px; height: 20px;">
                                        <span class="show ms-2"> Show Password </span>
                                    </span>
                                </div>
                            </div>
                        <label class="confirmPassword mt-3">Confirm Password:</label> <br>
                        <div class="input-group">
                            <input type="password" class="confirmpassword" name="confirmpassword" id="confirmpasswordInput" placeholder="Confirm Your Password" required min="0">
                            <div class="input-group-append mt-3">
                                <span class="input-group-text" style="background-color: transparent; border: none; margin-left: -10px; height: 35px;">
                                    <input type="checkbox" onclick="toggleConfirmPassword()" style="margin-top: 0; width: 20px; height: 20px;"> 
                                    <span class="show ms-2"> Show Password </span>
                                </span>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary submit mt-2">Change Password</button> 
                </form>
            </div>
        </div>
        <footer class="mt-3">
        <div class="row">
            <div class="col-12 text-left" >
                <a href="signIn.php" class="go-back-button">Go back</a>
            </div>
        </div>
    </footer>

    </div>

    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("passwordInput");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }

        function toggleConfirmPassword() {
        var confirmPasswordInput = document.getElementById("confirmpasswordInput");
        if (confirmPasswordInput.type === "password") {
            confirmPasswordInput.type = "text";
        } else {
            confirmPasswordInput.type = "password";
        }
    }
    </script>
</body>
</html>