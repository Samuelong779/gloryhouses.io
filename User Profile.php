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
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="User Profile.css">
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            <div class="col-md-4">
                <form>
                    <div class="form-group">
                        <h2 class="form-title">My Profile</h2>
                        <label for="name">Name</label>
                        <input type="text" id="name" class="form-control">
                        <label for="nationality">Nationality</label>
                        <input type="text" id="nationality" class="form-control">
                        <h3 class="form-subtitle2">Preferences</h3>
                        <label for="date">Move in date</label>
                        <input type="date" id="date" class="form-control" pattern="\d{2}/\d{2}/\d{2}" max="9999-12-31" min="2000-01-01">
                        
                        <label for="occupants">Number of Occupants</label>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="number" id="adults" class="form-control" placeholder="Adults" min="0" inputmode="numeric" pattern="[0-9]*">
                            </div>
                        </div>
                    
                        <div class="col-6">
                            <div class="form-group">
                                <input type="number" id="children" class="form-control" placeholder="Children" min="0" inputmode="numeric" pattern="[0-9]*">
                            </div>
                        </div>
                    </div>  
                    
                    <div class="row mt-3">
                        <div class="col-12">
                            <label for="budget" class="budget-label">Budget</label>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="number" id="max-rm" class="form-control" placeholder="Max RM Value" min="0" inputmode="numeric" pattern="[0-9]*">
                            </div>
                        </div>
                    
                        <div class="col-6">
                            <div class="form-group">
                                <input type="number" id="min-rm" class="form-control" placeholder="Min RM Value" min="0" inputmode="numeric" pattern="[0-9]*">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4 my-5">
                        <div class="col-12">
                            <a href="#" class="save-button">Save Changes</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col">
                        <form>
                            <div class="user-icon" id="user-icon">
                                <img src="Person.png" alt="Person Icon">
                                <input type="file" id="user-image-input" accept="image/*" style="display: none">
                            </div>    
                            <a href="#" id="change-picture" class="change-picture-button mt-5">Change Profile Picture</a>                        
                        </form>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col contact-details-form">
                        <form>
                            <h3 class="contact-details-text py-3">Contact Details</h3>
                            <label for="phone-number" class="phone-number-label">Phone Number</label>
                            <input type="text" id="phone-number" class="form-control">
                            
                            <label for="email" class="email-label pt-3">Email</label>
                            <input type="email" id="email" class="form-control">
                            
                            <a href="#" class="edit-button">Edit</a>
                        </form>
                    </div>                                                       
                </div>
            </div>
        </div>
    </div>
    
    <footer>
        <div class="scroll-up-button" id="scroll-up-button">
            <img src="chatbox.png" alt="Scroll Up Icon">
            <span class="chat-text">Chat</span>
        </div>        
    </footer>

    <script src="User Profile.js"></script>
</body>
</html>