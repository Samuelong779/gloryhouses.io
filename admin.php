<?php
include("connect.php");

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $query = mysqli_query($conn, 'SELECT * FROM admins WHERE email = "' . $email . '" AND password = "' . $password . '"');
    $numrows = mysqli_num_rows($query);
    if ($numrows == 1) {
        while ($row = mysqli_fetch_assoc($query)) {
            $email = $row['email'];
            $password = $row['password'];
        }
        if ($email == $email && $password == $password) {
            session_start();
            $_SESSION['email'] = $email;
            header("Location: admin_page.php");
        } else {
            $message = "Invalid email or password!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <Title>Login Form</Title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
        body {
            background: #62CBD5;
            font-family: 'Open Sans', 'PT Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        h1.title {
            font-weight: 500;
            margin: 0 0 30px;
        }

        .bucket {
            background: #fff;
            width: 450px;
            margin: 50px auto;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);

        }

        .buffer {
            padding: 40px;
        }

        .header {
            text-align: center;
        }

        .clearfix {
            clear: both;
            font-size: 1px;
            height: 0px;
        }

        form {
            width: auto;
        }

        input {
            float: none;
            width: 94%;
            margin-bottom: 20px;
            border: 1px solid #DBE5E7;
            border-radius: 2px;
            padding: 12px 10px;
            font-size: 14px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input.btn {
            background: #00B37C;
            color: #fff;
            padding: 10px;
            width: 100%;
            margin: 0;
            border-width: 1px;
            border-style: solid;
            border-color: #00A779 #009766 #00814E;
            box-shadow: 0 1px 2px rgba(255, 255, 255, 0.2) inset, 0 1px 2px rgba(0, 0, 0, 0.2), 0 -1px 2px rgba(0, 0, 0, 0.2) inset;
        }
    </style>
</head>

<body>
    <div class="bucket">
        <div class="buffer">
            <div class="header">
                <h1 class="title">Admin Login</h1>
            </div>
            <form method="post" action="">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" />
                <label for="password">Password</label>
                <input type="password" id="password" name="password" />

                <input class="btn" type="submit" value="Sign in" />
            </form>
        </div>
    </div>

</body>

</html>