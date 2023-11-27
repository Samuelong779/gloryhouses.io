<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: admin.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
</head>
<style>
    body {
        background-color: #62CBD5;
    }
    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }
    nav li {
        float: left;
        flex-direction: row;
        justify-content: space-between;
    }
    nav li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    nav li a:hover {
        background-color: #111;
    }
</style>
<body>
    <nav>
        <ul>
            <li><a href="admin_page.php">Home</a></li>
            <li><a href="admin_page.php">Properties</a></li>
            <li><a href="admin_page.php">Users</a></li>
        </ul>
    </nav>
</body>
</html>