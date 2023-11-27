<?php
include("connect.php");

session_start();
if (!isset($_SESSION["tenant_name"])) {
    header("location: signIn.php");
    exit();
}

$loggedIn = isset($_SESSION['tenant_name']);


if (isset($_POST['uploadproperty'])) {
    $about = mysqli_real_escape_string($conn, $_POST['about']);
    $rooms = isset($_POST['rooms']) ? (int) $_POST['rooms'] : NULL;
    $bathroom = isset($_POST['bathroom']) ? (int) $_POST['bathroom'] : NULL;
    $price = (float) $_POST['price'];
    $sqft = (float) $_POST['sqft'];
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $zipCode = (int) $_POST['zipCode'];

    $query = "INSERT INTO properties (about, rooms, bathroom, price, sqft, state, city, zipCode) 
              VALUES ('$about', $rooms, $bathroom, $price, $sqft, '$state', '$city', $zipCode)";
    $conn->query($query);

    $propertyId = $conn->insert_id;

    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        if (empty($_FILES['images']['name'][$key])) {
            continue;
        }

        $image_blob = $conn->real_escape_string(file_get_contents($tmp_name));

        $query = "INSERT INTO images (propertyId, image_blob) VALUES ($propertyId, '$image_blob')";
        $conn->query($query);

        $loggedInUserEmail = $conn->real_escape_string($_SESSION['tenant_email']);
        $insertUserQuery = "INSERT INTO tenant (fname, lname, email, password, phone, user_type, userId, propertiesId) 
                    SELECT fname, lname, email, password, phone, user_type, userId, $propertyId
                    FROM user_form
                    WHERE email = '$loggedInUserEmail'";
    }
    header("location: profile.php?propertyId=$propertyId");
    exit();
}
$totalListedPropertiesQuery = "SELECT COUNT(*) as totalProperties FROM properties";
$totalListedPropertiesResult = $conn->query($totalListedPropertiesQuery);

if ($totalListedPropertiesResult && $totalListedPropertiesResult->num_rows > 0) {
    $totalPropertiesData = $totalListedPropertiesResult->fetch_assoc();
    $totalListedProperties = $totalPropertiesData['totalProperties'];
} else {
    $totalListedProperties = 0;
}

$propertiesQuery = "SELECT p.*, i.image_blob 
                    FROM properties p 
                    LEFT JOIN images i ON p.propertyId = i.propertyId";
$propertiesResult = $conn->query($propertiesQuery);

if (isset($_POST['editprofile'])) {
    $newPhoneNumber = mysqli_real_escape_string($conn, $_POST['newPhoneNumber']);

    $updateQuery = "UPDATE tenant SET phone = '$newPhoneNumber' WHERE fname = '{$_SESSION['tenant_name']}'";
    $conn->query($updateQuery);

    $updateQueryUserForm = "UPDATE user_form SET phone = '$newPhoneNumber' WHERE fname = '{$_SESSION['tenant_name']}'";
    $conn->query($updateQueryUserForm);

    if (!empty($_FILES['newProfileImage']['tmp_name'])) {
        $newProfileImage = $conn->real_escape_string(file_get_contents($_FILES['newProfileImage']['tmp_name']));
        $updateImageQuery = "UPDATE tenant SET profile_pic = '$newProfileImage' WHERE fname = '{$_SESSION['tenant_name']}'";
        $conn->query($updateImageQuery);
    }
    header("location: profile.php");
    exit();
}
$profilePicQuery = "SELECT profile_pic FROM tenant WHERE fname = '{$_SESSION['tenant_name']}'";
$profilePicResult = $conn->query($profilePicQuery);

if ($profilePicResult && $profilePicResult->num_rows > 0) {
    $profilePicData = $profilePicResult->fetch_assoc();
    $profilePicSrc = "data:image/jpeg;base64," . base64_encode($profilePicData['profile_pic']);
} else {
    $profilePicSrc = "default_profile_pic.jpg";
}


$fetchPhoneQuery = "SELECT phone FROM tenant WHERE fname = '{$_SESSION['tenant_name']}'";
$fetchPhoneResult = $conn->query($fetchPhoneQuery);

if ($fetchPhoneResult && $fetchPhoneResult->num_rows > 0) {
    $phoneData = $fetchPhoneResult->fetch_assoc();
    $tenantPhone = $phoneData['phone'];
} else {
    echo "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="profile.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .modal-title {
            font-family: 'Kaushan Script', cursive;
            font-size: 25px;
            color: rgb(63, 52, 219);
            font-weight: 600;
            text-shadow: 4px 4px 6px rgba(234, 0, 255, 0.7);
            transition: text-shadow 0.5s
        }

        .text {
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            color: #000000;
            font-weight: 600;
        }

        .text2 {
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            color: #000000;
        }

        .close {
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            color: #FFFFFF;
            background-color: deepskyblue;
            border-radius: 5px;
            border: 1px solid deepskyblue;
            height: 35px;
            width: 80px;
        }
        .close:hover {
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            color: #FFFFFF;
            background-color: deepskyblue;
            border-radius: 5px;
            border: 1px solid deepskyblue;
            height: 35px;
            width: 80px;
        }

        .uploadproperty {
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            color: #FFFFFF;
            background-color: darkseagreen;
            border-radius: 5px;
            border: 1px solid darkseagreen;
            height: 35px;
            width: 80px;
        }

        .uploadproperty:hover {
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            color: #FFFFFF;
            background-color: darkseagreen;
            border-radius: 5px;
            border: 1px solid darkseagreen;
            height: 35px;
            width: 80px;
        }

        .form-left,
        .form-center,
        .form-right {
            text-align: center; 
        }

        .form-text {
            margin: 0; 
        }

        input {
            width: 100%; 
            box-sizing: border-box; 
            margin-bottom: 10px; 
            outline: none; 
            border: 1px solid #ccc; 
        }
        
        .form-text {
            font-family: 'Inter', sans-serif;
            font-weight: bold;
            font-size: 13px;
            color: grey;
        }

        .form-text2 {
            font-family: 'Inter', sans-serif;
            font-weight: bold;
            font-size: 13px;
            color: #000000;
        }

        .newPhoneNumber {
            font-family: 'Inter', sans-serif;
            font-weight: bold;
            font-size: 13px;
            color: #000000;
        }

        .test {
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            color: #000000;
        }

        .newProfileImage {
            font-family: 'Inter', sans-serif;
            font-weight: bold;
            font-size: 13px;
            color: #000000;
        }

        .delete {
            background-color: #FF3737;
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            color: #FFFFFF;
            border: 1px solid #FF3737;
            border-radius: 5px;
        }

        .delete:hover {
            background-color: #FF3737;
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            color: #FFFFFF;
            border: 1px solid #FF3737;
            border-radius: 5px;
        }

        .close2 {
            background-color: #C0C0C0;
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            color: #FFFFFF;
            border: 1px solid #C0C0C0;
            border-radius: 5px;
            height: 36px;
            width: 86px;
        }

        .close2:hover {
            background-color: #C0C0C0;
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            color: #FFFFFF;
            border: 1px solid #C0C0C0;
            border-radius: 5px;
            height: 36px;
            width: 86px;
        }

        .change {
            background-color: #008000;
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            color: #FFFFFF;
            border: 1px solid #008000;
            border-radius: 5px;
            height: 36px;
            width: 86px;
        }

        .change:hover {
            background-color: #008000;
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            color: #FFFFFF;
            border: 1px solid #008000;
            border-radius: 5px;
            height: 36px;
            width: 86px;
        }

    </style>
</head>
<body>
    <nav class="navbar" id="navbar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a class="navbar-brand mx-auto" href="">
                        <img src="logo.png" alt="Image Alt Text">
                        Glory House
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <form method="post" enctype="multipart/form-data">
        <div class="modal fade" id="editprofile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="editprofileLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editprofileLabel">Edit Profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="newPhoneNumber" class="newPhoneNumber">New Phone Number:</label>
                        <input type="text" name="newPhoneNumber" id="newPhoneNumber" class="test"
                            value="<?php echo $_SESSION['tenant_phone']; ?>" required><br><br>

                        <label for="newProfileImage" class="newProfileImage">New Profile Image:</label>
                        <input type="file" name="newProfileImage" id="newProfileImage" accept="image/*" class="test"><br><br>

                        <button type="button" class="btn btn-danger delete" id="deleteProfilePicBtn">Delete Profile
                            Pic</button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close2" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="editprofile" class="btn btn-primary change">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form method="post" enctype="multipart/form-data">
        <div class="modal fade" id="insertproperty" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="insertpropertyLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="insertproperty">Upload Property</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start">
                        <label for="about" class="text">About:</label><br>
                        <input type="text" class="text2" name="about" id="about" required placeholder="About the property"><br>
                        
                        <label for="rooms" class="text mt-3">Rooms:</label><br>
                        <input type="number" class="text2" name="rooms" id="rooms" required><br>

                        <label for="bathroom" class="text mt-3">Bathroom:</label><br>
                        <input type="number" class="text2" name="bathroom" id="bathroom"><br>

                        <label for="price" class="text mt-3">Price:</label><br>
                        <input type="number" class="text2" step="0.01" name="price" id="price" required><br>

                        <label for="sqft" class="text mt-3">Sqft:</label><br>
                        <input type="text" class="text2" name="sqft" id="sqft" required placeholder="Square Feet"><br>

                        <label for="images" class="text mt-3">Images:</label><br>
                        <input type="file" class="text2" name="images[]" id="images" accept="image/*" multiple required><br>

                        <label for="state" class="text mt-3">State:</label><br>
                        <input type="text" class="text2" name="state" id="state" required><br>

                        <label for="city" class="text mt-3">City:</label><br>
                        <input type="text" class="text2" name="city" id="city" required><br>

                        <label for="zipCode" class="text mt-3">Zip Code:</label><br>
                        <input type="number" class="text2" name="zipCode" id="zipCode" required><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="uploadproperty" class="btn btn-primary uploadproperty">Upload</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <form>
                    <div class="form-group">
                        <div class="image-container">
                            <?php
                            if (!empty($profilePicSrc)) {
                                echo '<img id="user-image" class="rounded-circle" src="' . $profilePicSrc . '" alt="Profile Pic">';
                            } else {
                                echo '<img id="user-image" class="rounded-circle" src="default_profile_pic.jpg" alt="Default Profile Pic">';
                            }
                            ?>
                        </div>

                        <div class="additional-info">
                            <p> First Name(s):
                                <?php echo $_SESSION["tenant_name"]; ?>
                            </p>
                            <p>Last Name:
                                <?php echo $_SESSION["tenant_lname"]; ?>
                            </p>
                            <p>Phone:
                                <?php echo $_SESSION["tenant_phone"]; ?>
                            </p>
                            <p>Email:
                                <?php echo $_SESSION["tenant_email"]; ?>
                            </p>
                        </div>

                        <div class="social-icons">
                            <a class="round-icon" href="https://www.facebook.com"
                                style="background-color: lightgrey; color: #1877F2;">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                            <a class="round-icon" href="https://www.twitter.com"
                                style="background-color: lightgrey; color: #1DA1F2;">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="round-icon" href="https://www.linkedin.com"
                                style="background-color: lightgrey; color: #0072b1;">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>

                        <div class="col mt-3">
                            <button type="button" class="float-start" data-bs-toggle="modal"
                                data-bs-target="#editprofile" 
                                style="background-color: skyblue; font-size: 16px; font-family: 'Inter', sans-serif; border-radius: 5px; border: 1px solid skyblue; color: #ffffff; width: 100px; height: 36px;">
                                Edit Profile
                            </button>
                            <button type="button" class="btn btn-secondary float-end" data-bs-toggle="modal"
                                data-bs-target="#insertproperty"
                                style="background-color: lightgrey; font-family: 'Inter', sans-serif; font-size: 16px; border-radius: 5px; border: 1px solid lightgrey; color: #ffffff; width: 200px; height: 36px;">
                                Upload Properties
                            </button><br>
                        </div><br><br>
                        <button class="btn btn-primary float-start" style="background-color: red; border: 1px solid red; font-family: 'Inter', sans-serif; font-size: 16px; color: #ffffff; width: 100px; height: 36px;"><a href="logout.php"
                                style="color:aliceblue; text-decoration: none;">Logout</a></button>
                        <br><br>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col">
                        <form>
                            <div class="form-container">
                                <p class="property-status">Property status</p>
                                
                                <div class="form-left">
                                    <label for="totalListings" class="form-text">Total Listings</label>
                                    <input type="number" class="form-text2" id="totalListings" name="totalListings" placeholder="Enter total listings" required min="0">
                                </div>
                                
                                <div class="form-center">
                                    <label for="propertySold" class="form-text">Property sold</label>
                                    <input type="number" class="form-text2" id="propertySold" name="propertySold" placeholder="Enter property sold" required min="0">
                                </div>

                                <div class="form-right">
                                    <label for="percentage" class="form-text">Percentage</label>
                                    <input type="number" class="form-text2" id="percentage" name="percentage" placeholder="Enter percentage" required min="0">
                                </div>
                            </div>                        
                        </form>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <form>
                            <div class="row">
                                <div>
                                    <p>Properties Listed</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="Seller Profile 2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script>
        document.getElementById("deleteProfilePicBtn").addEventListener("click", function () {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "delete_profile_pic.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    alert(xhr.responseText);
                    location.reload();
                }
            };
            xhr.send();
        });

        document.addEventListener("DOMContentLoaded", function () {
            var checkButtons = document.querySelectorAll('.check-btn');

            checkButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    var propertyId = this.getAttribute('data-property-id');
                    markPropertyAsChecked(propertyId);
                });
            });

            function markPropertyAsChecked(propertyId) {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "mark_property_checked.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        alert(xhr.responseText);
                        location.reload();
                    }
                };
                xhr.send("propertyId=" + propertyId);
            }
        });
    </script>
</body>

</html>