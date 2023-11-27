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
    <title>Chat with Bot Shopping Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="ChatWithBotshoppingcenter.css">
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  </head>
  <body class="body">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title pt-4 text-start">These are the nearby shopping centers or malls location (address) for your house area:</h1>
                <p class="house-location">Bandar Sri Damansara</p>
                <ol class="ol">
                    <li><a href="shoppingcenter.php" class="link">Ativa Plaza</a></li>
                    <li><a href="shoppingcenter2.php" class="link">DA Square at Damansara Avenue</a></li>
                    <li><a href="shoppingcenter3.php" class="link">Damansara City Mall (DC Mall)</a></li>
                    <li><a href="shoppingcenter4.php" class="link">HeroMarket Bandar Sri Damansara</a></li>
                    <li><a href="shoppingcenter5.php" class="link">Decathlon Sri Damansara</a></li>
                </ol>
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