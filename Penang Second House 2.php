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
    <title>Glory House</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initMap"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Penang Second House 2.css">
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="Buyer.php">Buy</a>
                </li>
            </ul>

            <a class="navbar-brand mx-auto" href="home.php">
                <img src="logo.png" alt="Image Alt Text"> Glory House
            </a>                

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="Help.php">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="News.php">News</a>
                </li>
                <?php if ($loggedIn): ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="signIn.php">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="register.php">New Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="form-group d-flex align-items-center">
                        <div>
                            <h2 class="form-title">RM840,000</h2>
                            <h5 class="additional-text">Est. Repayment RM 3,500 / month</h5>
                            <h6 class="additional-text" style="color: darkred">Check your affordability
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </h6>
                        </div>
                        <div class="vertical-line"></div>

                        <div class="d-flex align-items-center">
                            <div class="icon-container">
                                <i class="fa fa-bed fa-lg ms-3 mx-2"></i><br>
                                <span class="icon-text">4 bed</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="icon-container">
                                <i class="fa fa-bath fa-lg mx-2 ms-3"></i><br>
                                <span class="icon-text">5 bath</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="icon-container">
                                <img src="blueprint.png" alt="Blueprint Icon" class="icon-image mx-2 ms-3"><br>
                                <span class="icon-text">1,900 sqft</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="icon-container">
                                <img src="house-design.png" alt="Times Icon" class="icon-image mx-2 ms-3">
                                <span class="icon-text">RM 538 psf</span>
                            </div>
                        </div>
                    </div>
                    <img src="Penang House 4.jpg" alt="House Image" class="house-image" id="houseImage">
                </form>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <div class="image-container">
                            <img id="user-image" src="Seller People.png" alt="User Image">
                        </div>
                        <div class="review-section">
                            <div class="rating">
                                <span class="rating-text">4.0</span>
                                <div class="stars">
                                    <span class="star active" id="star-1"><i class="fas fa-star"></i></span>
                                    <span class="star active" id="star-2"><i class="fas fa-star"></i></span>
                                    <span class="star active" id="star-3"><i class="fas fa-star"></i></span>
                                    <span class="star active" id="star-4"><i class="fas fa-star"></i></span>
                                    <span class="star" id="star-5"><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                        <h2 class="form-title2 pt-2">Jennie Ang</h2>                  
                        <div class="whatsapp-container">
                            <div class="row">
                                <div class="col-12">
                                    <a href="https://api.whatsapp.com/send?phone=123456789" target="_blank" class="whatsapp-link">
                                        <span class="whatsapp-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 48 48">
                                                <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
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
                        <div class="email-container mt-2">
                            <div class="row">
                                <div class="col-12">
                                    <a href="mailto:youremail@gmail.com" target="_blank" class="email-link">
                                        <img src="email.png" alt="Phone Icon" class="email-icon-image">
                                        <span class="send-enquiry-text">Send Enquiry</span>
                                    </a>
                                </div>
                            </div>
                        </div>               
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <h2 class="form-title">About this property</h2>
                        <p class="additional-text3">
                            • Bigger homes for multi-gen household <br>
                            • Choices of unit with separate utility space and home working space <br>
                            • Guarded and home alarm system
                        </p>
                        <a href="Penang Second House 3.php" class="view-more">View more...</a>
                    </div>
                    <div class="form-group text-right location-container">
                        <h2 class="form-title">Choose Your Location</h2>
                        <a href="javascript:void(0);" id="location-link" class="no-underline">
                            <span class="svg-icon-container">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="150" height="150" viewBox="0 0 48 48">
                                    <path fill="#1c9957" d="M42,39V9c0-1.657-1.343-3-3-3H9C7.343,6,6,7.343,6,9v30c0,1.657,1.343,3,3,3h30C40.657,42,42,40.657,42,39z"></path><path fill="#3e7bf1" d="M9,42h30c1.657,0-15-16-15-16S7.343,42,9,42z"></path><path fill="#cbccc9" d="M42,39V9c0-1.657-16,15-16,15S42,40.657,42,39z"></path><path fill="#efefef" d="M39,42c1.657,0,3-1.343,3-3v-0.245L26.245,23L23,26.245L38.755,42H39z"></path><path fill="#ffd73d" d="M42,9c0-1.657-1.343-3-3-3h-0.245L6,38.755V39c0,1.657,1.343,3,3,3h0.245L42,9.245V9z"></path><path fill="#d73f35" d="M36,2c-5.523,0-10,4.477-10,10c0,6.813,7.666,9.295,9.333,19.851C35.44,32.531,35.448,33,36,33s0.56-0.469,0.667-1.149C38.334,21.295,46,18.813,46,12C46,6.477,41.523,2,36,2z"></path><path fill="#752622" d="M36 8.5A3.5 3.5 0 1 0 36 15.5A3.5 3.5 0 1 0 36 8.5Z"></path><path fill="#fff" d="M14.493,12.531v2.101h2.994c-0.392,1.274-1.455,2.185-2.994,2.185c-1.833,0-3.318-1.485-3.318-3.318s1.486-3.318,3.318-3.318c0.824,0,1.576,0.302,2.156,0.799l1.548-1.547C17.22,8.543,15.92,8,14.493,8c-3.038,0-5.501,2.463-5.501,5.5s2.463,5.5,5.501,5.5c4.81,0,5.637-4.317,5.184-6.461L14.493,12.531z"></path>
                                </svg>
                            </span>
                        </a>
                        <br>
                        <span class="location">Bukit Mertajam, Penang</span>
                        <a href="PenangSecondHouseMap.php" class="view-on-map">View on Map</a>
                    </div>
                </form>
            </div>
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <form>
                    <div class="form-group">
                        <h2 class="form-title text-center">Rating and Reviews</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="lightgrey" class="bi bi-person-circle" viewBox="0 0 16 16"
                        style="margin-bottom: -15px;">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                        <span class="albert-text ms-2">Izzac</span>
                        <input type="file" id="image-input" accept="image/*" style="display: none;">
                        <div class="rating-container ms-3">
                            <div class="stars" id="star-rating">
                              <span class="star active" id="star-1"><i class="fas fa-star"></i></span>
                              <span class="star active" id="star-2"><i class="fas fa-star"></i></span>
                              <span class="star active" id="star-3"><i class="fas fa-star"></i></span>
                              <span class="star active" id="star-4"><i class="fas fa-star"></i></span>
                              <span class="star" id="star-5"><i class="fas fa-star"></i></span>
                            </div>
                            <span class="rating-date">18 November 2023</span><br>
                            <span class="review-text">Nice place to be stay and it is safe.</span> 
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="mt-3">
        <div class="row">
          <div class="col-12 text-left" >
            <a href="Penang Second House.php" class="go-back-button">Go back</a>
          </div>
        </div>
    </footer>

    <script src="Penang Second House 2.js"></script>
</body>
</html>