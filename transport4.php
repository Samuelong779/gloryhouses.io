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
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Transport</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="transport4.css">
        <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body class="body">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="title text-start pt-4">Here are the PJ22 Komersial Bandar Sri Damansara 7 (Bus Stop) address: </h1>
                    <ul>
                        <li class="address text-start">Bandar Sri Damansara, 52200 Petaling Jaya, Selangor</li>
                    </ul>

                    <img src="transport5.jpg" alt="Image 1" class="img-thumbnail" data-bs-toggle="modal" data-bs-target="#imageModal1">

                    <img src="transport6.png" alt="Image 2" class="img-thumbnail" data-bs-toggle="modal" data-bs-target="#imageModal2">
                </div>
            </div>
        </div>

        <div class="modal fade" id="imageModal1" tabindex="-1" aria-labelledby="imageModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="transport5.jpg" alt="Image 1" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="imageModal2" tabindex="-1" aria-labelledby="imageModalLabel2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="transport6.png" alt="Image 2" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <footer class="mt-2">
            <div class="row">
              <div class="col-12 text-left" >
                <a href="ChatWithBotTransportation.php" class="go-back-button">Go back</a>
              </div>
            </div>
        </footer>

        <script>
            var imageModals = new bootstrap.Modal(document.getElementById('imageModal1'));
            var imageModals2 = new bootstrap.Modal(document.getElementById('imageModal2'));
        </script>
    </body>
</html>