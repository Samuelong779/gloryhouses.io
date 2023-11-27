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
    <title>Marketing Your Property: Proven Techniques for Maximum Exposure</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="news_selling.css">
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
        header {
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2.5em;
        }

        main {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            border-radius: 8px;
            font-size: 1.1em;
            line-height: 1.6;
            color: #333;
        }

        h2 {
            color: #007bff;
            margin-bottom: 20px;
            font-size: 1.8em;
        }

        ul {
            list-style-type: decimal;
            margin-bottom: 20px;
        }

        p{
            margin-bottom: 15px;
        }

        .imgs {
            max-width: 50%;
            height: auto;
            margin-top: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .article-meta {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 10px;
            font-family: 'Inter', sans-serif;
            font-weight: 600;
        }

        .published-date {
            font-size: 14px;
            color: #585858;
            font-family: 'Inter', sans-serif;
            font-weight: 600;
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

    <div style="margin-top: 20px;"></div>

    <body>
        <header>
            <h1 class="title">Marketing Your Property: Proven Techniques for Maximum Exposure</h1>
        </header>

        <main>
            <img class="imgs" src="news_images/sellinghouseimages4.jpg" alt="Selling News Image 4">
            <p class="article-meta">Published on <span class="published-date">October 01, 2023</span></p>

            <div style="margin-top: 10px;"></div>
            
            <p class="explaination">
                Successfully selling your property goes beyond listing it on real estate platforms. Effective marketing is key to attracting potential buyers and maximizing your property's exposure in the market. Here are proven techniques to ensure your property gets the attention it deserves.
            </p>

            <h2 class="subtitle">1. Professional Photography and Staging</h2>
            <p class="explaination">
                First impressions matter, and high-quality, professional photos can make your property stand out. Consider hiring a photographer to showcase your home's best features. Additionally, stage your home to create an inviting atmosphere that resonates with potential buyers.
            </p>

            <h2 class="subtitle">2. Create a Compelling Listing</h2>
            <p class="explaination">
                Craft a compelling and informative listing that highlights the unique selling points of your property. Use descriptive language, emphasize key features, and be transparent about the property's condition. The more details you provide, the more confident and interested buyers will be.
            </p>

            <h2 class="subtitle">3. Leverage Social Media</h2>
            <p class="explaination">
                Utilize the power of social media to reach a broader audience. Share your property listing on platforms like Facebook, Instagram, and Twitter. Consider creating engaging content such as virtual tours, behind-the-scenes glimpses, and neighborhood highlights to generate interest.
            </p>

            <h2>4. Collaborate with Real Estate Agents</h2>
            <p class="explaination">
                Partnering with experienced real estate agents can significantly enhance your property's visibility. Agents have access to multiple listing services (MLS) and can promote your property within their network. Their expertise in negotiations and market trends is invaluable.
            </p>

            <h2 class="subtitle">5. Host Open Houses and Virtual Tours</h2>
            <p class="explaination">
                Give potential buyers the opportunity to experience your property firsthand. Host open houses and virtual tours to showcase the space and allow visitors to envision themselves living there. Create a welcoming atmosphere to leave a lasting impression.
            </p>

            <h2 class="subtitle">6. Utilize Email Marketing</h2>
            <p class="explaination">
                Build an email marketing campaign targeting potential buyers and real estate professionals. Send out newsletters, property updates, and exclusive previews to keep your property in their minds. A well-executed email strategy can generate leads and inquiries.
            </p>
  
            <p class="explaination"><a href="news_selling.php" style="text-decoration: none; color: darkblue; font-weight: bold;">Back to News Selling</a></p>
        
        </main>


    <div style="margin-top: 20px;"></div>

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
    <p>&copy; 2023 Glory House. All rights reserved.</p>
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