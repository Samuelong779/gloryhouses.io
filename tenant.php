<?php
include("connect.php");

session_start();
if (!isset($_SESSION["tenant_name"])) {
    header("location: signIn.php");
    exit();
}

$loggedIn = isset($_SESSION['tenant_name']);

if (isset($_POST['upload_property'])) {
    $about = mysqli_real_escape_string($conn, $_POST['about']);
    $rooms = isset($_POST['rooms']) ? (int)$_POST['rooms'] : NULL;
    $bathroom = isset($_POST['bathroom']) ? (int)$_POST['bathroom'] : NULL;
    $price = (float)$_POST['price'];
    $sqft = mysqli_real_escape_string($conn, $_POST['sqft']);
    $image_blob = file_get_contents($_FILES["image"]["tmp_name"]);
    $length_ft = (float)$_POST['length_ft'];
    $width_ft = (float)$_POST['width_ft'];
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $zipCode = (int)$_POST['zipCode'];

    $query = "INSERT INTO properties (about, rooms, bathroom, price, sqft, image, length_ft, width_ft, state, city, zipCode) 
              VALUES ('$about', $rooms, $bathroom, $price, ST_GeomFromText('$sqft'), ?, $length_ft, $width_ft, '$state', '$city', $zipCode)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("b", $image_blob);
    $stmt->execute();
    $stmt->close();

    header("location: profile.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenant Page</title>
    <link rel="stylesheet" href="tenant.css"> 
    <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
            }

            header {
                background-color: #333;
                color: #fff;
                text-align: center;
                padding: 10px 0;
            }

            nav {
                background-color: #444;
                padding: 10px 0;
            }

            nav ul {
                border-radius: 10px;
                padding: auto;
                margin: 10px;
                list-style-type: none;
                text-align: center;
            }

            nav li {
                display: inline;
                margin: 0 10px;
            }

            nav a {
                color: #fff;
                text-decoration: none;
            }

            section.content {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 20px;
                margin: 20px 0;
                background-color: red;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            section.content h2 {
                margin-bottom: 10px;
            }

            section.content p {
                margin-bottom: 5px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            table, th, td {
                border: 1px solid #ccc;
            }

            th, td {
                padding: 10px;
                text-align: center;
            }

            footer {
                background-color: #333;
                color: #fff;
                text-align: center;
                padding: 10px 0;
                position: fixed;
                bottom: 0;
                width: 100%;
            }


    </style>
</head>
<body>
    <header>
        <h1>Welcome, Tenant!</h1>
    </header>

    <nav class="nav">
        <ul>
            <li><a href="profile.php">Properties</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <section class="content">
        <h2>Profile Information</h2>
        <p>Name: <?php echo $_SESSION["tenant_name"]; ?></p>
        <p>Email: <?php echo $_SESSION["tenant_email"]; ?></p>
        <p>Phone: <?php echo $_SESSION["tenant_phone"]; ?></p>
    </section>


        <section class="content">
            <h2>Upload Property</h2>
                <form action="profile.php" method="post" enctype="multipart/form-data">
                    <label for="about">About:</label>
                    <input type="text" name="about" id="about" required placeholder="About the property"><br><br>

                    <label for="rooms">Rooms:</label>
                    <input type="number" name="rooms" id="rooms" required><br><br>

                    <label for="bathroom">Bathroom:</label>
                    <input type="number" name="bathroom" id="bathroom"><br><br>

                    <label for="price">Price:</label>
                    <input type="number" step="0.01" name="price" id="price" required><br><br>

                    <label for="sqft">Sqft (Format: POINT(x y)):</label>
                    <input type="text" name="sqft" id="sqft" required placeholder="POINT(x y)"><br><br>

                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image" accept="image/*" required><br><br>

                    <label for="length_ft">Length (ft):</label>
                    <input type="number" step="0.01" name="length_ft" id="length_ft" required><br><br>

                    <label for="width_ft">Width (ft):</label>
                    <input type="number" step="0.01" name="width_ft" id="width_ft" required><br><br>

                    <label for="state">State:</label>
                    <input type="text" name="state" id="state" required><br><br>

                    <label for="city">City:</label>
                    <input type="text" name="city" id="city" required><br><br>

                    <label for="zipCode">Zip Code:</label>
                    <input type="number" name="zipCode" id="zipCode" required><br><br>

                    <input type="submit" name="upload_property" value="Upload Property">
                </form>
        </section>


    <footer>
        <p>&copy; 2023 Glory House</p>
    </footer>
</body>
</html>
