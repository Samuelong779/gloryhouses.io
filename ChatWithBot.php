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
    <title>Chat with Bot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="ChatWithBot.css">
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  </head>
  <body class="body">
    <div class="container pt-3">
      <div class="row">
        <div class="col">
          <button onclick="openChat()" class="chatwithbot">Chat with Bot</button>
          <div id="chat-popup" class="chat-popup">
            <div class="chat-container">
              <div class="chat-header">
                <span class="close" onclick="closeChat()">&times;</span>
                <p class="chatbot-text">Welcome to our Real Estate AI ChatBot</p>
              </div>
              <div class="chat-content pt-2" id="chat-content">
                <p><strong>Chatbot:</strong> Hi, how can I help you?</p>
              </div>
              <input type="text" class="text" id="user-input" placeholder="Type your message here...">
              <button onclick="sendMessage()" class="send-button">Send</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container pt-5">
      <div class="row">
        <div class="col-12 text-left">
          <p class="description">This is Glory House Real Estate AI chatbot.It got 10 questions can be ask by the Buyers and Sellers.</p>
          <p class="description">The <b><i>Buyer</i></b> can ask about 6 questions to the AI chatbot. <b>[Questions 1 - Questions 6]</b></p>
          <span class="description">This is the Buyers Questions: </span><br>
          <span class="description ms-2">I have [RM?] budget, which house was suitable me to be buy?</span><br>
          <span class="description ms-2">Which house was suitable for me to buy it?</span><br>
          <span class="description ms-2">What is the information about financing options for my new house?</span><br>
          <span class="description ms-2">Can you provide information about nearby shopping centers or malls in the [your location] area</span><br>
          <span class="description ms-2">What are the transportation options available for my daily commute?</span><br>
          <span class="description ms-2">Could you please provide information about petrol stations near my house location?</span><br>      
          <p class="description pt-3">The <b><i>Seller</i></b> can ask about 4 questions to the AI chatbot. <b>[Questions 7 - Questions 10]</b></p>
          <span class="description">This is the Sellers Questions: </span><br>
          <span class="description ms-2">What is the current market value of my house in [your location]?</span><br>
          <span class="description ms-2">Should I hire a real estate agent, or is it possible to sell my house on my own?</span><br>
          <span class="description ms-2">Are there any tax implications I should be aware of when selling my house?</span><br>
          <span class="description ms-2">What are the key documents I need to gather for selling my house?</span>
        </div>
      </div>
    </div>

    <footer class="mt-2">
      <div class="row">
        <div class="col-12 text-left" >
          <a href="home.php" class="go-back-button">Go back</a>
        </div>
      </div>
    </footer>

  <script src="ChatWithBot.js"></script>
  </body>
</html>