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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Effective Home Staging Tips for a Quick Sale</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="news_finance.css">
    <link rel="stylesheet" type="text/css" href="news_newsandtrends.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
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
    <nav class="navbar navbar-below">
        <div class="container">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="news_buying.php">BUYING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news_selling.php">SELLING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news_finance.php">FINANCE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news_newsandtrends.php">NEWS & TRENDS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news_video.php">VIDEO</a>
                </li>
            </ul>
           
        </div>
    </nav>

    <style>

        h3 {
            text-align: center;
            margin-top: 30px;
            color: #000000;
        }

        .article-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .article-meta {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 10px;
        }

        .published-date {
            font-weight: bold;
            color: #585858;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .imgf {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        .title {
            font-family: 'Karma', sans-serif;
            font-size: 28px;
            color: #000000;
            font-weight: bold;
            text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.7);
        }

        .title2 {
            font-family: 'Karma', sans-serif;
            font-size: 28px;
            font-weight: bold;
            text-shadow: 4px 4px 6px rgba(233, 142, 15, 0.7);
        }

        .explaination {
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            color: #000000;
        }

        .subtitle {
            font-family: 'Inter', sans-serif;
            font-size: 22px;
            color: darkblue;
            text-shadow: 4px 4px 6px rgba(182, 222, 230, 0.7);
            transition: text-shadow 0.5s;
            font-weight: bold;
        }

        .subtitle2 {
            font-family: 'Inter', sans-serif;
            font-size: 18px;
            color: darkgreen;
            text-shadow: 4px 4px 6px rgba(140, 232, 132, 0.7);
            transition: text-shadow 0.5s;
            font-weight: bold;
        }

        .button {
            background-color: lightgrey;
            height: 35;
            width: 60px;
        }

        .button:hover {
            background-color: lightgrey;
        }

        .test {
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            text-decoration: none;
            text-shadow: none;
        }
    </style>
</head>

<body>

    <h3 class="title">Smart Homes: Revolutionizing the Real Estate Industry</h3>
    <div class="article-container">
        <img class="imgf" src="news_images/article3.jpg" alt="Trend Image 3" class="img-fluid mb-3">
        <p class="article-meta">Published on <span class="published-date">October 20, 2023</span></p>

        <p class="explaination">
            The art of home staging is a powerful tool that can significantly impact the sale of your property. Properly staging your home can attract potential buyers, highlight its best features, and ultimately lead to a quicker sale. Here are some effective home staging tips to enhance the appeal of your home on the market.
        </p>

        <p class="explaination">
            Begin by decluttering your home. Remove personal items, excess furniture, and anything that can make spaces feel cramped. Potential buyers should be able to envision themselves living in the space, which is challenging if it's filled with personal items.
        </p>

        <p class="explaination">
            Showcase the key features of your home. Whether it's a beautiful fireplace, spacious kitchen, or scenic view, make sure these features take center stage. Arrange furniture and decor to draw attention to these selling points.
        </p>

        <p class="explaination">
            Opt for neutral color schemes when staging your home. Neutral tones create a blank canvas that allows potential buyers to visualize their own style in the space. Neutral walls and decor also make rooms appear larger and brighter.
        </p>

        <p class="explaination">
            Attend to any needed repairs before showing your home. This includes fixing leaky faucets, squeaky doors, and any visible wear and tear. A well-maintained home gives the impression that it has been cared for, instilling confidence in potential buyers.
        </p>

        <p class="explaination">
            Arrange furniture to create inviting and conversational areas. Consider the flow of traffic through each room and ensure that the arrangement complements the functionality of the space. Use cozy accents like throw pillows and blankets to add warmth.
        </p>

        <p class="explaination">
            Open curtains and blinds to maximize natural light. Bright, well-lit spaces feel more spacious and welcoming. If your home has great views, ensure that window coverings do not obstruct them.
        </p>

        <p class="explaination">
            Incorporate plants, flowers, or greenery to add life to your home. Fresh flowers on a dining table or a potted plant in the living room can bring a touch of nature indoors and create a positive atmosphere.
        </p>
            
        <p class="explaination"><a href="news_finance.php" style="text-decoration: none; color: darkblue; font-weight: bold;">Back to Finance</a></p>
    </div>

    <div class="additional-features">

        <div class="feature-section social-media-sharing">
            <h4 class="title2" style="color: orange;">Share on Social Media:</h4>
            <a href="https://twitter.com/share?url=your-article-url&text=Check out this article" class="button text-center" style="border: 1px solid lightgrey;" target="_blank" data-tooltip="Share on Twitter">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.facebook.com/people/Glory-House/61553811544755/" class="button text-center" style="border: 1px solid lightgrey;" target="_blank" data-tooltip="Share on Facebook">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.linkedin.com/shareArticle?url=your-article-url&title=Article Title" class="button text-center" style="border: 1px solid lightgrey;" target="_blank" data-tooltip="Share on LinkedIn">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="feature-section comments-section">
            <h4 class="subtitle" style="font-family: 'Inter', sans-serif; font-size: 20px; color: deepskyblue;">Comments:</h4>
            <div id="comments-container">
                <div class="comment">
                    <img src="news_images/profile1.jpg" alt="User">
                    <p class="explaination">Peter: Good.</p>
                </div>
    
                <div class="comment">
                    <img src="news_images/profile1.jpg" alt="User">
                    <p class="explaination">Peter: Thanks.</p>
                </div>
            </div>
            <textarea id="commentInput" placeholder="Leave your comment" class="explaination" style="font-family: 'Inter', sans-serif; font-size: 14px; color: #000000;"></textarea>
            <button type="button" data-tooltip="Send Comment" onclick="addComment()" style="font-family: 'Inter', sans-serif; font-size: 14px; color: #000000;">
                <i class="fas fa-paper-plane"></i>
            </button>
        </div>
</div>
<footer class="footer">
    <p class="test"> Contact Us: 
        <a href="mailto:gloryhouse072@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a> | 
        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=gloryhouse072@gmail.com" target="_blank"><i class="fab fa-google"></i></a> | 
        <a href="https://compose.mail.yahoo.com/?to=gloryhouse072@gmail.com" target="_blank"><i class="fab fa-yahoo"></i></a> | 
        <i class="fas fa-phone"></i> +60 (198193527)
    </p>
    <div>
        <a href="home.php" class="test">Home</a>
        <a href="About.php" class="test">About Us</a>
        <a href="Terms of Service.php" class="test">Terms of Service</a>
        <a href="Privacy.php" class="test">Privacy Policy</a>
    </div>
    <div>
        <a href="https://www.facebook.com/people/Glory-House/61553811544755/" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/gloryhouse072/" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
    <p class="test">&copy; 2023 Glory House. All rights reserved.</p>
</footer>

        <script>
             const socialMediaLinks = document.querySelectorAll('.social-media-sharing a');
                socialMediaLinks.forEach(link => {
                    link.addEventListener('mouseover', function () {
                        const tooltip = document.createElement('div');
                        tooltip.className = 'tooltip';
                        tooltip.textContent = link.getAttribute('data-tooltip');
                        document.body.appendChild(tooltip);

                        const linkRect = link.getBoundingClientRect();
                        const tooltipRect = tooltip.getBoundingClientRect();

                        tooltip.style.top = `${linkRect.top - tooltipRect.height - 10}px`;
                        tooltip.style.left = `${linkRect.left + linkRect.width / 2 - tooltipRect.width / 2}px`;

                        link.addEventListener('mouseout', function () {
                            tooltip.remove();
                        });
                    });
                });
            function addComment() {
                const users = [
                    { name: "You", profilePic: "news_images/profile1.jpg" },
                ];
    
                const commentInput = document.getElementById("commentInput");
                const commentText = commentInput.value;
    
                const commentsContainer = document.getElementById("comments-container");
                const commentDiv = document.createElement("div");
                commentDiv.classList.add("comment");
    
                const randomUser = users[Math.floor(Math.random() * users.length)];
    
                const profilePic = document.createElement("img");
                profilePic.src = randomUser.profilePic;
                profilePic.alt = "Profile Picture";
                commentDiv.appendChild(profilePic);
    
                const commentTextElement = document.createElement("p");
                commentTextElement.textContent = `${randomUser.name}: ${commentText}`;
                commentDiv.appendChild(commentTextElement);
    
                if (randomUser.name === "You") {
                    const deleteButton = document.createElement("button");
                    deleteButton.classList.add("delete-button");
                    deleteButton.dataset.tooltip = "Delete Comment";
                    deleteButton.onclick = function () {
                        deleteComment(this);
                    };
                    const trashIcon = document.createElement("i");
                    trashIcon.classList.add("fas", "fa-trash");
                    deleteButton.appendChild(trashIcon);
                    commentDiv.appendChild(deleteButton);
                }
    
                commentsContainer.appendChild(commentDiv);
    
                commentInput.value = "";
            }
    
            function deleteComment(button) {
                const commentDiv = button.closest(".comment");
                commentDiv.remove();
            }
        </script>
</body>
</html>