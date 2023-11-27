<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Property Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
        </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initMap"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="property_details.css">
    <style>
        .property-image {
            max-width: 100%;
            height: auto;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .property-details {
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="register.php">Sell</a>
                </li>
            </ul>

            <a class="navbar-brand mx-auto" href="home.php">
                <img src="logo.png" alt="Image Alt Text" /> Glory House
            </a>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="Helps.php">Helps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="News.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <?php
        include 'connect.php';

        if (isset($_GET['propertyId'])) {
            $propertyId = mysqli_real_escape_string($conn, $_GET['propertyId']);
            $query = "SELECT * FROM properties WHERE propertyId = $propertyId";
            $result = mysqli_query($conn, $query);

            $imageQuery = "SELECT image_blob FROM images WHERE propertyId = $propertyId";
            $imageResult = mysqli_query($conn, $imageQuery);


            if ($result && $result->num_rows > 0) {
                $property = $result->fetch_assoc();
                ?>
                <div class="row">
                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <div class="form-group d-flex align-items-center">
                                    <div>
                                        <?php echo "<h2 class='form-title'>RM " . number_format($property['price'], 2) . "</h2><br>"; ?>
                                    </div>
                                    <div class="vertical-line"></div><br>

                                    <div class="d-flex align-items-center">
                                        <div class="icon-container">
                                            <?php echo "<i class='fa fa-bed fa-lg ms-3 mx-2'></i><br>"; ?>
                                            <?php echo "<span class='icon-text'>" . $property['rooms'] . ' Bedrooms</span>'; ?>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <div class="icon-container">
                                            <?php echo "<i class='fa fa-bath fa-lg mx-2 ms-3'></i><br>"; ?>
                                            <?php echo "<span class='icon-text'>" . $property['bathroom'] . ' Bathrooms</span>'; ?>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <div class="icon-container">
                                            <?php echo "<i class='fa fa-th-large fa-lg mx-2 ms-3'></i><br>"; ?>
                                            <?php echo "<span class='icon-text'>" . $property['sqft'] . ' sqft</span>'; ?>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                if (!empty($imageData['image_blob'])) {
                                    echo "<img src='data:image/jpeg;base64," . $imageData['image_blob'] .
                                         "' alt='House Image' class='property-image'>";
                                }
                                ?>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <div class="image-container">
                                    <img id="user-image" src="Seller People.png" alt="User Image">
                                </div>
                                <h2 class="form-title2 pt-2">Vicky Chong</h2>
                                <div class="whatsapp-container">
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="https://api.whatsapp.com/send?phone=YOUR_PHONE_NUMBER" target="_blank"
                                                class="whatsapp-link">
                                                <span class="whatsapp-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24"
                                                        height="24" viewBox="0 0 48 48">
                                                        <path fill="#fff"
                                                            d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
                                                        </path>
                                                        <path fill="#fff"
                                                            d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
                                                        </path>
                                                        <path fill="#cfd8dc"
                                                            d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
                                                        </path>
                                                        <path fill="#40c351"
                                                            d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
                                                        </path>
                                                        <path fill="#fff" fill-rule="evenodd"
                                                            d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </span>
                                                <span class="whatsapp-text">WhatsApp</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="phone-container mt-2">
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="Phone Number.php" target="_blank" class="phone-link">
                                                <img src="phone.png" alt="Phone Icon" class="phone-icon-image">
                                                <span class="view-phone-number-text">View Phone Number</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="icon-container">
                                        <?php echo "<i class='fa fa-envelope fa-lg mx-2 ms-3'></i>"; ?>
                                        <?php echo "<span class='icon-text'>" . $property['sqft'] . ' sqft</span>'; ?>
                                        <?php echo "<span class=''>Send Enquiry</span><br>"; ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="property-details">
                            <?php echo "<p><strong>Description:</strong> " . $property['about'] . "</p>"; ?>
                            <?php echo "<p><strong>City:</strong> " . $property['city'] . "</p>"; ?>
                            <?php echo "<p><strong>Bedrooms:</strong> " . $property['rooms'] . "</p>"; ?>
                            <?php echo "<p><strong>Bathrooms:</strong> " . $property['bathroom'] . "</p>"; ?>
                            <?php echo "<p><strong>Price:</strong> RM " . number_format($property['price'], 2) . "</p>"; ?>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                echo "<p>Property not found.</p>";
            }

            $conn->close();
        } else {
            echo "<p>Invalid request.</p>";
        }
        ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-oCddJj5C6hMKwAxXTJQFkEAqXiq/7QpgC/Pai+KDLMIpCkvr/z70/A5s9S6zOv71"
        crossorigin="anonymous"></script>
</body>

</html>