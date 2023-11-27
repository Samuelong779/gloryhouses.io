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
        <title>Seller Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="Seller page.css">
        <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body class="color">
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

        <div class="container form mt-3 text-center">
            <form>
                <h2 class="top-form-text mt-5">Add your house images:</h2>
                <label for="imageInput1" class="mt-3 my-5" id="imageInputLabel1">
                    <img src="add image.png" alt="House Image" class="house-image" id="userImage1">
                </label>
            </form>
        </div>

        <div class="container form mt-3 text-center">
            <form>
                <h2 class="top-form-text mt-5">Add your house images:</h2>
                <label for="imageInput2" class="mt-3 my-5" id="imageInputLabel2">
                    <img src="add image.png" alt="House Image" class="house-image" id="userImage2">
                </label>
            </form>
        </div>

        <div class="container form mt-3 text-center">
            <form>
                <h2 class="top-form-text mt-5">Add your house images:</h2>
                <label for="imageInput3" class="mt-3 my-5" id="imageInputLabel3">
                    <img src="add image.png" alt="House Image" class="house-image" id="userImage3">
                </label>
            </form>
        </div>

        <div class="container form mt-3 text-center">
            <form>
                <h2 class="top-form-text mt-5">Add your house images:</h2>
                <label for="imageInput4" class="mt-3 my-5" id="imageInputLabel4">
                    <img src="add image.png" alt="House Image" class="house-image" id="userImage4">
                </label>
            </form>
        </div>

        <div class="container form mt-3 text-center">
            <form>
                <h2 class="top-form-text mt-5">Add your house images:</h2>
                <label for="imageInput5" class="mt-3 my-5" id="imageInputLabel5">
                    <img src="add image.png" alt="House Image" class="house-image" id="userImage5">
                </label>
            </form>
        </div>

        <div class="container form mt-3 my-3 text-center">
            <form>
                <h1 class="top-form-text mt-5">Add your house information:</h1>
        
                <div class="mb-3 text-start">
                    <label for="houseAddress" class="form-label custom-label">House Address:</label>
                    <input type="text" class="form-control custom-input" id="houseAddress" placeholder="Enter your house address" required>
                </div>
        
                <div class="mb-3 text-start">
                    <label for="housePrice" class="form-label custom-label">House Price:</label>
                    <div class="input-group">
                        <span class="input-group-text custom-label">RM</span>
                        <input type="number" class="form-control custom-input" id="housePrice" placeholder="Enter the house price" required min="0">
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-md-6 mb-3 text-start">
                        <label for="houseWidth" class="form-label custom-label">House Width:</label>
                        <input type="number" class="form-control custom-input" id="houseWidth" placeholder="Enter the house width" required min="0">
                    </div>
        
                    <div class="col-md-6 mb-3 text-start">
                        <label for="houseLength" class="form-label custom-label">House Length:</label>
                        <input type="number" class="form-control custom-input" id="houseLength" placeholder="Enter the house length" required min="0">
                    </div>
                </div>              
            </form>
        </div>

        <div class="container form mt-3 my-3 text-center">
            <h2 class="top-form-text mt-5">Agent Information:</h2>
        
            <div class="mb-3 text-start">
                <label for="agentName" class="form-label custom-label">Agent Name:</label>
                <input type="text" class="form-control custom-input" id="agentName" placeholder="Enter agent name" required>
            </div>
        
            <div class="mb-3 text-start">
                <label for="whatsappLink" class="form-label custom-label">WhatsApp Number Link:</label>
                <input type="text" class="form-control custom-input" id="whatsappLink" placeholder="Enter WhatsApp number link" required>
            </div>
        
            <div class="mb-3 text-start">
                <label for="handphoneNumber" class="form-label custom-label">Handphone Number:</label>
                <input type="tel" class="form-control custom-input" id="handphoneNumber" placeholder="Enter handphone number" required>
            </div>
        
            <div class="mb-3 text-start">
                <label for="emailAddress" class="form-label custom-label">Email Address:</label>
                <input type="email" class="form-control custom-input" id="emailAddress" placeholder="Enter email address" required>
            </div>
        </div>

        <div class="container form mt-3 my-3 text-center">
            <h2 class="top-form-text mt-5">Seller Information:</h2>
        
            <div class="mb-3 text-start">
                <label for="sellerName" class="form-label custom-label">Seller Name:</label>
                <input type="text" class="form-control custom-input" id="sellerName" placeholder="Enter seller name" required>
            </div>
        
            <div class="mb-3 text-start">
                <label for="whatsappLink" class="form-label custom-label">WhatsApp Number Link:</label>
                <input type="text" class="form-control custom-input" id="whatsappLink" placeholder="Enter WhatsApp number link" required>
            </div>
        
            <div class="mb-3 text-start">
                <label for="handphoneNumber" class="form-label custom-label">Handphone Number:</label>
                <input type="tel" class="form-control custom-input" id="handphoneNumber" placeholder="Enter handphone number" required>
            </div>
        
            <div class="mb-3 text-start">
                <label for="emailAddress" class="form-label custom-label">Email Address:</label>
                <input type="email" class="form-control custom-input" id="emailAddress" placeholder="Enter email address" required>
            </div>
        
        </div>

        <footer>
            <div class="container footer">
                <button type="button" class="btn btn-custom float-end mb-3" onclick="submitForm()">Submit</button>
            </div>
    
            <div id="successMessage" class="container text-center mt-3" style="display: none;">
                <p class="text-success">You have successfully added your and your house information.</p>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js" integrity="sha384-XXXXX" crossorigin="anonymous"></script>
        <script src="Seller page.js"></script>

        <script>
            function submitForm() {
                var name = document.getElementById("houseAddress").value;
                var price = document.getElementById("housePrice").value;
                var width = document.getElementById("houseWidth").value;
                var length = document.getElementById("houseLength").value;
                var agentName = document.getElementById("agentName").value;
                var whatsappLink = document.getElementById("whatsappLink").value;
                var handphoneNumber = document.getElementById("handphoneNumber").value;
                var emailAddress = document.getElementById("emailAddress").value;
                var sellerName = document.getElementById("sellerName").value;

                if (name && price && width && length && agentName && whatsappLink && handphoneNumber && emailAddress && sellerName) {
                    showSuccessMessage();

                } else {
                    alert("Please fill in all the required fields.");
                }
            }

            function showSuccessMessage() {
                document.getElementById("houseForm").style.display = "none";

                document.getElementById("successMessage").style.display = "block";
            }

        </script>
    </body>
</html>