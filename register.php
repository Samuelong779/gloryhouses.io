<?php
include("connect.php");

if (isset($_POST['submit'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $user_type = $_POST['user-type'];

    $userId = 'GH' . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);

    $select = "SELECT * FROM user_form WHERE email = '$email'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'User already exists!';
    } else {
        if ($password != $cpassword) {
            $error[] = 'Passwords do not match!';
        } else {
            $insert = "INSERT INTO user_form(userId, fname, lname, email, phone, password, user_type) 
        VALUES ('$userId', '$fname', '$lname', '$email', '$phone', '$password', '$user_type')";

            if (mysqli_query($conn, $insert)) {
                $insertTenant = "INSERT INTO tenant(fname, lname, email, password, phone, user_type, userId) 
            VALUES ('$fname', '$lname', '$email', '$password', '$phone', '$user_type', '$userId')";

                if (mysqli_query($conn, $insertTenant)) {
                    header("location: signIn.php");
                } else {
                    $error[] = 'Something went wrong with tenant insertion!' . mysqli_error($conn);
                }
            } else {
                $error[] = 'Something went wrong with user_form insertion!' . mysqli_error($conn);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
    <style>
        .form-container form .error-msg {
            color: red;
            font-size: 18px;
        }

        .form-container {
            margin-bottom: -380px;
        }

        .title {
            font-family: 'Karma', sans-serif;
            font-size: 28px;
            color: #000000;
            font-weight: bold;
        }

        .title2 {
            font-family: 'Karma', sans-serif;
            font-size: 18px;
            color: #000000;
            font-weight: bold;
        }

        .title3 {
            font-family: 'Karma', sans-serif;
            font-size: 15px;
            color: #FFFFFF;
            font-weight: bold;
        }

        .text {
            font-family: 'Karma', sans-serif;
            font-size: 13px;
            color: #000000;
            font-weight: bold;
        } 
    </style>
</head>

<body>
    <div class="form-container">
        <form action="" method="post">
            <img src="logo.png" alt="">
            <h1 class="title mt-2">Welcome To Glory House Register Now</h1>
            <?php
            if (isset($error)) {
                foreach ($error as $err) {
                    echo '<span class="error-msg";>' . $err . '</span>';
                }
            }
            ?><br>
            <img src="house.png" alt="">
            <input type="text" class="text" name="fname" placeholder="First Name" required>
            <input type="text" class="text" name="lname" placeholder="Last Name" required>
            <input type="email" class="text" name="email" placeholder="Enter Your Email" required>
            <input type="text" class="text" name="phone" placeholder="Enter Your Phone Number" required>
            <input type="password" class="text" name="password" placeholder="Enter your password" required>
            <input type="password" class="text" name="cpassword" placeholder="Confirm your password" required>
            <p class="title2">Register as:</p>
            <select name="user-type" id="" required class="text">
                <option value="client" class="text">Buyer</option>
                <option value="tenant" class="text">Seller</option>
            </select>
            <input type="submit" name="submit" value="REGISTER" class="form-btn title3">
            <p class="text">Already have an account? <a href="signIn.php" class="login-link">Login</a></p>
        </form>
    </div>
</body>
</html>