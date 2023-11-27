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
    <title>Chat with Bot link</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="ChatWithBotlink.css">
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  </head>
  <body class="body">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title text-start pt-5">These are the suggestions for you to buy your house: </h1>
                <p class="suggestion-text">RM100K: </p>
                <span class="text ms-2">We are sorry to inform you that we are not sold RM100K house.</span>
            </div>
            <div class="col-12">
                <p class="suggestion-text2">RM200K: </p> 
                <a href="Buyer.php" class="link2"><span class="text2 ms-2">This link will let you to go the <b><i>Buyer Page</i></b> for seeing the house and seller information.</span></a>
            </div>
            <div class="col-12">
                <p class="suggestion-text">RM300K: </p> 
                <span class="text ms-2">We are sorry to inform you that we are not sold RM300K house.</span>
            </div>
            <div class="col-12">
                <p class="suggestion-text2">RM400K: </p> 
                <a href="Buyer.php" class="link2"><span class="text2 ms-2">This link will let you to go the <b><i>Buyer Page</i></b> for seeing the house and seller information.</span></a>
            </div>
            <div class="col-12">
                <p class="suggestion-text2">RM500K: </p> 
                <a href="Buyer.php" class="link2"><span class="text2 ms-2">This link will let you to go the <b><i>Buyer Page</i></b> for seeing the house and seller information.</span></a>
            </div>
            <div class="col-12">
                <p class="suggestion-text2">RM600K: </p> 
                <a href="Buyer.php" class="link2"><span class="text2 ms-2">This link will let you to go the <b><i>Buyer Page</i></b> for seeing the house and seller information.</span></a>
            </div>
            <div class="col-12">
                <p class="suggestion-text2">RM700K: </p> 
                <a href="Buyer.php" class="link2"><span class="text2 ms-2">This link will let you to go the <b><i>Buyer Page</i></b> for seeing the house and seller information.</span></a>
            </div>
            <div class="col-12">
                <p class="suggestion-text2">RM800K: </p> 
                <a href="Buyer.php" class="link2"><span class="text2 ms-2">This link will let you to go the <b><i>Buyer Page</i></b> for seeing the house and seller information.</span></a>
            </div>
            <div class="col-12">
                <p class="suggestion-text2">RM900K: </p> 
                <a href="Buyer.php" class="link2"><span class="text2 ms-2">This link will let you to go the <b><i>Buyer Page</i></b> for seeing the house and seller information.</span></a>
            </div>
            <div class="col-12">
                <p class="suggestion-text2">RM1M: </p> 
                <a href="Buyer.php" class="link2"><span class="text2 ms-2">This link will let you to go the <b><i>Buyer Page</i></b> for seeing the house and seller information.</span></a>
            </div>
        </div>
    </div>

    <footer class="mt-2">
        <div class="row">
          <div class="col-12 text-left" >
            <a href="ChatWithBot.php" class="go-back-button">Go back</a>
          </div>
        </div>
    </footer>
  </body>
</html>