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
    <title>How to Choose the Right Neighborhood for Your Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="news_buying.css">
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
                    .imgb {
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
                    }

                    .published-date {
                        font-weight: bold;
                        color: #585858;
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

    <div style="margin-top: 20px;"></div>
    <body>
        <header>
            <h1 class="title">How to Choose the Right Neighborhood for Your Home</h1>
        </header>
    
        <main>
            <img class="imgb" src="news_images/buyinghouseimages4.jpg" alt="Buying News Image 4">
            <p class="article-meta">Published on <span class="published-date">August 23, 2023</span></p>

            <div style="margin-top: 10px;"></div>

            <p class="explaination">
                Choosing the right neighborhood is a crucial step in the home-buying process. Your neighborhood will not only affect your daily life but also play a significant role in the future value of your home. Here are some essential tips to help you make an informed decision when selecting the perfect neighborhood for your new home.
            </p>

            <h2 class="subtitle">Determine Your Priorities</h2>
            <p class="explaination">
                Start by listing your priorities for an ideal neighborhood. Consider factors such as proximity to work, school quality, safety, public services, and amenities. Understanding your priorities will guide your search and help you focus on neighborhoods that align with your lifestyle and preferences.
            </p>

            <h2 class="subtitle">Research Local Amenities</h2>
            <p class="explaination">
                Explore the amenities available in potential neighborhoods. Look for nearby parks, shopping centers, schools, medical facilities, and recreational areas. Access to these amenities can significantly impact your quality of life and contribute to the overall desirability of the neighborhood.
            </p>

            <h2 class="subtitle">Evaluate Safety and Crime Rates</h2>
            <p class="explaination">
                Safety is a top concern for homeowners. Research the crime rates in different neighborhoods to gauge the level of safety. Online crime maps, local police reports, and community forums can provide valuable insights. Additionally, consider the presence of neighborhood watch programs and community policing efforts.
            </p>

            <h2 class="subtitle">School Quality</h2>
            <p class="explaination">
                For families with children or those planning for the future, school quality is a critical consideration. Research the reputation of local schools, both public and private. Online resources, school ratings, and parent reviews can offer valuable information about the educational opportunities in a particular neighborhood.
            </p>

            <h2 class="subtitle">Visit at Different Times</h2>
            <p class="explaination">
                To get a comprehensive feel for a neighborhood, visit at different times of the day and week. This allows you to assess factors such as traffic patterns, noise levels, and the general atmosphere. A peaceful neighborhood during the day may have different characteristics in the evening or on weekends.
            </p>

            <h2 class="subtitle">Future Development Plans</h2>
            <p class="explaination">
                Investigate any future development plans for the neighborhood. This could include infrastructure projects, zoning changes, or commercial developments. Understanding the trajectory of the neighborhood can help you anticipate how it will evolve in the coming years and whether it aligns with your long-term plans.
            </p>

            <h2 class="subtitle">Connect with Residents</h2>
            <p class="explaination">
                Take the time to connect with current residents. Attend community events, visit local establishments, and join online forums or social media groups. Engaging with residents provides valuable insights into the sense of community, neighborhood dynamics, and potential challenges you might face as a resident.
            </p>
    
            <p class="explaination"><a href="news_buying.php" style="text-decoration: none; color: darkblue; font-weight: bold;">Back to News Buying</a></p>
        
        </main>

        <div style="margin-top: 20px;"></div>

    </div>

    <div class="additional-features">


        <div class="feature-section social-media-sharing">
            <h4 class="title2" style="color: orange;">Share on Social Media:</h4>
            <a href="https://twitter.com/share?url=your-article-url&text=Check out this article" class="button text-center" style="border: 1px solid lightgrey;" target="_blank" data-tooltip="Share on Twitter">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.facebook.com/people/Glory-House/61553811544755/" target="_blank" class="button text-center" style="border: 1px solid lightgrey;" data-tooltip="Share on Facebook">
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