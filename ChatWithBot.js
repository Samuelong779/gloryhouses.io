let firstMessageSent = false; 
let questionCount = 0; 

function openChat() {
  document.getElementById("chat-popup").style.display = "block";
}

function closeChat() {
  document.getElementById("chat-popup").style.display = "none";
}

async function getAIResponse(prompt) {
  const apiKey = 'your_actual_api_key'; 
  try {
  } catch (error) {
  }
}

function sendMessage() {
  let userInput = document.getElementById("user-input").value;
  document.getElementById("chat-content").innerHTML += `<p><strong>You:</strong> ${userInput}</p>`;

  if (!firstMessageSent) {
    document.getElementById("chat-content").innerHTML += "<p><strong>Chatbot:</strong> I will help you find a suitable house.</p>";
    firstMessageSent = true;

    questionCount = 1;
  } else {
    if (questionCount === 2) {
      handleAIResponse(userInput);
    } else if (questionCount === 3) {
      handleAlternateResponse(userInput);
    } else if (questionCount === 4) {
      handleAlternateResponse(userInput);
    } else if (questionCount === 5) {
      handleAdditionalQuestions(userInput);
    } else if (questionCount === 6) {
      handleAdditionalQuestions(userInput);
    } else if (questionCount === 7) {
      handleAdditionalQuestions(userInput);
    } else if (questionCount === 8) {
      handleAdditionalQuestions (userInput);
    } else if (questionCount === 9) {
      handleAdditionalQuestions (userInput);
    } else if (questionCount === 10) {
      handleAdditionalQuestions (userInput);
    }
  }

  questionCount++;
  document.getElementById("user-input").value = "";
}

function handleAIResponse(prompt) {
  getAIResponse(prompt)
    .then(response => {
      document.getElementById("chat-content").innerHTML += `<p><strong>Chatbot:</strong> Below is the suitable house for you:</p>`;
      document.getElementById("chat-content").innerHTML += "<p><strong>Chatbot:</strong> You can click the <a href='ChatWithBotlink.php' style='text-decoration: none; color: #000000;'>link</a> to see the house and seller information.</p>";
    })
    .catch(error => {
      console.error('Error handling AI response:', error);
    });
}

function handleAlternateResponse(prompt) {
  if (questionCount === 3) {
    document.getElementById("chat-content").innerHTML += "<p><strong>Chatbot:</strong> Here's some information about <a href='News Finance.php' style='text-decoration: none; color: #000000;'>financing options</a> for your new house.</p>";
  } else if (questionCount === 4) {
    document.getElementById("chat-content").innerHTML += "<p><strong>Chatbot:</strong> Let me provide you with information about nearby <a href='ChatWithBotshoppingcenter.php' style='text-decoration: none; color: #000000;'>shopping centers</a>.</p>";
  }
}

function handleAdditionalQuestions(prompt) {
  if (questionCount === 5) {
    document.getElementById("chat-content").innerHTML += "<p><strong>Chatbot:</strong> Here are some <a href='ChatWithBotTransportation.php' style='text-decoration: none; color: #000000;'>transportation options</a> for your daily commute.</p>";
  } else if (questionCount === 6) {
    document.getElementById("chat-content").innerHTML += "<p><strong>Chatbot:</strong> Here are the <a href='ChatWithBotPetrolStation.php' style='text-decoration: none; color: #000000;'>petrol station</a> that near by your house location.</p>";
  } else if (questionCount === 7) {
    document.getElementById("chat-content").innerHTML += "<p><strong>Chatbot:</strong> The current market value of a house in Puchong can vary depending on various factors, including the size, condition, and location of the property.</p>";
  } else if (questionCount === 8) {
    document.getElementById("chat-content").innerHTML += "<p><strong>Chatbot:</strong> Whether to hire a real estate agent or sell your house on your own, also known as 'For Sale by Owner' (FSBO), depends on your preferences and circumstances.</p>";
  } else if (questionCount === 9) {
    document.getElementById("chat-content").innerHTML += "<p><strong>Chatbot:</strong> Yes, there are tax implications to consider when selling your house, which include Capital Gains Tax, Exclusion of Gain, State and Local Taxes and more.</p>";
  } else if (questionCount === 10) {
    document.getElementById("chat-content").innerHTML += "<p><strong>Chatbot:</strong> The key documents I need to gather for selling your house are property disclosure form, sales contract, bill of sale and more.</p>";
  }
}