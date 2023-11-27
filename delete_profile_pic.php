<?php
include("connect.php");

session_start();

if (!isset($_SESSION["tenant_name"])) {
    header("location: signIn.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $deleteQuery = "UPDATE tenant SET profile_pic = NULL WHERE fname = '{$_SESSION['tenant_name']}'";
    $conn->query($deleteQuery);

    echo "Profile picture deleted successfully";
} else {
    echo "Invalid request method";
}
?>
