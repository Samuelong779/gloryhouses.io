<?php
include("connect.php");
session_start();

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);

    $select = "SELECT * FROM user_form WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        if ($row['user_type'] == 'client') {
            $_SESSION['client_name'] = $row['fname'];
            header('location: home.php');
            die();
        } elseif ($row['user_type'] == 'tenant') {
            $_SESSION['tenant_name'] = $row['fname'];
            $_SESSION['tenant_lname'] = $row['lname'];
            $_SESSION['tenant_email'] = $row['email'];
            $_SESSION['tenant_phone'] = $row['phone'];
            header('location: profile.php');
            die();
        }
    } else {
        $error = 'Incorrect email or password';
    }
}

if (isset($_POST['submit'])) {
    if (isset($_POST['email']) && isset($_POST['reset']) && isset($_POST['confirmpassword'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $newPassword = md5($_POST['reset']);
        $confirmPassword = md5($_POST['confirmpassword']);

        if ($newPassword === $confirmPassword) {
            $updatePassword = "UPDATE user_form SET password = '$newPassword' WHERE email = '$email'";
            if (mysqli_query($conn, $updatePassword)) {
                header('location: signIn.php');
                die();
            } else {
                $error = 'Error updating password: ' . mysqli_error($conn);
            }
        } else {
            $error = 'New password and confirm password do not match';
        }
    } else {
        $error = 'Invalid data submitted';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="signIn.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('passwordInput');
            const toggleButton = document.getElementById('toggleButton');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleButton.textContent = 'Hide Password';
            } else {
                passwordInput.type = 'password';
                toggleButton.textContent = 'Show Password';
            }
        }
    </script>
</head>

<body>
    <div class="form-container">
        <form action="" method="post">
            <?php
            if (isset($error)) {
                echo '<span class="error-msg"; style="color: red;">' . $error . '</span>';
            }
            ?>
            <img src="logo.png" alt="">
            <h1 class="title">To Continue to Glory House <br>Please Sign In</h1>
            <input type="email" class="email" name="email" placeholder="Email" required>
            <input type="password" class="password" id="passwordInput" name="password" placeholder="Password" required>
            <div class="row space-between">
            <span id="toggleButton"
                style="cursor: pointer; color: blue; font-style: italic; margin-right: 50px;"
                onclick="togglePasswordVisibility()">Show Password</span>
            <a href="forgot_password.php" style="margin-left: 10px; color: red; text-decoration: none;">Forgot Password?</a>
            </div>

            <input type="submit" name="submit" value="Sign In" class="form-btn">
            <p class="text">Don't have an account? <a href="register.php" class="register-link">Register</a></p>
        </form>
    </div>
</body>

</html>